<?php

class CLcadService
{
    protected PDO $oPdo;

    public function __construct($servername, $db, $username, $password)
    {
        try {
            $this->oPdo = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
            $this->oPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "<script>console.log('Connected successfully')</script>";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}