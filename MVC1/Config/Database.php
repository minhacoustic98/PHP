<?php
    namespace Main\Config;
    use PDO;

    class Database
    {
        private static $conn=null;
        private function __construct()
        {

        }
        public static function getBdd()
        {
            if(is_null(self::$conn))
            {
                self::$conn=new PDO("mysql:host=localhost;dbname=bai1;charset=utf8","root","");
            }
            return self::$conn;
        }
    }