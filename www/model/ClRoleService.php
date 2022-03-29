<?php
class ClRoleService extends ClCadService
{
    public function getRoles():array
    {
        $sql=$this->oPdo->prepare("SELECT * FROM Role;");
        $sql->execute();
        $roles=array();
        foreach ($sql->fetchAll() as $row) {
            $roles["${row['roleName']}"]=$row['roleID'];
        }
        return $roles;
    }
    public function giveRole($roleID, $userID):bool
    {
        $sql=$this->oPdo->prepare("INSERT INTO are(roleID, userID) VALUES (?, ?);");
        $sql->bindParam(1, $roleID, PDO::PARAM_INT);
        $sql->bindParam(2, $userID, PDO::PARAM_INT);
        return $sql->execute();;
    }
}