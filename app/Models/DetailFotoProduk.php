<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailFotoProduk extends Model
{
    use HasFactory;

    // Define the table name
    protected $table = 'detail_foto_produk';

    // Define the primary key
    protected $primaryKey = 'id_foto';
    
    // Define the route key name for route model binding
    public function getRouteKeyName()
    {
        return 'id_foto';
    }

    // Define the fillable attributes
    protected $fillable = [
        'id_produk',
        'foto',
    ];

    /**
     * Get the produk that owns the detail foto.
     */
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id_produk');
    }
}