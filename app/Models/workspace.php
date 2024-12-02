<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class workspace extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'cover',
        'logo',
        'visibility'

    ];
}
