<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    // Define the table name
    protected $table = 'media';

    // Define the primary key
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
        'file_path',
        'mime_type',
        'file_size',
    ];
    
    // Define the route key name for route model binding
    public function getRouteKeyName()
    {
        return 'id';
    }
}
