<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Relasi ke Datbase WorkSpace
    public function workspaces(): HasMany {
        return $this->hasMany(workspace::class);    
    }

    // Relasi ke Database Card
    public function cards(): HasMany {
        return $this->hasMany(Card::class);
    }

    //Relasi ke Member
    public function members():HasMany {
        return $this->hasMany(Member::class);
    }

    // Relasi dengan Attachment
    public function attachements():HasMany 
    {
        return $this->hasMany(Attachment::class);
    }

    public function tasks():HasMany {
        return $this->hasMany(Task::class);
    }


}
