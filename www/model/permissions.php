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
    {
        return "";
    }

    public function insert(): string
    {
        return "";
    }

    public function update(): string
    {
        return "";
    }

    public function delete(): string
    {
        return "";
    }
}