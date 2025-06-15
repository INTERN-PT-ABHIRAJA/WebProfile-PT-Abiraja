<?php

namespace App\Http\Controllers;

use App\Config\DashboardConfig;
use App\Models\AnakPerusahaan;
use App\Models\Kategori;
use App\Models\Media;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DashboardController extends BaseDashboardController
{    public function __construct()
    {
        parent::__construct();
    }
    
    public function index(Request $request)
    {
        // Data statistik untuk dashboard
        $stats = [
            'users' => User::count(),
            'categories' => Kategori::count(),
            'companies' => AnakPerusahaan::count(),
            'products' => Produk::count(),
            'media' => Media::count(),
        ];

        // Data untuk grafik kategori
        $categories = Kategori::withCount('anakPerusahaan')->get();
        $categoryStats = [
            'labels' => $categories->pluck('nama_kategori'),
            'data' => $categories->pluck('anak_perusahaan_count')
        ];
        
        // Recent activities (sample data - you can replace with actual activity log)
        $recentActivities = [];
        
        // Get recent companies
        $recentCompanies = AnakPerusahaan::latest()->take(3)->get();
        foreach ($recentCompanies as $company) {
            $recentActivities[] = [
                'message' => "Anak perusahaan '{$company->nama_perusahaan}' ditambahkan",
                'time' => $company->created_at ? $company->created_at->diffForHumans() : 'Baru saja',
                'type' => 'company'
            ];
        }
        
        // Get recent products
        $recentProducts = Produk::latest()->take(2)->get();
        foreach ($recentProducts as $product) {
            $recentActivities[] = [
                'message' => "Produk '{$product->nama_produk}' ditambahkan",
                'time' => $product->created_at ? $product->created_at->diffForHumans() : 'Baru saja',
                'type' => 'product'
            ];
        }
        
        // Sort by time and limit to 5 most recent
        $recentActivities = collect($recentActivities)->sortByDesc('time')->take(5)->values()->all();
        
        // Get dashboard config for all tables
        $dashboardTables = DashboardConfig::getTables();
        
        return view('dashboard.index', compact('stats', 'categoryStats', 'dashboardTables', 'recentActivities'));
    }

    // Management Users
    public function users()
    {
        $users = User::paginate(10);
        return view('dashboard.users.index', compact('users'));
    }

    public function createUser()
    {
        return view('dashboard.users.create');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'role' => 'required|in:admin,user,owner',
        ]);

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('dashboard.users')->with('success', 'User berhasil ditambahkan');
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.users.edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|in:admin,user,owner',
        ]);

        $userData = [
            'nama' => $request->nama,
            'email' => $request->email,
            'role' => $request->role,
        ];

        if ($request->filled('password')) {
            $request->validate([
                'password' => 'min:8|confirmed',
            ]);
            $userData['password'] = Hash::make($request->password);
        }

        $user->update($userData);

        return redirect()->route('dashboard.users')->with('success', 'User berhasil diperbarui');
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('dashboard.users')->with('success', 'User berhasil dihapus');
    }

    // Management Kategori
    public function categories()
    {
        $categories = Kategori::withCount('anakPerusahaan')->paginate(10);
        return view('dashboard.categories.index', compact('categories'));
    }

    public function createCategory()
    {
        return view('dashboard.categories.create');
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255|unique:kategori,nama_kategori',
            'deskripsi' => 'required|string',
        ]);

        Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('dashboard.categories')->with('success', 'Kategori berhasil ditambahkan');
    }

    public function editCategory($id)
    {
        $category = Kategori::findOrFail($id);
        return view('dashboard.categories.edit', compact('category'));
    }

    public function updateCategory(Request $request, $id)
    {
        $category = Kategori::findOrFail($id);
        
        $request->validate([
            'nama_kategori' => 'required|string|max:255|unique:kategori,nama_kategori,' . $id,
            'deskripsi' => 'required|string',
        ]);

        $category->update([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('dashboard.categories')->with('success', 'Kategori berhasil diperbarui');
    }

    public function deleteCategory($id)
    {
        $category = Kategori::findOrFail($id);
        
        // Check if category has companies
        if ($category->anakPerusahaan()->count() > 0) {
            return redirect()->route('dashboard.categories')->with('error', 'Kategori tidak dapat dihapus karena digunakan oleh anak perusahaan');
        }
        
        $category->delete();

        return redirect()->route('dashboard.categories')->with('success', 'Kategori berhasil dihapus');
    }

    // Management Anak Perusahaan
    public function companies()
    {
        $companies = AnakPerusahaan::with('kategori')->paginate(10);
        return view('dashboard.companies.index', compact('companies'));
    }

    public function createCompany()
    {
        $categories = Kategori::all();
        return view('dashboard.companies.create', compact('categories'));
    }

    public function storeCompany(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori_id' => 'required|exists:kategori,id',
            'logo' => 'nullable|image|max:2048',
            'website' => 'nullable|url',
            'alamat' => 'required|string',
            'nomor_telepon' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        $companyData = [
            'nama_perusahaan' => $request->nama_perusahaan,
            'deskripsi' => $request->deskripsi,
            'kategori_id' => $request->kategori_id,
            'website' => $request->website,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
        ];

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('companies', 'public');
            $companyData['logo'] = $path;
        }

        AnakPerusahaan::create($companyData);

        return redirect()->route('dashboard.companies')->with('success', 'Anak perusahaan berhasil ditambahkan');
    }

    public function editCompany($id)
    {
        $company = AnakPerusahaan::findOrFail($id);
        $categories = Kategori::all();
        return view('dashboard.companies.edit', compact('company', 'categories'));
    }

    public function updateCompany(Request $request, $id)
    {
        $company = AnakPerusahaan::findOrFail($id);
        
        $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori_id' => 'required|exists:kategori,id',
            'logo' => 'nullable|image|max:2048',
            'website' => 'nullable|url',
            'alamat' => 'required|string',
            'nomor_telepon' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        $companyData = [
            'nama_perusahaan' => $request->nama_perusahaan,
            'deskripsi' => $request->deskripsi,
            'kategori_id' => $request->kategori_id,
            'website' => $request->website,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
        ];

        if ($request->hasFile('logo')) {
            // Delete old logo if exists
            if ($company->logo) {
                Storage::disk('public')->delete($company->logo);
            }
            $path = $request->file('logo')->store('companies', 'public');
            $companyData['logo'] = $path;
        }

        $company->update($companyData);

        return redirect()->route('dashboard.companies')->with('success', 'Anak perusahaan berhasil diperbarui');
    }

    public function deleteCompany($id)
    {
        $company = AnakPerusahaan::findOrFail($id);
        
        // Check if company has products
        if ($company->produk()->count() > 0) {
            return redirect()->route('dashboard.companies')->with('error', 'Perusahaan tidak dapat dihapus karena memiliki produk');
        }
        
        // Delete logo if exists
        if ($company->logo) {
            Storage::disk('public')->delete($company->logo);
        }
        
        $company->delete();

        return redirect()->route('dashboard.companies')->with('success', 'Anak perusahaan berhasil dihapus');
    }

    // Management Produk
    public function products()
    {
        $products = Produk::with('anakPerusahaan')->paginate(10);
        return view('dashboard.products.index', compact('products'));
    }

    public function createProduct()
    {
        $companies = AnakPerusahaan::all();
        return view('dashboard.products.create', compact('companies'));
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'anak_perusahaan_id' => 'required|exists:anak_perusahaan,id',
            'gambar' => 'nullable|image|max:2048',
            'harga' => 'nullable|numeric',
            'stok' => 'nullable|integer',
        ]);

        $productData = [
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'anak_perusahaan_id' => $request->anak_perusahaan_id,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ];

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('products', 'public');
            $productData['gambar'] = $path;
        }

        Produk::create($productData);

        return redirect()->route('dashboard.products')->with('success', 'Produk berhasil ditambahkan');
    }

    public function editProduct($id)
    {
        $product = Produk::findOrFail($id);
        $companies = AnakPerusahaan::all();
        return view('dashboard.products.edit', compact('product', 'companies'));
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Produk::findOrFail($id);
        
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'anak_perusahaan_id' => 'required|exists:anak_perusahaan,id',
            'gambar' => 'nullable|image|max:2048',
            'harga' => 'nullable|numeric',
            'stok' => 'nullable|integer',
        ]);

        $productData = [
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'anak_perusahaan_id' => $request->anak_perusahaan_id,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ];

        if ($request->hasFile('gambar')) {
            // Delete old image if exists
            if ($product->gambar) {
                Storage::disk('public')->delete($product->gambar);
            }
            $path = $request->file('gambar')->store('products', 'public');
            $productData['gambar'] = $path;
        }

        $product->update($productData);

        return redirect()->route('dashboard.products')->with('success', 'Produk berhasil diperbarui');
    }

    public function deleteProduct($id)
    {
        $product = Produk::findOrFail($id);
        
        // Delete image if exists
        if ($product->gambar) {
            Storage::disk('public')->delete($product->gambar);
        }
        
        $product->delete();

        return redirect()->route('dashboard.products')->with('success', 'Produk berhasil dihapus');
    }

    // Management Media
    public function media()
    {
        $media = Media::paginate(10);
        return view('dashboard.media.index', compact('media'));
    }

    public function createMedia()
    {
        return view('dashboard.media.create');
    }

    public function storeMedia(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'file' => 'required|file|max:10240',
            'tipe' => 'required|in:gambar,video,dokumen',
        ]);

        $mediaData = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tipe' => $request->tipe,
        ];

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('media', 'public');
            $mediaData['file_path'] = $path;
            $mediaData['mime_type'] = $file->getMimeType();
            $mediaData['ukuran'] = $file->getSize();
        }

        Media::create($mediaData);

        return redirect()->route('dashboard.media')->with('success', 'Media berhasil ditambahkan');
    }

    public function editMedia($id)
    {
        $media = Media::findOrFail($id);
        return view('dashboard.media.edit', compact('media'));
    }

    public function updateMedia(Request $request, $id)
    {
        $media = Media::findOrFail($id);
        
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'file' => 'nullable|file|max:10240',
            'tipe' => 'required|in:gambar,video,dokumen',
        ]);

        $mediaData = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tipe' => $request->tipe,
        ];

        if ($request->hasFile('file')) {
            // Delete old file if exists
            if ($media->file_path) {
                Storage::disk('public')->delete($media->file_path);
            }
            
            $file = $request->file('file');
            $path = $file->store('media', 'public');
            $mediaData['file_path'] = $path;
            $mediaData['mime_type'] = $file->getMimeType();
            $mediaData['ukuran'] = $file->getSize();
        }

        $media->update($mediaData);

        return redirect()->route('dashboard.media')->with('success', 'Media berhasil diperbarui');
    }

    public function deleteMedia($id)
    {
        $media = Media::findOrFail($id);
        
        // Delete file if exists
        if ($media->file_path) {
            Storage::disk('public')->delete($media->file_path);
        }
        
        $media->delete();

        return redirect()->route('dashboard.media')->with('success', 'Media berhasil dihapus');
    }
}
