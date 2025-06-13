<?php

namespace App\Filament\Pages;

use App\Models\AnakPerusahaan;
use App\Models\kategori;
use App\Models\Media;
use App\Models\Produk;
use App\Models\User;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Support\Str;

class GlobalSearch extends Page implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected static ?string $navigationIcon = 'heroicon-o-magnifying-glass';
    protected static ?string $navigationLabel = 'Global Search';
    protected static ?string $slug = 'search';
    protected static ?string $title = 'Global Search';
    protected static ?string $navigationGroup = 'Settings';
    protected static ?int $navigationSort = 99;

    public string $searchQuery = '';

    protected static string $view = 'filament.pages.global-search';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                // Empty query to start with
                User::query()->where('id_user', null)
            )
            ->columns([
                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->formatStateUsing(fn($state) => Str::ucfirst($state))
                    ->color(fn(string $state): string => match ($state) {
                        'user' => 'info',
                        'media' => 'success',
                        'product' => 'warning',
                        'company' => 'danger',
                        'category' => 'primary',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('title')
                    ->label('Title/Name')
                    ->searchable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('subtitle')
                    ->label('Description')
                    ->limit(50)
                    ->color('gray'),
                Tables\Columns\TextColumn::make('date')
                    ->label('Date')
                    ->date()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('view')
                    ->url(fn($record): string => $record['url'])
                    ->icon('heroicon-o-arrow-top-right-on-square')
                    ->openUrlInNewTab()
            ])
            ->emptyStateIcon('heroicon-o-magnifying-glass')
            ->emptyStateHeading('No search results')
            ->emptyStateDescription('Try searching for something else.')
            ->paginated([10, 25, 50])
            ->poll('10s');
    }

    public function search(): void
    {
        $this->resetPage();
    }

    public function getTableQuery()
    {
        if (empty($this->searchQuery) || strlen($this->searchQuery) < 3) {
            return User::query()->where('id_user', null);  // Empty result set
        }

        // Search for users
        $users = User::query()
            ->where('nama', 'like', "%{$this->searchQuery}%")
            ->orWhere('email', 'like', "%{$this->searchQuery}%")
            ->get()
            ->map(function ($user) {
                return [
                    'id' => 'user-' . $user->id_user,
                    'type' => 'user',
                    'title' => $user->nama,
                    'subtitle' => $user->email . ' - ' . Str::ucfirst($user->role),
                    'date' => $user->created_at,
                    'url' => route('filament.admin.resources.users.edit', $user->id_user),
                ];
            });

        // Search for media
        $media = Media::query()
            ->where('title', 'like', "%{$this->searchQuery}%")
            ->orWhere('description', 'like', "%{$this->searchQuery}%")
            ->get()
            ->map(function ($media) {
                return [
                    'id' => 'media-' . $media->id,
                    'type' => 'media',
                    'title' => $media->title,
                    'subtitle' => $media->description ?? 'No description provided',
                    'date' => $media->created_at,
                    'url' => route('filament.admin.resources.media.edit', $media->id),
                ];
            });

        // Search for products
        $products = Produk::query()
            ->where('nama_produk', 'like', "%{$this->searchQuery}%")
            ->orWhere('deskripsi_produk', 'like', "%{$this->searchQuery}%")
            ->get()
            ->map(function ($product) {
                return [
                    'id' => 'product-' . $product->id_produk,
                    'type' => 'product',
                    'title' => $product->nama_produk,
                    'subtitle' => $product->deskripsi_produk ?? 'No description provided',
                    'date' => $product->created_at,
                    'url' => route('filament.admin.resources.produks.edit', $product->id_produk),
                ];
            });

        // Search for companies
        $companies = AnakPerusahaan::query()
            ->where('nama_perusahaan', 'like', "%{$this->searchQuery}%")
            ->orWhere('deskripsi', 'like', "%{$this->searchQuery}%")
            ->get()
            ->map(function ($company) {
                return [
                    'id' => 'company-' . $company->id_anak_perusahaan,
                    'type' => 'company',
                    'title' => $company->nama_perusahaan,
                    'subtitle' => $company->deskripsi ?? 'No description provided',
                    'date' => $company->created_at,
                    'url' => route('filament.admin.resources.anak-perusahaans.edit', $company->id_anak_perusahaan),
                ];
            });

        // Search for categories
        $categories = kategori::query()
            ->where('nama_kategori', 'like', "%{$this->searchQuery}%")
            ->orWhere('deskripsi_kategori', 'like', "%{$this->searchQuery}%")
            ->get()
            ->map(function ($category) {
                return [
                    'id' => 'category-' . $category->id_kategori,
                    'type' => 'category',
                    'title' => $category->nama_kategori,
                    'subtitle' => $category->deskripsi_kategori ?? 'No description provided',
                    'date' => $category->created_at,
                    'url' => route('filament.admin.resources.kategoris.edit', $category->id_kategori),
                ];
            });

        // Combine all search results
        $allResults = $users
            ->concat($media)
            ->concat($products)
            ->concat($companies)
            ->concat($categories)
            ->sortByDesc('date')
            ->values()
            ->toArray();

        if (empty($allResults)) {
            return User::query()->where('id_user', null);  // Empty result set
        }

        // Create a query that will return our results as if they were from a database
        return User::query()
            ->whereIn('id_user', [])  // Empty result set as base
            ->unionAll(function ($query) use ($allResults) {
                // For each result, create a row with our expected columns
                foreach ($allResults as $index => $result) {
                    $subquery = User::query()
                        ->select([
                            \DB::raw("'{$result['id']}' as id"),
                            \DB::raw("'{$result['type']}' as type"),
                            \DB::raw("'{$result['title']}' as title"),
                            \DB::raw("'{$result['subtitle']}' as subtitle"),
                            \DB::raw("'{$result['date']}' as date"),
                            \DB::raw("'{$result['url']}' as url"),
                        ]);

                    if ($index === 0) {
                        $query->from($subquery);
                    } else {
                        $query->unionAll($subquery);
                    }
                }
            });
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('searchQuery')
                ->label('Search')
                ->placeholder('Search for anything...')
                ->autocomplete(false)
                ->autofocus()
                ->live(debounce: 500)
                ->afterStateUpdated(function () {
                    $this->search();
                }),
        ];
    }
}
