<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnakPerusahaanResource\Pages;
use App\Models\AnakPerusahaan;
use App\Models\kategori;
use App\Models\User;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;

class AnakPerusahaanResource extends Resource
{
    protected static ?string $model = AnakPerusahaan::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationLabel = 'Anak Perusahaan';

    protected static ?string $pluralModelLabel = 'Anak Perusahaan';

    protected static ?string $modelLabel = 'Anak Perusahaan';

    protected static ?string $navigationGroup = 'Manajemen Bisnis';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_perusahaan')
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
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
