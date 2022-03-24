<?php

class role
{
    // déclaration des attributs :
    private int $roleID;
    private string $roleName;

    public function getRoleID(): int
    {
        return $this->roleID;
    }

    public function getRoleName(): string
    {
        return $this->roleName;
    }

    public function setRoleID(int $roleID): void
    {
        $this->roleID = $roleID;
    }

    public function setRoleName(string $roleName): void
    {
        $this->roleName = $roleName;
    }

    //CRUD

    public function select(): string
    {//Ajouter la moyenne des notes
        return "SELECT * FROM Role";
    }

    public function insert(): string
    {
        return "INSERT INTO Role(roleName) VALUES (?)";
    }

    public function update(): string
    {
        return "UPDATE Role SET (roleName=?) WHERE (roleID=?)";
    }

    public function delete(): string
    {
        return "DELETE FROM Role WHERE (roleID=?)";
    }


}