<?php

function affichage(array $users) {
    foreach ($users as $user) {
        echo "<div class='col-sm-12 col-lg-3 col-md-6 border rounded'>
            <h4 class='text-center mb-3 text-dark mt-3'>${user['firstName']} <strong>${user['lastName']}</strong></h4>
            <div class='container'>
                <div class='row'>
                    <div class='row'> 
                        <div class='col-12'>
                            <p class='text-center mt-0 mb-3'>Centre : <strong>${user['cityName']}</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }
}

if(isset($_POST)){
    $action=$_POST['action'];
    require 'access.php';
    require '../model/ClCadService.php';
    require '../model/ClUserService.php';

    $page = $_GET['page'] ?? 1;
    $perPage = 10;
    $oUserService = new ClUserService($servername, $db, $username, $password);
    $users=array();

    if($action=='student'){
        $users = $oUserService->getStudents($perPage, $page);
        foreach ($users as $user) {
            echo "<div class='col-sm-12 col-lg-3 col-md-6 border rounded'>
                 <h4 class='text-center mb-3 text-dark'>${user['firstName']} ${user['lastName']}</h4>
                 <div class='container'>
                     <div class='row'>
                         <div class='row'>
                             <div class='col-12'>
                                 <p class='text-center'><strong>${user['promotion']}</strong></p> 
                             </div> 
                         </div> 
                         <div class='row'> 
                             <div class='col-12'>
                                 <p class='text-center'>Pilote : ${user['pilotFirstname']} ${user['pilotLastname']}</p> 
                             </div> 
                         </div> 
                         <div class='row'> 
                             <div class='col-12'>
                                 <p class='text-center mt-0 mb-3'>Centre : <strong>${user['cityName']}</strong></p>
                             </div>
                         </div>
                         <div class='row'>
                             <div class='col-12'>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>";
        }
    }
    elseif($action=='delegue'){
        $users = $oUserService->getUsers("Delegue",$perPage, $page);
        affichage($users);
    }
    elseif($action=='pilote'){
        $users = $oUserService->getUsers("Pilote", $perPage, $page);
        affichage($users);
    }
    elseif($action=='admin'){
        $users = $oUserService->getUsers("Admin", $perPage, $page);
        affichage($users);
    }


}