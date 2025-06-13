<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoriResource\Pages;
<<<<<<< HEAD
use App\Models\kategori;
=======
use App\Models\Kategori;
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;

class KategoriResource extends Resource
{
<<<<<<< HEAD
    protected static ?string $model = kategori::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static ?string $navigationLabel = 'Kategori';

    protected static ?string $navigationGroup = 'Manajemen Bisnis';
=======
    protected static ?string $model = Kategori::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static ?string $navigationLabel = 'Categories';

    protected static ?string $navigationGroup = 'Company Management';

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'nama_kategori';
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
<<<<<<< HEAD
                Forms\Components\TextInput::make('nama_kategori')
                    ->required()
                    ->maxLength(100)
                    ->label('Nama Kategori'),
                Forms\Components\Textarea::make('deskripsi_kategori')
                    ->maxLength(65535)
                    ->label('Deskripsi'),
=======
                Forms\Components\Section::make('Category Details')
                    ->schema([
                        Forms\Components\TextInput::make('nama_kategori')
                            ->label('Category Name')
                            ->required()
                            ->maxLength(100),
                        Forms\Components\RichEditor::make('deskripsi_kategori')
                            ->label('Category Description')
                            ->columnSpanFull(),
                    ])
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
<<<<<<< HEAD
                Tables\Columns\TextColumn::make('id_kategori')
                    ->label('ID')
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_kategori')
                    ->label('Nama Kategori')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deskripsi_kategori')
                    ->label('Deskripsi')
                    ->limit(50)
                    ->searchable(),
            ])
=======
                Tables\Columns\TextColumn::make('nama_kategori')
                    ->label('Category Name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('deskripsi_kategori')
                    ->label('Description')
                    ->html()
                    ->limit(50)
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('nama_kategori', 'asc')
>>>>>>> 8d96a9ada775108db2a3a164a473d462c6f78f84
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
<<<<<<< HEAD
                Tables\Actions\DeleteAction::make(),
=======
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
            'index' => Pages\ListKategoris::route('/'),
            'create' => Pages\CreateKategori::route('/create'),
            'edit' => Pages\EditKategori::route('/{record}/edit'),
        ];
    }
}
