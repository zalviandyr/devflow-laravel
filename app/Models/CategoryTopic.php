<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTopic extends Model
{
    use HasFactory;

    protected $table = 'category_topic';

    protected $fillable = [
        'topic_id',
        'category_id'
    ];

    public function categoryTopic()
    {
        return $this->hasMany(Topic::class);
    }
}
