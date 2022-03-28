<?php
require'CLcadService.php';
class CLpermService extends CLcadService
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
        $Perms=array();

        foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row) {
            $Perms[]=$row['permissionID'];
        }
        return $Perms;
    }
}
require '../controllers/access.php';
$oPermService=new CLpermService($servername, $db, $username, $password);
$oPermService->getPermissions();