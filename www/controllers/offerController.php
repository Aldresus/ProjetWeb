<?php
require 'access.php';
require '../model/ClCadService.php';
require '../model/ClOfferService.php';

$oClOfferService=new ClOfferService($servername, $db, $username, $password);


if(isset($_GET['submit'])){

    $oClOfferService->addOffer($_POST['duration'], $_POST['wage'], $_POST['offerDate'], $_POST['internNumber'], 1, $_POST['offerDescription'], $_POST['companyID'], $_POST['promotion']);
    header("Location:../views/inscriptionOffre.php?success=1");
}

elseif(isset($_POST['action']) and $_POST['action']=='getOffers'){
    $page = $_GET['page'] ?? 1;
    $perPage = 10;
    $users = $oClOfferService->getOffers($perPage, $page);
    foreach ($users as $user) {
        echo "<div class='col-sm-12 col-lg-3 col-md-3 border rounded mb-3'>
            <h4 class='text-center mb-3'>${user['promotion']} - ${user['companyActivity']}</h4>
            <div class='container'>
                <div class='row'>
                    <p class='col-sm-6 col-lg-10 col-md-12 mb-0'><strong>${user['companyName']}</strong></p>
                    <p class='col-md-12 col-lg-2 col-sm-6 text-md-end text-lg-end text-sm-start mt-0 mb-3 highGrade'><strong>${user['reviewPilot']}</strong></p>
                </div>
                <div class='row'>
                    <p class='col-12'>${user['offerDescription']}</p>
                    <p class='col-12'>${user['postalCode']}, ${user['roadNumber']} ${user['roadName']}, ${user['cityName']}</p>
                </div>
            </div>
        </div>";
    }
}
else{
    require '../model/ClCompanyService.php';
    require '../model/ClPromotionService.php';
    $oClCompanyService = new ClCompanyService($servername, $db, $username, $password);
    $companies = $oClCompanyService->getCompaniesNames();
    $oCLpromotionService = new ClPromotionService($servername, $db, $username, $password);
    $promotions=$oCLpromotionService->getPromotions();
}