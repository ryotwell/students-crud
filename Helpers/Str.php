<?php

namespace Helpers;

class Str
{
    public static function lowercase(string $string)
    {
        return strtolower($string);
    }

    public static function uppercase(string $string)
    {
        return strtoupper($string);
    }
}
