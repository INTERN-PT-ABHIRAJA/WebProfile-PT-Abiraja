<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;

    // Define the table name
    protected $table = 'benefits';

    // Define the primary key
    protected $primaryKey = 'id_benefit';

    // Define the fillable attributes
    protected $fillable = [
        'id_produk',
        'nama_benefit',
    ];

    /**
     * Get the product that owns this benefit.
     */
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id_produk');
    }
}
