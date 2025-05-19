<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdukResource\Pages;
use App\Models\AnakPerusahaan;
use App\Models\Produk;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;

class ProdukResource extends Resource
{
    protected static ?string $model = Produk::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?string $navigationLabel = 'Produk';

    protected static ?string $navigationGroup = 'Manajemen Bisnis';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_anak_perusahaan')
                    ->label('Anak Perusahaan')
                    ->options(AnakPerusahaan::pluck('nama_perusahaan', 'id_anak_perusahaan'))
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('nama_produk')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama Produk'),
                Forms\Components\Textarea::make('deskripsi_produk')
                    ->maxLength(65535)
                    ->label('Deskripsi'),
                Forms\Components\TextInput::make('harga')
                    ->required()
                    ->numeric()
                    ->prefix('Rp')
                    ->label('Harga'),
                Forms\Components\TextInput::make('stok')
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->label('Stok'),
                Forms\Components\FileUpload::make('foto')
                    ->image()
                    ->multiple()
                    ->disk('public')
                    ->directory('produk')
                    ->visibility('public')
                    ->label('Foto Produk'),
                Forms\Components\FileUpload::make('video')
                    ->acceptedFileTypes(['video/mp4'])
                    ->disk('public')
                    ->directory('produk/videos')
                    ->visibility('public')
                    ->label('Video Produk'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('anakPerusahaan.nama_perusahaan')
                    ->label('Anak Perusahaan')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_produk')
                    ->label('Nama Produk')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga')
                    ->money('IDR')
                    ->sortable()
                    ->label('Harga'),
                Tables\Columns\TextColumn::make('stok')
                    ->numeric()
                    ->sortable()
                    ->label('Stok'),
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
                Tables\Filters\SelectFilter::make('id_anak_perusahaan')
                    ->label('Anak Perusahaan')
                    ->options(AnakPerusahaan::pluck('nama_perusahaan', 'id_anak_perusahaan')),
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
            'index' => Pages\ListProduks::route('/'),
            'create' => Pages\CreateProduk::route('/create'),
            'edit' => Pages\EditProduk::route('/{record}/edit'),
        ];
    }
}
