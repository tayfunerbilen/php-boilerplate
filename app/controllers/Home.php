<?php

namespace App\Controllers;

use App\Middlewares\CheckAuth;
use Core\Controller;

class Home extends Controller
{

    public $middlewareBefore = [
        CheckAuth::class
    ];

    public function main()
    {
        $name = 'Tayfun';
        $surname = '<b>Erbilen</b>';
        return $this->view('home', compact('name', 'surname'));
    }

    public function uyelerSayfasi()
    {
        return 'deneme sayfası';
    }

}