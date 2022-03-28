<?php
require 'CLcadService.php';
class CLcompanyService extends CLcadService
{
    public function getCompanies(int $perPage, int $page)
    {
        $start=(($page-1)*$perPage);
        $query=$this->oPdo->prepare("SELECT Company.companyId as id, Company.companyName as entreprise, Company.companyActivity as activite, Company.nbAcceptedInterns as stagiairesEnTout, Company.reviewPilot as confiance, Localities.postalCode as CP, Localities.roadNumber as nbRue, Localities.roadName as rue,  Cities.cityName as ville FROM Company JOIN locate ON locate.companyID=Company.companyID JOIN Localities ON Localities.localityID=locate.localityID JOIN Cities ON Cities.cityID=Localities.cityID ORDER BY Company.companyID DESC LIMIT ?, ?;");
        $query->bindParam(1, $start, PDO::PARAM_INT);
        $query->bindParam(2, $perPage, PDO::PARAM_INT);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

}