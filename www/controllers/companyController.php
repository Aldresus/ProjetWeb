<?php
require 'access.php';
require '../model/ClCadService.php';
require '../model/ClCompanyService.php';


$page = $_GET['page'] ?? 1;
$perPage = 10;
$oCompanies = new ClCompanyService($servername, $db, $username, $password);
$companies = $oCompanies->getCompanies($perPage, $page);

foreach ($companies as $company) {

    echo "<div class='col-sm-12 col-lg-3 col-md-6 border rounded m-3'>
            <h4 class='text-center mb-3 text-dark'>${company['entreprise']}</h4>
            <div class='container'>
                <div class='row'>
                    <div class='row'>
                        <div class='col-12'>
                            <p class='text-center'><strong>${company['activite']}</strong></p> 
                        </div> 
                    </div> 
                    <div class='row'> 
                        <div class='col-12'>
                            <p class='text-center'>${company['CP']}, ${company['nbRue']}${company['rue']}, ${company['ville']}</p> 
                        </div> 
                    </div> 
                    <div class='row'> 
                        <div class='col-12'>
                            <p class='text-center mt-0 mb-3'>Étudiants précédemment acceptés : <strong>${company['stagiairesEnTout']}</strong></p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-12'>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-12'>
                            <p class='text-center'>Niveau de confiance : <strong>${company['confiance']}</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
}
