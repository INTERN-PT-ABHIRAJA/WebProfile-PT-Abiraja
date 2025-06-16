<?php

namespace App\Config;

class DashboardConfig
{
    /**
     * This class configures the dashboard for all database tables and their management
     * It serves as a central configuration point for the dashboard without Filament
     */
    
    /**
     * Define all tables that are manageable in the dashboard
     * Format: 'table_key' => ['name' => 'Display Name', 'model' => 'Model Class', 'icon' => 'svg-icon-code']
     */
    public static function getTables(): array
    {
        return [
            'users' => [
                'name' => 'Users',
                'name_id' => 'Pengguna',
                'model' => \App\Models\User::class,
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>',
                'route_name' => 'users',
                'permissions' => ['admin', 'owner'],
                'color' => 'primary',
            ],
            'categories' => [
                'name' => 'Categories',
                'name_id' => 'Kategori',
                'model' => \App\Models\Kategori::class,
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" /></svg>',
                'route_name' => 'categories',
                'permissions' => ['admin', 'owner'],
                'color' => 'indigo',
            ],
            'companies' => [
                'name' => 'Companies',
                'name_id' => 'Anak Perusahaan',
                'model' => \App\Models\AnakPerusahaan::class,
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>',
                'route_name' => 'companies',
                'permissions' => ['admin', 'owner'],
                'color' => 'green',
            ],
            'products' => [
                'name' => 'Products',
                'name_id' => 'Produk',
                'model' => \App\Models\Produk::class,
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>',
                'route_name' => 'products',
                'permissions' => ['admin', 'owner'],
                'color' => 'purple',
            ],
            'media' => [
                'name' => 'Media',
                'name_id' => 'Media',
                'model' => \App\Models\Media::class,
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>',
                'route_name' => 'media',
                'permissions' => ['admin', 'owner'],
                'color' => 'yellow',
            ],
        ];
    }

    /**
     * Get table columns configuration for display in index pages
     */
    public static function getTableColumns(string $table): array
    {
        $columns = [
            'users' => [
                'nama' => [
                    'label' => 'Name',
                    'label_id' => 'Nama',
                    'sortable' => true,
                ],
                'email' => [
                    'label' => 'Email',
                    'label_id' => 'Email',
                    'sortable' => true,
                ],
                'role' => [
                    'label' => 'Role',
                    'label_id' => 'Peran',
                    'sortable' => true,
                ],
            ],
            'categories' => [
                'nama_kategori' => [
                    'label' => 'Category Name',
                    'label_id' => 'Nama Kategori',
                    'sortable' => true,
                ],
                'deskripsi_kategori' => [
                    'label' => 'Description',
                    'label_id' => 'Deskripsi',
                    'sortable' => false,
                    'truncate' => 100,
                ],
            ],
            'companies' => [
                'nama_perusahaan' => [
                    'label' => 'Company Name',
                    'label_id' => 'Nama Perusahaan',
                    'sortable' => true,
                ],
                'kategori.nama_kategori' => [
                    'label' => 'Category',
                    'label_id' => 'Kategori',
                    'sortable' => true,
                    'relation' => 'kategori',
                    'relation_column' => 'nama_kategori',
                ],
                'alamat' => [
                    'label' => 'Address',
                    'label_id' => 'Alamat',
                    'sortable' => false,
                    'truncate' => 80,
                ],
            ],
            'products' => [
                'nama_produk' => [
                    'label' => 'Product Name',
                    'label_id' => 'Nama Produk',
                    'sortable' => true,
                ],
                'anakPerusahaan.nama_perusahaan' => [
                    'label' => 'Company',
                    'label_id' => 'Perusahaan',
                    'sortable' => true,
                    'relation' => 'anakPerusahaan',
                    'relation_column' => 'nama_perusahaan',
                ],
                'harga' => [
                    'label' => 'Price',
                    'label_id' => 'Harga',
                    'sortable' => true,
                    'format' => 'currency',
                ],
            ],
            'media' => [
                'title' => [
                    'label' => 'Title',
                    'label_id' => 'Judul',
                    'sortable' => true,
                ],
                'file_path' => [
                    'label' => 'File',
                    'label_id' => 'Berkas',
                    'sortable' => false,
                    'thumbnail' => true,
                ],
                'mime_type' => [
                    'label' => 'Type',
                    'label_id' => 'Tipe',
                    'sortable' => true,
                ],
            ],
        ];

        return $columns[$table] ?? [];
    }

