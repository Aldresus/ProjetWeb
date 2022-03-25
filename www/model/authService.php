<?php
require 'users.php';
require '../controllers/cad.php';
class authService
{
    private users $oUsers;

    public function ajoutPermission(string $perm): bool
    {
        try {
            $sql=$conn->prepare("INSERT INTO Permissions(permission) VALUES (?) ");
            $conn->excute($sql,array($perm));
            return true;
        }
        catch (Exception $e){
            echo $e;
            return false;
        }

    }
    public function auth(string $login, string $password): bool
    {
        return "SELECT ";
    }

}

$auth = new authService;
$auth->ajoutPermission('test');

echo $_POST["password"].$_POST["login"];