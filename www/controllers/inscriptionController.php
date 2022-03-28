<?php
require 'access.php';
require'../model/CLcadService.php';
require'../model/CLroleService.php';
$oCLroleService = new CLroleService($servername, $db, $username, $password);


if(isset($_POST['submit'])){
    if($_POST['promotion'] == 'null') {
        $promotion = null;
    }
    else {
        $promotion = $_POST['promotion'];
    }
    require '../model/CLuserService.php';
    $oUserService = new CLuserService($servername, $db, $username, $password);
    print_r($_POST);
    $oUserService->addUser($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'], $promotion, $_POST['center'], $_POST['role']);
    header('Location: ../views/inscription.php?success=1');
}
else
{
    require'../model/CLpromotionService.php';

    require'../model/CLcityService.php';

    $oCLpromotionService = new CLpromotionService($servername, $db, $username, $password);
    $promotions=$oCLpromotionService->getPromotions();

    $roles=$oCLroleService->getRoles();

    $oCLcityService = new CLcityService($servername, $db, $username, $password);
    $centers=$oCLcityService->getCenters();

}
