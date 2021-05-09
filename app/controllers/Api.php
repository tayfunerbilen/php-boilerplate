<?php

namespace App\controllers;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class Api
{

    public function posts(Response $response)
    {

        sleep(1);

        $posts = db('posts')->get();

        $response->setStatusCode(200);
        $response->headers->set('Content-type', 'application/json');
        $response->setContent($posts);
        $response->send();

//        return redirect(site_url())
//            ->with('işlemler başarıyla tamamlandı!')
//            ->send();

    }

}