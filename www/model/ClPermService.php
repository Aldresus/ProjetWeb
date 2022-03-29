<?php
require 'ClCadService.php';
class ClPermService extends ClCadService
{

    public function addPermission(string $permission): bool
    {
        try {
            $sql=$this->oPdo->prepare("INSERT INTO Permissions(permission) VALUES (?) ");
            $sql->execute(array($permission));
            return true;
        }
        catch (Exception $e){
            echo $e;
            return false;
        }

    }
    public function getPermissions():array
    {
        $query=$this->oPdo->prepare("Select permissionID FROM Permissions;");
        $query->execute();
        $perms=array();

        foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row) {
            $perms[]=$row['permissionID'];
        }
        return $perms;
    }
}
require '../controllers/access.php';
$oPermService=new ClPermService($servername, $db, $username, $password);
$oPermService->getPermissions();