<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public static $imageCollection = 'post_image';

    protected $table = 'post';

    protected $fillable = [
        'title',
        'body',
        'topic_id',
        'is_open',
        'user_id',
        'slug',
    ];

    protected $appends = [
        'images',
    ];

    protected $hidden = [
        'media',
    ];

    protected $with = [
        'user',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function getImagesAttribute()
    {
        $images = [];

        foreach ($this->media as $item) {
            if ($item->collection_name === self::$imageCollection) {
                $images[] = $item->getFullUrl();
            }
        }

        return $images;
    }
}
