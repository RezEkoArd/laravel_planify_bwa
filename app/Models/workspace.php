<?php

namespace App\Models;

use App\Enums\WorkspaceVisibility;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Workspace extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'cover',
        'logo',
        'visibility'

    ];

    protected function casts(): array {
        return [
            'visibility' => WorkspaceVisibility::class,
        ];
    }

    //Relasi dengan Modle User
    public function user():BelongsTo 
    {
        return $this->belongsTo(User::class);
    }


    // Relasi dengan Card
    public function cards():HasMany 
    {
        return $this->hasMany(Card::class);
    }

    //Relasi Workspace dengan Member
    public function members(): MorphMany {
        return $this->morphMany(Member::class, 'memberable');
    }
}
