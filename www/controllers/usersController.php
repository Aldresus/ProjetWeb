<?php
require 'access.php';
require '../model/ClCadService.php';
require '../model/ClUserService.php';


$page = $_GET['page'] ?? 1;
$perPage = 10;
$oUserService = new ClUserService($servername, $db, $username, $password);
$students = $oUserService->getStudents($perPage, $page);


foreach ($students as $student) {

    echo "<div class='col-sm-12 col-lg-3 col-md-6 border rounded'>
            <h4 class='text-center mb-3 text-dark mt-3'>${student['firstName']} <strong>${student['lastName']}</strong></h4>
            <div class='container'>
                <div class='row'>
                    <div class='row'>
                        <div class='col-12'>
                            <p class='text-center'>Promotion : <strong>${student['promotion']}</strong></p> 
                        </div> 
                    </div> 
                    <div class='row'> 
                        <div class='col-12'>
                            <p class='text-center'>Pilote : ${student['pilotFirstname']} ${student['pilotLastname']}</p> 
                        </div> 
                    </div> 
                    <div class='row'> 
                        <div class='col-12'>
                            <p class='text-center mt-0 mb-3'>Centre : <strong>${student['cityName']}</strong></p>
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