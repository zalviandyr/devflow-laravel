<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;

    protected $table = 'reaction';

    protected $fillable = [
        'user_id',
        'post_id',
        'point',
        'type'
    ];
}
