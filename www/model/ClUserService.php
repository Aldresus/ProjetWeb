<?php
class ClUserService extends ClCadService
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

    public function getStudents(int $perPage, int $page)
    {
        $start=(($page-1)*$perPage);
        $query=$this->oPdo->prepare("SELECT t.userID, t.firstName, t.lastName, Promotions.promotion, Cities.cityName, Users.firstName as pilotFirstname, Users.lastname as pilotLastname FROM Users t
        JOIN are ON t.userID = are.userID 
        JOIN Promotions ON t.promotionID=Promotions.promotionID 
        JOIN Users ON Promotions.userID=Users.userID
        JOIN Cities ON Cities.cityID=Users.cityID LIMIT ?, ?;");
        $query->bindParam(1, $start, PDO::PARAM_INT);
        $query->bindParam(2, $perPage, PDO::PARAM_INT);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getUsers(string $role, int $perPage, int $page)
    {
        $start=(($page-1)*$perPage);
        $query=$this->oPdo->prepare("SELECT t.userID, t.firstName, t.lastName, Cities.cityName FROM Users t
        JOIN Cities ON Cities.cityID=t.cityID
        JOIN are ON t.userID = are.userID 
        JOIN Role ON Role.roleID=are.roleID
        WHERE Role.roleName=? LIMIT ?, ?;");
        $query->bindParam(1, $role, PDO::PARAM_STR);
        $query->bindParam(2, $start, PDO::PARAM_INT);
        $query->bindParam(3, $perPage, PDO::PARAM_INT);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}

