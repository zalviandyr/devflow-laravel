<?php

namespace App\Models;

use App\Http\Traits\MediaTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, InteractsWithMedia, MediaTrait;

    public static $photoCollection = 'photo';

    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
    ];

    protected $appends = [
        'photo',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'media',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getPhotoAttribute()
    {
        foreach ($this->media as $item) {
            if ($item->collection_name === self::$photoCollection) {
                return $item->getFullUrl();
            }
        }

        return null;
    }
}
