<?php
require 'access.php';
require '../model/ClCadService.php';
require '../model/ClRoleService.php';
$oCLroleService = new ClRoleService($servername, $db, $username, $password);


if(isset($_POST['submit'])){
    if($_POST['promotion'] == 'null') {
        $promotion = null;
    }
    else {
        $promotion = $_POST['promotion'];
    }
    require '../model/ClUserService.php';
    $oUserService = new ClUserService($servername, $db, $username, $password);
    print_r($_POST);
    $oUserService->addUser($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'], $promotion, $_POST['center'], $_POST['role']);
    header('Location: ../views/inscription.php?success=1');
}
else
{
    require '../model/ClPromotionService.php';

    require '../model/ClCityService.php';

    $oCLpromotionService = new ClPromotionService($servername, $db, $username, $password);
    $promotions=$oCLpromotionService->getPromotions();

    $roles=$oCLroleService->getRoles();

    $oCLcityService = new ClCityService($servername, $db, $username, $password);
    $centers=$oCLcityService->getCenters();

}
