<?php
require 'access.php';
require '../model/ClCadService.php';



if(isset($_GET['submit'])){

    require '../model/ClOfferService.php';
    $oClOfferService=new ClOfferService($servername, $db, $username, $password);
    $oClOfferService->addOffer($_POST['duration'], $_POST['wage'], $_POST['offerDate'], $_POST['internNumber'], 1, $_POST['offerDescription'], $_POST['companyID'], $_POST['promotion']);
    print_r($_POST);
}

require '../model/ClCompanyService.php';
require '../model/ClPromotionService.php';
$oClCompanyService = new ClCompanyService($servername, $db, $username, $password);
$companies = $oClCompanyService->getCompaniesNames();
$oCLpromotionService = new ClPromotionService($servername, $db, $username, $password);
$promotions=$oCLpromotionService->getPromotions();