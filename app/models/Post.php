<?php

namespace App\Models;

use Core\Model;

class Post extends Model
{

//    public $timestamps = false;
    protected $fillable = [
        'content',
        'image',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}