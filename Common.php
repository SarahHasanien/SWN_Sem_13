<?php
class Database 
    {
        public static $connection;
        public $conn;
        private function __construct()
        {
            $this->conn=new mysqli('localhost','root','','sw');
        }
            public static function Connect()
        {
            if(!isset(self::$connection))
            {
                self::$connection=new Database;
                return self::$connection;
            }
            else 
            return self::$connection;
        }
    }
session_start();
?>