<?php

namespace Core;

use Buki\Router\Router;
use Valitron\Validator;
use Arrilot\DotEnv\DotEnv;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class Bootstrap
{

    public $router;
    public $view;
    public $validator;

    public function __construct()
    {

        DotEnv::load(dirname(__DIR__) . '/.env.php');

        $whoops = new Run();
        $whoops->pushHandler(new PrettyPageHandler());

        if (genv('DEVELOPMENT')) {
            $whoops->register();
        }

        $this->router = new Router([
            'paths' => [
                'controllers' => 'app/controllers',
                'middlewares' => 'app/middlewares'
            ],
            'namespaces' => [
                'controllers' => 'App\Controllers',
                'middlewares' => 'App\Middlewares'
            ]
        ]);
        $this->validator = new Validator($_POST);
        Validator::langDir(dirname(__DIR__) . '/public/validator_lang');
        Validator::lang('tr');
        $this->view = new View($this->validator);
    }

    public function run()
    {
        $this->router->run();
    }

}