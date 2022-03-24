<?php
class permissions
{
// déclaration des attributs :
    private int $permissionID;
    private string $permission;

    // Geters :
    public function getPermissionID(): int
    {
        return $this->permissionID;
    }
    public function getPermission(): string
    {
        return $this->permission;
    }


    // Seters :
    public function setPermissionID($permissionID){
        $this->permissionID = $permissionID;
    }
    public function setPermission($permission){
        $this->permission = $permission;
    }

    //CRUD

    public function select(): string
    {//Ajouter la moyenne des notes
        return "SELECT * FROM Permissions";
    }

    public function insert(): string
    {
        return "INSERT INTO Permissions(permission) VALUES (?)";
    }

    public function update(): string
    {
        return "UPDATE Permissions SET (permission=?) WHERE (permissionID=?)";
    }

    public function delete(): string
    {
        return "DELETE FROM Permissions WHERE WHERE (permissionID=?)";
    }
}