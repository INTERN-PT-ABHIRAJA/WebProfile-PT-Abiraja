<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class HelpDocumentation extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';
    protected static ?string $navigationLabel = 'Help & Documentation';
    protected static ?string $slug = 'help';
    protected static ?string $title = 'Help & Documentation';
    protected static ?string $navigationGroup = 'Settings';
    protected static ?int $navigationSort = 100;
    protected static string $view = 'filament.pages.help-documentation';

    protected function getHeaderWidgets(): array
    {
        return [];
    }
}
