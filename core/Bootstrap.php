<?php

namespace Core;

use Buki\Router\Router;
use Carbon\Carbon;
use Illuminate\Database\Capsule\Manager as Capsule;
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

        if (config('DEVELOPMENT')) {
            $whoops->register();
        }

        Carbon::setLocale(config('LOCALE', 'tr_TR'));

        $capsule = new Capsule;

        $capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => config('DB_HOST', 'localhost'),
            'database'  => config('DB_NAME'),
            'username'  => config('DB_USER'),
            'password'  => config('DB_PASSWORD'),
            'charset'   => config('DB_CHARSET', 'utf8mb4'),
            'collation' => config('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix'    => config('DB_PREFIX'),
        ]);

        $capsule->setAsGlobal();
        $capsule->bootEloquent();

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