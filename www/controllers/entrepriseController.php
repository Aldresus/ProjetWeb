<?php
require 'access.php';
require '../model/ClCadService.php';
print_r($_POST);
if(isset($_POST['submit'])){
    require '../model/ClCompanyService.php';
    $oCompanyService = new ClCompanyService($servername, $db, $username, $password);
    print_r($_POST);
    $oCompanyService->addCompany($_POST['city'], $_POST['postalCode'], $_POST['address'], $_POST['roadNumber'], $_POST['name'], $_POST['activity'], $_POST['confiance']*10);
    header('Location: ../views/inscriptionEntreprise.php?success=1');
}