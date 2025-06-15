<?php

namespace App\Http\Controllers;

use App\Models\AnakPerusahaan;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\DetailFotoProduk;
use App\Models\Benefit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display the home page view with anak perusahaan data.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Get all anak perusahaan with their categories
        $anakPerusahaan = AnakPerusahaan::with('kategori')->get();
        
        // Get all categories for the filter buttons
        $categories = Kategori::all();
        
        // Get all products with their related data
        $produk = Produk::with(['anakPerusahaan', 'benefits', 'detailFotos'])->get();
        
        return view('welcome', compact('anakPerusahaan', 'categories', 'produk'));
    }
}
