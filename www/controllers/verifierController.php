<?php
require_once '../model/ClCadService.php';
require_once '../model/ClPermService.php';

$role=$_COOKIE['role'];
$userID=$_COOKIE['userID'];
$requiredPerm=$_POST['requiredPerm'];


require_once '../model/ClPermService.php';
$oPermService = new ClPermService($servername, $db, $username, $password);
$perms=$oPermService->getPermissionsFromRole($role);
if(is_array($requiredPerm)){
    if (empty(array_intersect($perms, $requiredPerm))) {
        die("Vous n'avez pas la permission d'être ici!");
    }
}
elseif (!in_array($requiredPerm, $perms)) {
    die("Vous n'avez pas la permission d'être ici!");
}
