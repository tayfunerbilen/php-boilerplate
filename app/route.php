<?php

//$app->router->controller('/', 'Home');

$app->router->any('/', 'Home@main');

$app->router->any('/login', 'Auth@login', [
    'before' => 'CheckNotAuth'
]);
$app->router->any('/register', 'Auth@register', [
    'before' => 'CheckNotAuth'
]);
$app->router->get('/logout', 'Auth@logout');

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

$app->router->get('/api/posts', 'Api@posts');

$app->router->error(function(){
    die('<h3>Sayfa bulunamadı!</h3>');
});