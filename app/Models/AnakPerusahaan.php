<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnakPerusahaan extends Model
{
    use HasFactory;

    // Define the table name
    protected $table = 'anak_perusahaan';

    // Define the primary key
    protected $primaryKey = 'id_anak_perusahaan';
    
    // Define the route key name for route model binding
    public function getRouteKeyName()
    {
        return 'id_anak_perusahaan';
    }

    // Define the fillable attributes
    protected $fillable = [
        'id_user',
        'id_kategori',
        'nama_perusahaan',
        'deskripsi',
        'alamat',
        'telepon',
        'foto',
        'berdiri_sejak',
    ];

    // Cast the date attribute
    protected $casts = [
        'berdiri_sejak' => 'date',
    ];

    /**
     * Get the user that owns the anak perusahaan.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    /**
     * Get the kategori that the anak perusahaan belongs to.
     */
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

    /**
     * Get the produk for the anak perusahaan.
     */
    public function produk()
    {
        return $this->hasMany(Produk::class, 'id_anak_perusahaan', 'id_anak_perusahaan');
    }
}
