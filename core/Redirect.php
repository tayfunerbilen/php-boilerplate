<?php

namespace Core;

use Symfony\Component\HttpFoundation\RedirectResponse;

class Redirect
{

    private static Redirect $instance;
    public string $url;
    public int $statusCode = 302;

    public static function getInstance($url = null)
    {
        if (!isset(self::$instance)) {
            self::$instance = new self($url);
        }
        return self::$instance;
    }

    public function __construct($url = null)
    {
        $this->url = $url ?? site_url();
    }

    public function statusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function with($msg)
    {
        setcookie('msg', rawurlencode($msg), time() + 1, '/');
        return $this;
    }

    public function send(): void
    {
        if ($this->url === 'referer'){
            $this->url = $_SERVER['HTTP_REFERER'] ?? site_url();
        }
        $redirect = new RedirectResponse($this->url, $this->statusCode);
        $redirect->send();
    }

}