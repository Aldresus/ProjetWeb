<?php

function affichage(array $users, $action, $canEdit) {
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
                </div>";
                if($canEdit) {
                    echo "<form method='POST' action='../controllers/usersController.php'>
                            <input type='hidden' name='id' value='${user['userID']}'>
                                <div class='row text-center mb-3'>
                                    <div class='col-6'>
                                        <button name='action' type='submit' class='form-control' value='edit$action'>
                                            <i class='fa-solid fa-pen-to-square fa-xl text-success'></i>
                                        </button>
                                    </div>
                                    <div class='col-6'>
                                        <button name='action' type='submit' class='form-control' value='delete$action'>
                                            <i class='fa-solid fa-trash-can fa-xl text-danger'></i>
                                        </button>
                                    </div>
                                </div>";
            }
            echo"</form>
            </div>
        </div>";
    }
}
require_once '../model/ClCadService.php';
require_once '../model/ClPermService.php';

$role=$_COOKIE['role'];
$userID=$_COOKIE['userID'];
$canEdit=false;

require_once '../model/ClPermService.php';
$oPermService = new ClPermService($servername, $db, $username, $password);
$perms=$oPermService->getPermissionsFromRole($role);

if (!empty(array_intersect($perms, array(14, 18, 23)))) {
    $canEdit=true;
}



if(isset($_POST)){
    $action=$_POST['action'];
    require 'access.php';
    require '../model/ClUserService.php';

    $page = $_GET['page'] ?? 1;
    $perPage = 8;
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
                     </div>";
                     if($canEdit) {
                    echo "<form method='POST' action='../controllers/usersController.php'>
                            <input type='hidden' name='id' value='${user['userID']}'>
                                <div class='row text-center mb-3'>
                                    <div class='col-6'>
                                        <button name='action' type='submit' class='form-control' value='edit$action'>
                                            <i class='fa-solid fa-pen-to-square fa-xl text-success'></i>
                                        </button>
                                    </div>
                                    <div class='col-6'>
                                        <button name='action' type='submit' class='form-control' value='delete$action'>
                                            <i class='fa-solid fa-trash-can fa-xl text-danger'></i>
                                        </button>
                                    </div>
                                </div>";
            }
            echo"</form>
            </div>
        </div>";
        }
    }
    elseif($action=='delegue'){
        $users = $oUserService->getUsers("Delegue",$perPage, $page);
        affichage($users, $action, $canEdit);
    }
    elseif($action=='pilote'){
        $users = $oUserService->getUsers("Pilote", $perPage, $page);
        affichage($users, $action, $canEdit);
    }
    elseif($action=='admin'){
        $users = $oUserService->getUsers("Admin", $perPage, $page);
        affichage($users, $action, $canEdit);
    }
    elseif($action=='deletestudent'){
        $users = $oUserService->deleteUser($_POST['id']);
        header('Location: ../views/students.php');
    }
    elseif($action=='deletepilote'){
        echo "deletepilote";
        ///$users = $oUserService->deleteUser($_POST['id']);
        header('Location: ../views/students.php');
    }
    elseif($action=='deletedelegue'){
        $users = $oUserService->deleteUser($_POST['id']);
        header('Location: ../views/delegues.php');
        //header('Location: ../views/students.php');
    }
    elseif($action=='admin'){
        $users = $oUserService->deleteUser($_POST['id']);
        header('Location: ../views/admins.php');
        //header('Location: ../views/students.php');
    }

}