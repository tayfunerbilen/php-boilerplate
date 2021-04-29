<?php

$app->router->controller('/', 'Home');

$app->router->get('/about', function(){
    return 'about page';
});

$app->router->get('/user/:slug?', function($username = null){
    return 'user sayfası = ' . $username;
});

$app->router->group('/admin', function($router){

    $router->get('/', function(){
        return 'admin anasayfa';
    });

    $router->get('/users', function(){
        return 'admin users';
    });

});

$app->router->error(function(){
    die('<h3>Sayfa bulunamadı!</h3>');
});