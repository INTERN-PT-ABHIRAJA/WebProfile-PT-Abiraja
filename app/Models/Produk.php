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

    // Define the fillable attributes
    protected $fillable = [
        'id_anak_perusahaan',
        'nama_produk',
        'deskripsi_produk',
        'harga',
        'stok',
        'foto',
        'video',
    ];

    // Cast the price attribute
    protected $casts = [
        'harga' => 'decimal:2',
    ];

    /**
     * Get the anak perusahaan that owns the produk.
     */
    public function anakPerusahaan()
    {
        return $this->belongsTo(AnakPerusahaan::class, 'id_anak_perusahaan', 'id_anak_perusahaan');
    }
}
