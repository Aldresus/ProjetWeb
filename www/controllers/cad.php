<?php
class cad
{
    public PDO $conn;
    public function __construct()
    {
        require 'access.php';
        try {

            $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Connection failed : {$e->getMessage()}");
        }
    }
}