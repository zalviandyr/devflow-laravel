<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post';

    protected $fillable = [
        'title',
        'body',
        'topic_id',
        'is_open',
        'user_id',
        'slug',
    ];

    protected $with = [
        'user',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
