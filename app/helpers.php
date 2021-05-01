<?php

// helpers

function genv($key, $default = null)
{
    return \Arrilot\DotEnv\DotEnv::get($key, $default);
}