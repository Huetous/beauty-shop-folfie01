<?php
    class Database {
        static $singletone;

        function __construct()
        {
            $db_host = "localhost";
            $db_name = "web";
            $username = "mysql";
            $password = "1234";


            self::$singletone = new PDO("mysql:host=$db_host;dbname=$db_name;", $username, $password);
        }

        public static function get_instance(){
            if(self::$singletone == null) new self();
            return self::$singletone;
        }
    }
