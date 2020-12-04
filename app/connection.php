<?php
namespace App;
use \PDO;
use \PDOException;
class DB
{
    private static $instance = NULl;
    public static function getInstance()
    {
        $host = 'localhost';
        $dbname = 'thweb';
        $username = 'root';
        $password = '';
        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                self::$instance->exec("SET NAMES 'utf8'");
            } catch (PDOException $ex) {
                die($ex->getMessage());
            }
        }
        return self::$instance;
    }
}
