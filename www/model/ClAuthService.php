<?php
class ClAuthService extends ClCadService
{
//----------------------------------------------------------------------------------------------------------------------
    public function auth(string $login, string $password)
    {
        try {
            $sql=$this->oPdo->prepare("SELECT Users.userID ,Role.roleID  FROM Users JOIN are ON Users.userID = are.userID JOIN Role ON Role.roleID=are.roleID WHERE (login=? AND password=?);");
            $sql->execute(array($login, $password));
            if($sql->rowCount() > 0){
                $role=0;
                $firstTime=true;
                foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $row) {
                    if ($firstTime) {
                        setcookie("userID", $row['userID'], time() + (86400 * 30), "/");
                        $firstTime=!$firstTime;
                    }
                    $role = $row['roleID'];
                }

                setcookie("role", $role, time() + (86400 * 30), "/");
                return true;
            }
            else{
                return false;
            }
        }
        catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
}