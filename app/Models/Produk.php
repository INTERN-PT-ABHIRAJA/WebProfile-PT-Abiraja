<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Define the table name
    protected $table = 'produk';

    // Define the primary key
    protected $primaryKey = 'id_produk';
    
    // Define the route key name for route model binding
    public function getRouteKeyName()
    {
        return 'id_produk';
    }

    // Define the fillable attributes
    protected $fillable = [
        'id_anak_perusahaan',
        'nama_produk',
        'deskripsi_produk',
        'foto',
        'rating',
    ];

    // Cast attributes
    protected $casts = [
        'rating' => 'decimal:2',
    ];

    /**
     * Get the anak perusahaan that owns the produk.
     */
    public function anakPerusahaan()
    {
        return $this->belongsTo(AnakPerusahaan::class, 'id_anak_perusahaan', 'id_anak_perusahaan');
    }

    /**
     * Get the detail foto produk for the produk.
     */
    public function detailFoto()
    {
        return $this->hasMany(DetailFotoProduk::class, 'id_produk', 'id_produk');
    }

    /**
     * Get the first photo from detail_foto_produk or fallback to main foto
     */
    public function getFotoUtamaAttribute()
    {
        $firstDetailFoto = $this->detailFoto()->first();
        return $firstDetailFoto ? $firstDetailFoto->foto : $this->foto;
    }

    /**
     * Get all photos including main foto and detail photos
     */
    public function getAllFotosAttribute()
    {
        $photos = collect();
        
        // Add main foto if exists
        if ($this->foto) {
            $photos->push($this->foto);
        }
        
        // Add detail photos
        $this->detailFoto->each(function($detail) use ($photos) {
            $photos->push($detail->foto);
        });
        
        return $photos->unique();
    }

    /**
     * Get the benefits for the product.
     */
    public function benefits()
    {
        return $this->hasMany(Benefit::class, 'id_produk', 'id_produk');
    }

    /**
     * Get the detail photos for the product.
     */
    public function detailFotos()
    {
        return $this->hasMany(DetailFotoProduk::class, 'id_produk', 'id_produk');
    }
}
