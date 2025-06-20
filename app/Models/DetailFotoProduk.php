<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailFotoProduk extends Model
{
    use HasFactory;
    
    // Define the table name
    protected $table = 'detail_foto_produk';
    
    // Define the primary key
    protected $primaryKey = 'id_foto';
    
    // Define the fillable attributes
    protected $fillable = [
        'id_produk',
        'foto',
    ];
    
    /**
     * Get the foto URL with fallback mechanism
     */
    public function getFotoUrlAttribute()
    {
        return ImageHelper::getImageUrl($this->foto, '/assets/img/portfolio/default.jpg');
    }
    
    /**
     * Get the product that owns this photo.
     */
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id_produk');
    }
}
