<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'card_id',
        'parent_id',
        'title',
        'is_completed'
    ];

    // menentukan jika model task ini diambil dari database, relasi dibawahini akan selalu di izinloadkan untuk mengurangi data query ke database
    protected $with = ['card', 'children', 'user'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }


    public function card(): BelongsTo {
        return $this->belongsTo(Card::class);
    }

    //Relasi dengan diri Sendiri task dengan task
    public function parent(): BelongsTo {
        return $this->belongsTo(Task::class,'parent_id');
    }


    // Relasi untuk Children
    public function children(): HasMany{
        return $this->hasMany(Task::class, 'parent_id');
    }



}
