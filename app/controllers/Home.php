<?php

namespace App\Controllers;

use App\Middlewares\CheckAuth;

class Home
{

    public $middlewareBefore = [
        CheckAuth::class
    ];

    public function main()
    {
        return 'index metodu';
    }

    public function uyelerSayfasi()
    {
        return 'deneme sayfası';
    }

}