<?php

// helpers

function timeAgo($date)
{
    return \Carbon\Carbon::parse($date)->diffForHumans();
}