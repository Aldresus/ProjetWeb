<?php
class CLuserService extends CLcadService
{
    public function addUser($firstname, $lastname, $login, $password ,$promotion, $centerID, $roleID): bool
    {
        $sql=$this->oPdo->prepare("INSERT INTO Users(firstname, lastname, login, password, promotionId, cityID) VALUES (?, ?, ?, ?, ?, ?);
        INSERT INTO are(roleID, userID) VALUES (?, last_insert_id());");
        $sql->bindParam(1, $firstname, PDO::PARAM_STR);
        $sql->bindParam(2, $lastname, PDO::PARAM_STR);
        $sql->bindParam(3, $login, PDO::PARAM_STR);
        $sql->bindParam(4, $password, PDO::PARAM_STR);
        if ($promotion == null) {
            $sql->bindValue(5, null, PDO::PARAM_NULL);
        }
        else {
            $sql->bindParam(5, $promotion, PDO::PARAM_INT);
        }
        $sql->bindParam(5, $promotion, PDO::PARAM_INT);
        $sql->bindParam(6, $centerID, PDO::PARAM_INT);
        $sql->bindParam(7, $roleID, PDO::PARAM_INT);
        return $sql->execute();

    }
}

