<?php

namespace App\database;

use PDO;

class database {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host=localhost;dbname=bitm_1', 'root', '', $pdo_options);
        }
        return self::$instance;
    }
}
?>