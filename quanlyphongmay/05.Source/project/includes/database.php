<?php

class Database {

    private static $dns = "mysql:host=localhost;dbname=dbname";
    private static $username = 'root';
    private static $password = 'usbw';
    private static $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    private static $db;

    private function __construct() {
        
    }

    public static function getDB() {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dns, self::$username, self::$password, self::$option);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../errors/database_error.php');
                exit();
            }
        }
        return self::$db;
    }

}

?>
