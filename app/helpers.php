<?php

// helpers

function config($key, $default = null)
{
    return \Arrilot\DotEnv\DotEnv::get($key, $default);
}