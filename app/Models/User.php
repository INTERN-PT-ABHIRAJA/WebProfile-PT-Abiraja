<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements FilamentUser, HasName
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'email',
        'password',
        'role',
        'alamat',
        'telepon',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get the anak perusahaan owned by the user.
     */
    public function anakPerusahaan()
    {
        return $this->hasMany(AnakPerusahaan::class, 'id_user', 'id_user');
    }

    /**
     * Determine if the user can access the Filament panel.
     *
     * @param \Filament\Panel $panel
     * @return bool
     */
    public function canAccessPanel(Panel $panel): bool
    {
        return $this->role === 'admin' || $this->role === 'owner';
    }

    /**
     * Get the name of the user for Filament.
     * This method is required by the HasName interface.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->nama ?? 'User';
    }

    /**
     * Get the name of the user for FilamentManager.
     *
     * @return string
     */
    public function getUserName(): string
    {
        return $this->nama ?? 'User';
    }

    /**
     * Get the name that should be displayed in Filament panels.
     * This method is required by the HasName interface.
     *
     * @return string
     */
    public function getFilamentName(): string
    {
        return $this->nama ?? 'User';
    }
}
