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