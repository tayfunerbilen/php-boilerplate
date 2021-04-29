<?php

namespace Core;

class Controller extends Bootstrap
{
    public function view($view, $data = [])
    {
        return $this->view->show($view, $data);
    }
}