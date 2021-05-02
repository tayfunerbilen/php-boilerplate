<?php

namespace App\Middlewares;

class CheckNotAuth
{

    public function handle()
    {
        if (auth()->isLoggedIn()){
            header('Location:' . ($_SERVER['HTTP_REFERER'] ?? 'http://localhost/boilerplate'));
            exit;
        }
        return true;
    }

}