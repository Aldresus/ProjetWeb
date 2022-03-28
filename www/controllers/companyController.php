<?php
require 'access.php';
require '../model/CLcompanyService.php';

$page = $_GET['page'] ?? 1;
$perPage = 10;
$oCompanies = new CLcompanyService($servername, $db, $username, $password);
$companies = $oCompanies->getCompanies($perPage, $page);