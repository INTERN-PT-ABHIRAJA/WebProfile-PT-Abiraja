<?php

namespace App\Filament\Widgets;

use App\Models\Media;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use Illuminate\Support\Str;

class LatestMediaWidget extends BaseWidget
{
    protected static ?int $sort = 3;
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->heading('Latest Media Files')
            ->description('Recently uploaded media files')
            ->query(
                Media::query()->latest()->limit(5)
            )
            ->columns([
                Tables\Columns\ImageColumn::make('file_path')
                    ->disk('public_assets')
                    ->visibility('public')
                    ->square()
                    ->size(40),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->limit(30),
                Tables\Columns\TextColumn::make('mime_type')
                    ->searchable()
                    ->badge()
                    ->color(fn(string $state): string => match (Str::before($state, '/')) {
                        'image' => 'success',
                        'video' => 'danger',
                        'application' => 'warning',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\Action::make('view')
                    ->url(fn(Media $record): string => route('filament.admin.resources.media.edit', $record))
                    ->icon('heroicon-m-eye'),
            ]);
    }
}
