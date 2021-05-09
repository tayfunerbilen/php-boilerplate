<?php

namespace App\Middlewares;

class CheckNotAuth
{

    public function handle()
    {
        if (auth()->isLoggedIn()){
            return redirect('referer');
            exit;
        }
        return true;
    }

}