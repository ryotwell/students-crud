<?php

namespace Helpers;

class Database
{
    private static $host;

    private static $username;

    private static $password;

    private static $database;

    private function conn()
    {
        $conn = new \mysqli(self::$host, self::$username, self::$password, self::$database);

        if ($conn->connect_errno > 0) {
            die('Unable to connect to database [' . $conn->connect_error . ']');

            return;
        }

        return $conn;
    }

    private function setConfig()
    {
        $db = require 'config\database.php';

        self::$host = $db['host'];
        self::$username = $db['username'];
        self::$password = $db['password'];
        self::$database = $db['database'];

        return true;
    }

    public static function query($query)
    {
        self::setConfig();

        return self::conn()->query($query);
    }
}
