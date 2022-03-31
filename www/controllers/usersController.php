<?php

function affichage(array $users, $action) {
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
                <form method='POST' action='../controllers/usersController.php'>
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
                        </div>
                    </form>
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
                     </div>
                     <form method='POST' action='../controllers/usersController.php'>
                        <input type='hidden' name='id' value='${user['userID']}'>
                        <div class='row text-center mb-3'>
                            <div class='col-6'>
                                <button name='action' type='submit' class='form-control' value='editstudent'>
                                    <i class='fa-solid fa-pen-to-square fa-xl text-success'></i>
                                </button>
                            </div>
                            <div class='col-6'>
                                <button name='action' type='submit' class='form-control' value='deletestudent'>
                                    <i class='fa-solid fa-trash-can fa-xl text-danger'></i>
                                </button>
                            </div>
                        </div>
                    </form>
                 </div>
             </div>";
        }
    }
    elseif($action=='delegue'){
        $users = $oUserService->getUsers("Delegue",$perPage, $page);
        affichage($users, $action);
    }
    elseif($action=='pilote'){
        $users = $oUserService->getUsers("Pilote", $perPage, $page);
        affichage($users, $action);
    }
    elseif($action=='admin'){
        $users = $oUserService->getUsers("Admin", $perPage, $page);
        affichage($users, $action);
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