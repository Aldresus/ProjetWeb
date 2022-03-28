<?php
require 'access.php';
require '../model/CLauthService.php';
$auth = new CLauthService($servername, $db, $username, $password);

if($_GET['disconnect'] == 1) {
    setcookie("role", "", time() - 3600, "/");
    setcookie("userID", "", time() - 3600, "/");
    header("Location:../views/index.php");
}
else {
    if ($auth->auth($_POST["login"], $_POST["password"])) {
        header("Location:../views/index.php");
    } else {
        header("Location:../views/connection.php?error=1");
    }
}

