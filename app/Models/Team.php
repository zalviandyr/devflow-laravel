<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'team';

    protected $fillable = [
        'name',
    ];

    protected $with = [
        'teamUser',
    ];

    public function teamUser()
    {
        return $this->hasMany(TeamUser::class);
    }
}
