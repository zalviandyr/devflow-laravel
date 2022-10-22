<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $table = 'topic';

    protected $fillable = [
        'name',
        'slug',
        'category_id',
    ];

    protected $with = [
        'category',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
