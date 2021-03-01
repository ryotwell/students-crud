<?php

$modules____ = require 'config/autoload.php';

foreach ($modules____ as $module____) {
    require $module____;
}

unset($modules____, $module____);
