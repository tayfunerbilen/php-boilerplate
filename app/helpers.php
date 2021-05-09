<?php

// helpers

function config($key, $default = null)
{
    return \Arrilot\DotEnv\DotEnv::get($key, $default);
}

function timeAgo($date)
{
    return \Carbon\Carbon::parse($date)->diffForHumans();
}

function auth()
{
    return \Core\Auth::getInstance();
}

function upload($name)
{
    return \Core\Upload::getInstance($name);
}