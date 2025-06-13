<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class ActionButtonsWidget extends Widget
{
    protected static string $view = 'filament.widgets.action-buttons-widget';

    protected int|string|array $columnSpan = 'full';

    protected static ?int $sort = 4;

    protected function getViewData(): array
    {
        return [
            'actions' => [
                [
                    'label' => 'Upload Media',
                    'icon' => 'heroicon-m-photo',
                    'color' => 'primary',
                    'url' => route('filament.admin.resources.media.create'),
                    'description' => 'Add new images, videos, or documents'
                ],
                [
                    'label' => 'Create Product',
                    'icon' => 'heroicon-m-shopping-bag',
                    'color' => 'success',
                    'url' => route('filament.admin.resources.produks.create'),
                    'description' => 'Add a new product to your catalog'
                ],
                [
                    'label' => 'Manage Categories',
                    'icon' => 'heroicon-m-tag',
                    'color' => 'warning',
                    'url' => route('filament.admin.resources.kategoris.index'),
                    'description' => 'Organize products by categories'
                ],
                [
                    'label' => 'Add User',
                    'icon' => 'heroicon-m-user-plus',
                    'color' => 'danger',
                    'url' => route('filament.admin.resources.users.create'),
                    'description' => 'Create new administrator or customer'
                ],
            ]
        ];
    }
}
