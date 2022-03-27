<?php
class CLauthService
{
    private PDO $oPdo;

    public function __construct($servername, $db, $username, $password)
    {
        try {
            $this->oPdo = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
            $this->oPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "<script>console.log('Connected successfully')</script>";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
//----------------------------------------------------------------------------------------------------------------------
    public function auth(string $login, string $password)
    {
        try {
            $sql=$this->oPdo->prepare("SELECT Users.userID ,has.permissionID  FROM Users JOIN could ON Users.userID = could.userID JOIN Role ON Role.roleID=could.roleID JOIN has ON has.roleID=could.roleID WHERE (login=? AND password=?);");
            $sql->execute(array($login, $password));
            if($sql->rowCount() > 0){
                $perms = [];
                $firstTime=true;
                foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $row) {
                    if ($firstTime) {
                        setcookie("userID", $row['userID'], time() + (86400 * 30), "/");
                        $firstTime=!$firstTime;
                    }
                    $perms[] = $row['permissionID'];
                    echo $row['permissionID']."<br>";
                }

                setcookie("perms", json_encode($perms), time() + (86400 * 30), "/");
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