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
<<<<<<< HEAD
=======
use Illuminate\Support\Str;
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84

class ProdukResource extends Resource
{
    protected static ?string $model = Produk::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

<<<<<<< HEAD
    protected static ?string $navigationLabel = 'Produk';

    protected static ?string $navigationGroup = 'Manajemen Bisnis';
=======
    protected static ?string $navigationLabel = 'Products';

    protected static ?string $navigationGroup = 'Inventory Management';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'nama_produk';
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
<<<<<<< HEAD
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
=======
                Forms\Components\Section::make('Product Information')
                    ->description('Basic information about the product')
                    ->schema([
                        Forms\Components\Select::make('id_anak_perusahaan')
                            ->label('Company')
                            ->options(AnakPerusahaan::all()->pluck('nama_perusahaan', 'id_anak_perusahaan'))
                            ->required()
                            ->searchable(),
                        Forms\Components\TextInput::make('nama_produk')
                            ->label('Product Name')
                            ->required()
                            ->maxLength(150),
                        Forms\Components\RichEditor::make('deskripsi_produk')
                            ->label('Description')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
                Forms\Components\Section::make('Product Details')
                    ->schema([
                        Forms\Components\TextInput::make('harga')
                            ->label('Price')
                            ->required()
                            ->numeric()
                            ->prefix('Rp')
                            ->inputMode('decimal'),
                        Forms\Components\TextInput::make('stok')
                            ->label('Stock')
                            ->required()
                            ->numeric()
                            ->minValue(0)
                            ->default(0),
                    ])
                    ->columns(2),
                Forms\Components\Section::make('Media')
                    ->schema([
                        Forms\Components\FileUpload::make('foto')
                            ->label('Product Image')
                            ->image()
                            ->directory('products/images')
                            ->maxSize(5120),  // 5MB
                        Forms\Components\FileUpload::make('video')
                            ->label('Product Video')
                            ->acceptedFileTypes(['video/mp4', 'video/avi', 'video/quicktime'])
                            ->directory('products/videos')
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
<<<<<<< HEAD
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
=======
                Tables\Columns\ImageColumn::make('foto')
                    ->label('Image')
                    ->circular(),
                Tables\Columns\TextColumn::make('nama_produk')
                    ->label('Product Name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('anakPerusahaan.nama_perusahaan')
                    ->label('Company')
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga')
                    ->label('Price')
                    ->money('IDR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('stok')
                    ->label('Stock')
                    ->badge()
                    ->color(fn(string $state): string => match (true) {
                        $state <= 0 => 'danger',
                        $state <= 10 => 'warning',
                        default => 'success',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->date()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated')
                    ->date()
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('id_anak_perusahaan')
<<<<<<< HEAD
                    ->label('Anak Perusahaan')
                    ->options(AnakPerusahaan::pluck('nama_perusahaan', 'id_anak_perusahaan')),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
=======
                    ->label('Company')
                    ->options(AnakPerusahaan::all()->pluck('nama_perusahaan', 'id_anak_perusahaan')),
                Tables\Filters\Filter::make('in_stock')
                    ->label('In Stock')
                    ->query(fn(Builder $query): Builder => $query->where('stok', '>', 0)),
            ])
            ->actions([
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
            'index' => Pages\ListProduks::route('/'),
            'create' => Pages\CreateProduk::route('/create'),
            'edit' => Pages\EditProduk::route('/{record}/edit'),
        ];
    }
}
