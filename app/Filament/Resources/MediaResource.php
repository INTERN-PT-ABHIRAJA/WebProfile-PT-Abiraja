<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MediaResource\Pages;
use App\Models\Media;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\Layout\Panel;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MediaResource extends Resource
{
    protected static ?string $model = Media::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationLabel = 'Media Library';

    protected static ?string $navigationGroup = 'Content Management';

    protected static ?int $navigationSort = 3;

    protected static ?string $recordTitleAttribute = 'title';

    public static function getGloballySearchableAttributes(): array
    {
        return ['title', 'description', 'mime_type'];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Media Information')
                    ->description('Basic information about the media file')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->autofocus()
                            ->placeholder('Enter media title')
                            ->helperText('A descriptive title for this media file'),
                        Forms\Components\Textarea::make('description')
                            ->maxLength(65535)
                            ->placeholder('Add a detailed description')
                            ->columnSpanFull(),
                    ])
                    ->columns(1),
                Forms\Components\Section::make('Media File')
                    ->description('Upload or update the media file')
                    ->schema([
                        Forms\Components\FileUpload::make('file_path')
                            ->required()
                            ->disk('public_assets')
                            ->directory('media')
                            ->visibility('public')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif', 'application/pdf', 'video/mp4'])
                            ->maxSize(10240)  // 10MB
                            ->imagePreviewHeight('250')
                            ->loadingIndicatorPosition('left')
                            ->panelLayout('compact')
                            ->removeUploadedFileButtonPosition('right')
                            ->uploadButtonPosition('left')
                            ->uploadProgressIndicatorPosition('left')
                            ->afterStateUpdated(function (Forms\Set $set, $state) {
                                if ($state) {
                                    $set('mime_type', Storage::disk('public_assets')->mimeType($state));
                                    $set('file_size', Storage::disk('public_assets')->size($state));
                                }
                            }),
                    ]),
                Forms\Components\Section::make('File Details')
                    ->description('Technical details about the file (auto-populated)')
                    ->schema([
                        Forms\Components\TextInput::make('mime_type')
                            ->disabled()
                            ->dehydrated()
                            ->label('File Type'),
                        Forms\Components\TextInput::make('file_size')
                            ->disabled()
                            ->dehydrated()
                            ->formatStateUsing(fn(?string $state) => $state ? format_bytes($state) : null)
                            ->label('File Size'),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Split::make([
                    Tables\Columns\ImageColumn::make('file_path')
                        ->disk('public_assets')
                        ->visibility('public')
                        ->label('Preview')
                        ->height(50)
                        ->extraImgAttributes(['class' => 'rounded-lg shadow-sm']),
                    Stack::make([
                        Tables\Columns\TextColumn::make('title')
                            ->searchable()
                            ->weight(FontWeight::Bold)
                            ->limit(30),
                        Tables\Columns\TextColumn::make('description')
                            ->limit(40)
                            ->color('gray')
                            ->searchable(),
                        Tables\Columns\TextColumn::make('created_at')
                            ->dateTime()
                            ->prefix('Uploaded ')
                            ->sortable()
                            ->color('gray')
                            ->size('sm'),
                    ]),
                    Stack::make([
                        Tables\Columns\TextColumn::make('mime_type')
                            ->badge()
                            ->formatStateUsing(fn($state) => Str::afterLast($state, '/'))
                            ->color(fn(string $state): string => match (Str::before($state, '/')) {
                                'image' => 'success',
                                'video' => 'danger',
                                'application' => 'warning',
                                default => 'gray',
                            }),
                        Tables\Columns\TextColumn::make('file_size')
                            ->formatStateUsing(fn(string $state): string => format_bytes($state))
                            ->color('gray')
                            ->size('sm'),
                    ])->alignment('right'),
                ])
                    ->from('md'),
                Panel::make([
                    Stack::make([
                        Tables\Columns\TextColumn::make('created_at')
                            ->dateTime()
                            ->label('Created')
                            ->sortable(),
                        Tables\Columns\TextColumn::make('updated_at')
                            ->dateTime()
                            ->label('Last Updated')
                            ->sortable()
                            ->color('gray'),
                    ]),
                ])->collapsed(),
            ])
            ->filters([
                SelectFilter::make('mime_type')
                    ->label('File Type')
                    ->options([
                        'image/jpeg' => 'JPEG Image',
                        'image/png' => 'PNG Image',
                        'image/gif' => 'GIF Image',
                        'application/pdf' => 'PDF Document',
                        'video/mp4' => 'MP4 Video',
                    ])
                    ->multiple(),
                Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('created_from')
                            ->label('Uploaded From'),
                        Forms\Components\DatePicker::make('created_until')
                            ->label('Uploaded Until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn(Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn(Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    })
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->label('Preview')
                    ->icon('heroicon-o-eye')
                    ->modalContent(fn(Media $record) => view(
                        'filament.resources.media-resource.preview',
                        ['record' => $record]
                    ))
                    ->modalWidth('md'),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->requiresConfirmation(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->icon('heroicon-o-trash')
                        ->requiresConfirmation(),
                ]),
            ])
            ->emptyStateIcon('heroicon-o-photo')
            ->emptyStateHeading('No Media Files Yet')
            ->emptyStateDescription('Once you upload media files, they will appear here.')
            ->emptyStateActions([
                Tables\Actions\Action::make('create')
                    ->label('Upload Media')
                    ->icon('heroicon-o-plus')
                    ->url(route('filament.admin.resources.media.create'))
                    ->color('primary'),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMedia::route('/'),
            'create' => Pages\CreateMedia::route('/create'),
            'edit' => Pages\EditMedia::route('/{record}/edit'),
        ];
    }
}
