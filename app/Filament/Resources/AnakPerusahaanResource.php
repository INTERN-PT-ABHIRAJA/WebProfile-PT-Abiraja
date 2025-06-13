<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnakPerusahaanResource\Pages;
<<<<<<< HEAD
use App\Models\AnakPerusahaan;
use App\Models\kategori;
=======
use App\Filament\Resources\AnakPerusahaanResource\RelationManagers;
use App\Models\AnakPerusahaan;
use App\Models\Kategori;
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
use App\Models\User;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\SoftDeletingScope;
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84

class AnakPerusahaanResource extends Resource
{
    protected static ?string $model = AnakPerusahaan::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationLabel = 'Anak Perusahaan';

<<<<<<< HEAD
    protected static ?string $pluralModelLabel = 'Anak Perusahaan';

    protected static ?string $modelLabel = 'Anak Perusahaan';

    protected static ?string $navigationGroup = 'Manajemen Bisnis';
=======
    protected static ?string $navigationGroup = 'Company Management';

    protected static ?int $navigationSort = 1;
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
<<<<<<< HEAD
                Forms\Components\Select::make('id_user')
                    ->label('Pemilik')
                    ->options(User::where('role', 'owner')->pluck('nama', 'id_user'))
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('id_kategori')
                    ->label('Kategori')
                    ->options(Kategori::pluck('nama_kategori', 'id_kategori'))
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('nama_perusahaan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsi')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('alamat')
                    ->maxLength(255),
                Forms\Components\TextInput::make('telepon')
                    ->tel()
                    ->maxLength(20),
                Forms\Components\FileUpload::make('foto')
                    ->image()
                    ->disk('public')
                    ->directory('anak-perusahaan')
                    ->visibility('public')
                    ->multiple(),
                Forms\Components\FileUpload::make('video')
                    ->acceptedFileTypes(['video/mp4'])
                    ->disk('public')
                    ->directory('anak-perusahaan/videos')
                    ->visibility('public'),
                Forms\Components\DatePicker::make('berdiri_sejak')
                    ->label('Berdiri Sejak')
                    ->required(),
=======
                Forms\Components\Section::make('Company Information')
                    ->description('Basic information about the company')
                    ->schema([
                        Forms\Components\Select::make('id_user')
                            ->label('Owner')
                            ->options(User::all()->pluck('nama', 'id_user'))
                            ->required()
                            ->searchable(),
                        Forms\Components\Select::make('id_kategori')
                            ->label('Category')
                            ->options(Kategori::all()->pluck('nama_kategori', 'id_kategori'))
                            ->searchable(),
                        Forms\Components\TextInput::make('nama_perusahaan')
                            ->label('Company Name')
                            ->required()
                            ->maxLength(150),
                        Forms\Components\DatePicker::make('berdiri_sejak')
                            ->label('Established Date'),
                    ])
                    ->columns(2),
                Forms\Components\Section::make('Company Details')
                    ->schema([
                        Forms\Components\RichEditor::make('deskripsi')
                            ->label('Description')
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('alamat')
                            ->label('Address')
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('telepon')
                            ->label('Phone Number')
                            ->tel()
                            ->maxLength(20),
                    ]),
                Forms\Components\Section::make('Media')
                    ->schema([
                        Forms\Components\FileUpload::make('foto')
                            ->label('Company Photo')
                            ->image()
                            ->directory('anak-perusahaan/photos')
                            ->maxSize(5120),  // 5MB
                        Forms\Components\FileUpload::make('video')
                            ->label('Company Video')
                            ->acceptedFileTypes(['video/mp4', 'video/avi', 'video/quicktime'])
                            ->directory('anak-perusahaan/videos')
                            ->maxSize(20480),  // 20MB
                    ])
                    ->columns(2),
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_perusahaan')
<<<<<<< HEAD
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.nama')
                    ->label('Pemilik')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kategori.nama_kategori')
                    ->label('Kategori')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->limit(30)
                    ->searchable(),
                Tables\Columns\TextColumn::make('telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berdiri_sejak')
                    ->date()
=======
                    ->label('Company Name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('user.nama')
                    ->label('Owner')
                    ->sortable(),
                Tables\Columns\TextColumn::make('kategori.nama_kategori')
                    ->label('Category')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('foto')
                    ->label('Photo')
                    ->circular(),
                Tables\Columns\TextColumn::make('telepon')
                    ->label('Phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berdiri_sejak')
                    ->label('Established')
                    ->date('d M Y')
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
<<<<<<< HEAD
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('id_kategori')
                    ->label('Kategori')
                    ->options(Kategori::pluck('nama_kategori', 'id_kategori')),
                Tables\Filters\SelectFilter::make('id_user')
                    ->label('Pemilik')
                    ->options(User::where('role', 'owner')->pluck('nama', 'id_user')),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
=======
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('id_kategori')
                    ->label('Category')
                    ->options(Kategori::all()->pluck('nama_kategori', 'id_kategori')),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListAnakPerusahaans::route('/'),
            'create' => Pages\CreateAnakPerusahaan::route('/create'),
            'edit' => Pages\EditAnakPerusahaan::route('/{record}/edit'),
        ];
    }
}
