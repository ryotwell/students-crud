<?php

use System\App;

function dd($data)
{
    var_dump($data);
    die;

    return;
}

function redirect(string $to)
{
    return header('location: ' . $to);
}

function e(string $string)
{
    return htmlspecialchars($string);
}

function config($file)
{
    return require "config/{$file}.php";
}

function url($link)
{
    return config('app')['url'] . $link;
}
