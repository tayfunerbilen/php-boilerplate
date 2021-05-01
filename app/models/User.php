<?php

namespace App\Models;

use Core\Model;

class User extends Model
{
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}