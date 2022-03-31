<?php
// On lance Smarty
require('../smarty-4.1.0/libs/Smarty.class.php');
require('../controllers/access.php');
require_once('../model/ClCadService.php');
require('../model/ClOfferService.php');
$oOfferService=new ClOfferService($servername, $db, $username, $password);
$oSmarty = new Smarty();
$offers=$oOfferService->getOffers(4,1);

$oSmarty->assign('offers', $offers);

try {
    $oSmarty->display("../templates/offersList.tpl");
}
catch (SmartyException $e) {
    die($e->getMessage());

}