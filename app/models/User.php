<?php

namespace App\Models;

use Core\Model;

class User extends Model
{

    protected $fillable = [
        'name',
        'password'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}