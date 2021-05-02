<?php

namespace Core;

use App\Models\User;
use Aura\Session\SessionFactory;

class Auth
{

    public \Aura\Session\Segment $segment;
    private static Auth $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Auth();
        }
        return self::$instance;
    }

    public function __construct()
    {
        $session_factory = new SessionFactory();
        $session = $session_factory->newInstance($_COOKIE);
        $this->segment = $session->getSegment('Boilerplate\Auth');
    }

    public function login($data)
    {
        $user = User::where('name', $data['name'])->where('password', md5($data['password']))->first();
        if ($user) {
            $this->create($user);
            return $user;
        }
        return false;
    }

    public function create($data)
    {
        $this->segment->set('login', true);
        $this->segment->set('name', $data->name);
        $this->segment->set('id', $data->id);
    }

    public function exist($name)
    {
        return User::where('name', $name)->first();
    }

    public function register($data)
    {
        $data['password'] = md5($data['password']);
        $user =  User::create($data);
        if ($user){
            $this->create($user);
            return $user;
        }
        return false;
    }

    public function logout()
    {
        $this->segment->clear();
    }

    public function isLoggedIn()
    {
        return $this->segment->get('login');
    }

    public function getId()
    {
        return $this->segment->get('id');
    }

    public function getName()
    {
        return $this->segment->get('name');
    }

    public function guard()
    {
        return $this;
    }

    public function check()
    {
        return $this->segment->get('login');
    }

    public function guest()
    {
        return !$this->segment->get('login');
    }

}