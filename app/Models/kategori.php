<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // Define the table name if it doesn't follow Laravel's naming convention
    protected $table = 'kategori';

    // Define the primary key if it's not 'id'
    protected $primaryKey = 'id_kategori';

    // Disable timestamps if the table doesn't have 'created_at' and 'updated_at' columns
    public $timestamps = false;

    // Define the fillable attributes
    protected $fillable = [
        'nama_kategori',
        'deskripsi_kategori',
    ];

    // Relationships
    public function anakPerusahaan()
    {
        return $this->hasMany(AnakPerusahaan::class, 'id_kategori');
    }
}
