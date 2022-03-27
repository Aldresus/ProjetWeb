<?php

class CLpermService
{
    private users $oUsers;
    private PDO $oPdo;

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

    public function ajoutPermission(string $perm): bool
    {
        try {
            $sql=$this->oPdo->prepare("INSERT INTO Permissions(permission) VALUES (?) ");
            $sql->execute(array($perm));
            return true;
        }
        catch (Exception $e){
            echo $e;
            return false;
        }

    }
}
