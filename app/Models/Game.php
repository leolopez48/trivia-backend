<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_lifes',
        'lifes_used',
        'total_answers',
        'status',
    ];
}
