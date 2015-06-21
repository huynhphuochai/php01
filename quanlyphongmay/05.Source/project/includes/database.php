<?php

if (count(get_included_files()) == 1)
    define('__MAIN__', __FILE__);

class Database {

    private $username = 'root';
    private $password = 'usbw';
    private $options = array(
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    private $dns = "mysql:host=localhost;dbname=dbname";
    private static $db;

    private function __construct() {
        
    }

    public static function getDB() {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dns, $this->username, $this->password, $this->$options);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../errors/database_error.php');
                exit();
            }
        }
        return self::$db;
    }

    public static function disconnect() {
        self::$db = null;
    }

}

?>