    /**
     * Get form fields for create/edit forms
     */
    public static function getFormFields(string $table): array
    {
        $fields = [
            'users' => [
                'nama' => [
                    'type' => 'text',
                    'label' => 'Name',
                    'label_id' => 'Nama',
                    'required' => true,
                    'validation' => 'required|string|max:255',
                ],
                'email' => [
                    'type' => 'email',
                    'label' => 'Email',
                    'label_id' => 'Email',
                    'required' => true,
                    'validation' => 'required|email|unique:users,email,[id_user]',
                ],
                'password' => [
                    'type' => 'password',
                    'label' => 'Password',
                    'label_id' => 'Password',
                    'required' => true,
                    'validation' => 'required|min:8|confirmed',
                    'only_create' => true,
                ],
                'password_confirmation' => [
                    'type' => 'password',
                    'label' => 'Confirm Password',
                    'label_id' => 'Konfirmasi Password',
                    'required' => true,
                    'only_create' => true,
                ],
                'role' => [
                    'type' => 'select',
                    'label' => 'Role',
                    'label_id' => 'Peran',
                    'required' => true,
                    'validation' => 'required|in:admin,user,owner',
                    'options' => [
                        'admin' => 'Admin',
                        'user' => 'User',
                        'owner' => 'Owner',
                    ],
                ],
            ],
            'categories' => [
                'nama_kategori' => [
                    'type' => 'text',
                    'label' => 'Category Name',
                    'label_id' => 'Nama Kategori', 
                    'required' => true,
                    'validation' => 'required|string|max:255|unique:kategori,nama_kategori,[id_kategori]',
                ],
                'deskripsi_kategori' => [
                    'type' => 'textarea',
                    'label' => 'Description',
                    'label_id' => 'Deskripsi',
                    'required' => true,
                    'validation' => 'required|string',
                ],
            ],
            'companies' => [
                'nama_perusahaan' => [
                    'type' => 'text',
                    'label' => 'Company Name',
                    'label_id' => 'Nama Perusahaan',
                    'required' => true,
                    'validation' => 'required|string|max:255',
                ],
                'id_kategori' => [
                    'type' => 'select',
                    'label' => 'Category',
                    'label_id' => 'Kategori',
                    'required' => true,
                    'validation' => 'required|exists:kategori,id_kategori',
                    'relation' => [
                        'model' => \App\Models\Kategori::class,
                        'key' => 'id_kategori',
                        'label' => 'nama_kategori',
                    ],
                ],
                'deskripsi' => [
                    'type' => 'textarea',
                    'label' => 'Description',
                    'label_id' => 'Deskripsi',
                    'required' => true,
                    'validation' => 'required|string',
                ],
                'alamat' => [
                    'type' => 'textarea',
                    'label' => 'Address',
                    'label_id' => 'Alamat',
                    'required' => true,
                    'validation' => 'required|string',
                ],
                'telepon' => [
                    'type' => 'text',
                    'label' => 'Phone Number',
                    'label_id' => 'Nomor Telepon',
                    'required' => true,
                    'validation' => 'required|string|max:20',
                ],
                'foto' => [
                    'type' => 'file',
                    'label' => 'Logo',
                    'label_id' => 'Logo',
                    'required' => false,
                    'validation' => 'nullable|image|max:2048',
                    'disk' => 'public',
                    'path' => 'companies',
                ],
                'berdiri_sejak' => [
                    'type' => 'date',
                    'label' => 'Established',
                    'label_id' => 'Berdiri Sejak',
                    'required' => false,
                    'validation' => 'nullable|date',
                ],
            ],
            'products' => [
                'nama_produk' => [
                    'type' => 'text',
                    'label' => 'Product Name',
                    'label_id' => 'Nama Produk',
                    'required' => true,
                    'validation' => 'required|string|max:255',
                ],
                'id_anak_perusahaan' => [
                    'type' => 'select',
                    'label' => 'Company',
                    'label_id' => 'Perusahaan',
                    'required' => true,
                    'validation' => 'required|exists:anak_perusahaan,id_anak_perusahaan',
                    'relation' => [
                        'model' => \App\Models\AnakPerusahaan::class,
                        'key' => 'id_anak_perusahaan',
                        'label' => 'nama_perusahaan',
                    ],
                ],
                'deskripsi_produk' => [
                    'type' => 'textarea',
                    'label' => 'Description',
                    'label_id' => 'Deskripsi',
                    'required' => true,
                    'validation' => 'required|string',
                ],
                'harga' => [
                    'type' => 'number',
                    'label' => 'Price',
                    'label_id' => 'Harga',
                    'required' => false,
                    'validation' => 'nullable|numeric',
                ],
                'stok' => [
                    'type' => 'number',
                    'label' => 'Stock',
                    'label_id' => 'Stok',
                    'required' => false,
                    'validation' => 'nullable|integer',
                ],
                'foto' => [
                    'type' => 'file',
                    'label' => 'Image',
                    'label_id' => 'Gambar',
                    'required' => false,
                    'validation' => 'nullable|image|max:2048',
                    'disk' => 'public',
                    'path' => 'products',
                ],
            ],
            'media' => [
                'title' => [
                    'type' => 'text',
                    'label' => 'Title',
                    'label_id' => 'Judul',
                    'required' => true,
                    'validation' => 'required|string|max:255',
                ],
                'description' => [
                    'type' => 'textarea',
                    'label' => 'Description',
                    'label_id' => 'Deskripsi',
                    'required' => true,
                    'validation' => 'required|string',
                ],
                'file_path' => [
                    'type' => 'file',
                    'label' => 'File',
                    'label_id' => 'Berkas',
                    'required' => true,
                    'validation' => 'required|file|max:10240',
                    'disk' => 'public',
                    'path' => 'media',
                ],
            ],
        ];

        return $fields[$table] ?? [];
    }
}
