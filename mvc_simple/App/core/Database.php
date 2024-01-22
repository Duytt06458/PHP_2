<?php
    namespace App\core;
    use mysqli;
    class Database
    {
        public function __construct()
        {
            $servername = 'localhost';
            $username = 'root';
            $password = '00000';
            $database = 'freshop';

            $conn = new mysqli($servername, $username, $password, $database);

            if(!$conn){
                die("Connection failed: ".$conn->connect_error());
            }else{
                echo "Connection Successfully";
            }
        }

        public function HelloWorld()
        {
            echo "Hello World";
        }
    }
?>