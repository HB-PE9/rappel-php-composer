<?php

namespace App\Db;

use PDO;
use PDOException;

class Connection
{
    private static ?PDO $pdo = null;

    private function __construct()
    {
    }

    public static function getPDOInstance(): PDO
    {
        if (self::$pdo === null) {
            try {
                // TODO: Externaliser la configuration
                $host = "127.0.0.1";
                $databaseName = "pe9_rappel_php";
                $user = "root";
                $password = "mysqltests";

                self::$pdo = new PDO("mysql:host=" . $host . ";port=3640;dbname=" . $databaseName . ";charset=utf8", $user, $password);
            } catch (PDOException $e) {
                //...
            }
        }

        return self::$pdo;
    }
}
