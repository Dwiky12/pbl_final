<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Contracts\HasAvatar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable implements HasAvatar
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'avatar_url',
        'custom_fields',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'custom_fields' => 'array'
        ];
    }

    public function getFilamentAvatarUrl(): ?string
{
    $avatarColumn = config('filament-edit-profile.avatar_column', 'avatar_url');
    return $this->{$avatarColumn} ? Storage::url($this->{$avatarColumn}) : null;
}

// Di dalam model User
public function getNoHpAttribute(): ?string
{
    return $this->custom_fields['no_hp'] ?? null;
}

public function getJenisKelaminAttribute(): ?string
{
    return $this->custom_fields['jenis_kelamin'] ?? null;
}

public function getAlamatAttribute(): ?string
{
    return $this->custom_fields['alamat'] ?? null;
}


}