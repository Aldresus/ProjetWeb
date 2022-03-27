<?php
require 'access.php';
require '../model/CLauthService.php';
$auth = new CLauthService($servername, $db, $username, $password);

echo $_POST["password"].$_POST["login"];
if ($auth->auth($_POST["login"], $_POST["password"])){
    header("Location:../views/index.php");
}
else{
    header("Location:../views/connection.php?error=1");
}

