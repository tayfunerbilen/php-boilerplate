<?php

/**
 * @param $key
 * @param null $default
 * @return mixed
 */
function config($key, $default = null)
{
    return \Arrilot\DotEnv\DotEnv::get($key, $default);
}

/**
 * @return \Core\Auth
 */
function auth()
{
    return \Core\Auth::getInstance();
}

/**
 * @param $name
 * @return \Core\Upload
 */
function upload($name)
{
    return \Core\Upload::getInstance($name);
}

/**
 * @param $table
 * @return \Illuminate\Database\Query\Builder
 */
function db($table): \Illuminate\Database\Query\Builder
{
    return \Illuminate\Database\Capsule\Manager::table($table);
}

/**
 * @param null $url
 * @return \Core\Redirect
 */
function redirect($url = null): \Core\Redirect
{
    return \Core\Redirect::getInstance($url);
}

/**
 * @param $name
 * @return false|mixed
 */
function cookie($name)
{
    if (isset($_COOKIE[$name])){
        return rawurldecode($_COOKIE[$name]);
    }
    return false;
}

/**
 * @param string $url
 * @return string
 */
function site_url($url = '')
{
    return config('BASE_URL') . '/' . $url;
}

/**
 * @param string $url
 * @return string
 */
function asset_url($url = '')
{
    return site_url('public/assets/' . $url);
}