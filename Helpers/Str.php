<?php

namespace Helpers;

class Str
{
    static function lowercase(string $string)
    {
        return strtolower($string);
    }

    static function uppercase(string $string)
    {
        return strtoupper($string);
    }
}
