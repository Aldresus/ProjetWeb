<?php
require'access.php';
require_once '../model/ClCadService.php';

$role=$_COOKIE['role'];
$userID=$_COOKIE['userID'];

require_once '../model/ClPermService.php';
$oPermService = new ClPermService($servername, $db, $username, $password);
$perms=$oPermService->getPermissionsFromRole($role);

if($_POST['part']=='buttons'){
    //Creer un pilote/etudiant/delegue
    if (!empty(array_intersect($perms, array(14, 18, 23)))) {
        echo'<div class="col-md-2 col-lg-2 col-sm-6  p-1 d-grid gap-2">
                <a class="btn btn-primary btn-warning m-0 p-3" href="inscriptionUser.php">Ajouter utilisateurs</a>
            </div>';
    }

    //rechercher pilote, supprimer pilote, update pilote
    if (!empty(array_intersect($perms, array(13, 15, 16)))) {
        echo'<div class="col-md-2 col-lg-2 col-sm-6  p-1 d-grid gap-2">
                <a class="btn btn-primary btn-warning m-0 p-3" href="pilotes.php">Voir pilotes</a>
            </div>';
    }

    //rechercher delegue, supprimer delegue, update delegue
    if (!empty(array_intersect($perms, array(17, 19, 20)))) {
        echo'<div class="col-md-2 col-lg-2 col-sm-6  p-1 d-grid gap-2">
                <a class="btn btn-primary btn-warning m-0 p-3" href="delegues.php">Voir delégués</a>
            </div>';
    }

    //rechercher etudiant, supprimer etudiant, update etudiant
    if (!empty(array_intersect($perms, array(22, 24, 25)))) {
        echo'<div class="col-md-2 col-lg-2 col-sm-6  p-1 d-grid gap-2">
                <a class="btn btn-primary btn-warning m-0 p-3" href="students.php">Voir etudiants</a>
            </div>';
    }

    //ajouter/supprimer offre wishlist
    if (!empty(array_intersect($perms, array(27, 28)))) {
        echo'<div class="col-md-2 col-lg-2 col-sm-6  p-1 d-grid gap-2">
                <a class="btn btn-primary btn-warning m-0 p-3" href="wishlist.php">Wishlist</a>
            </div>';
    }

    //peut evaluer entreprise
    if (in_array(5, $perms)) {
        echo'<div class="col-md-2 col-lg-2 col-sm-6  p-1 d-grid gap-2">
                <a class="btn btn-primary btn-warning m-0 p-3" href="evaluateCompany.php">Noter une entreprise</a>
            </div>';
    }

    //peut ajouter offre
    if (in_array(9, $perms)) {
        echo'<div class="col-md-2 col-lg-2 col-sm-6  p-1 d-grid gap-2">
                <a class="btn btn-primary btn-warning m-0 p-3" href="inscriptionOffre.php">Ajouter offre</a>
            </div>';
    }

    //peut ajouter entreprise
    if (in_array(3, $perms)) {
        echo'<div class="col-md-2 col-lg-2 col-sm-6  p-1 d-grid gap-2">
                <a class="btn btn-primary btn-warning m-0 p-3" href="inscriptionEntreprise.php">Ajouter entreprise</a>
            </div>';
    }

    //peut ajouter entreprise
    if (in_array(3, $perms)) {
        echo'<div class="col-md-2 col-lg-2 col-sm-6  p-1 d-grid gap-2">
                <a class="btn btn-primary btn-warning m-0 p-3" href="inscriptionEntreprise.php">Ajouter entreprise</a>
            </div>';
    }
}

elseif($_POST['part']=='infos'){
    require '../model/ClUserService.php';
    $oUserService = new ClUserService($servername, $db, $username, $password);
    $user=$oUserService->getUserByID($userID);

    echo "<h4 class='text-center mb-3 text-dark mt-3'>${user['firstName']} <strong>${user['lastName']}</strong></h4>
            <div class='container'>
                <div class='row'>
                    <div class='row'> 
                        <div class='col-12'>
                            <p class='text-center mt-0 mb-3'>Centre : <strong>${user['cityName']}</strong></p>
                        </div>
                    </div>
                </div>
            </div>";
}

elseif($_POST['part']=='offers'){
    if (in_array(29, $perms)) {
        require '../smarty-4.1.0/libs/Smarty.class.php';
        require '../model/ClOfferService.php';
        $oOfferService = new ClOfferService($servername, $db, $username, $password);

        $oSmarty = new Smarty();
        $offers=$oOfferService->getOffersFromUser(4,1, $userID);

        $oSmarty->assign('offers', $offers);
        echo '<div class="container">
                    <H4 class="text-center my-4 pb-3">Ces offres correspondent à votre profil :</H4>
                    <div class="row mb-5">';
        $oSmarty->display("../templates/offersList.tpl");
        echo'</div>';
    }
}
//if (in_array(2, $perms)) {}
