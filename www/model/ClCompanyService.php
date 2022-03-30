<?php

class ClCompanyService extends ClCadService
{
    public function getCompany():array
    {
        $query=$this->oPdo->prepare("SELECT * FROM Company");
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCompaniesNames():array
    {
        $query=$this->oPdo->prepare("SELECT companyID, companyName FROM Company");
        $query->execute();

        $companies=array();
        foreach ($query->fetchAll() as $row) {
            $companies["${row['companyName']}"]=$row['companyID'];
        }
        return $companies;
    }

    public function getCompanies(int $perPage, int $page)
    {
        $start=(($page-1)*$perPage);
        $query=$this->oPdo->prepare("SELECT Company.companyId as id, Company.companyName as entreprise, Company.companyActivity as activite, Company.nbAcceptedInterns as stagiairesEnTout, Company.reviewPilot as confiance, Localities.postalCode as CP, Localities.roadNumber as nbRue, Localities.roadName as rue,  Cities.cityName as ville FROM Company JOIN locate ON locate.companyID=Company.companyID JOIN Localities ON Localities.localityID=locate.localityID JOIN Cities ON Cities.cityID=Localities.cityID ORDER BY Company.companyID DESC LIMIT ?, ?;");
        $query->bindParam(1, $start, PDO::PARAM_INT);
        $query->bindParam(2, $perPage, PDO::PARAM_INT);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addCompany($cityName, $postalCode, $roadName, $roadNumber, $companyName, $companyActivity, $reviewPilot)
    {
        $query=$this->oPdo->prepare("INSERT IGNORE INTO Cities(cityName, center) VALUES (LOWER(:cityName), 0);
        INSERT INTO Localities(postalCode, roadName, roadNumber, cityID) SELECT :postalCode, :roadName, :roadNumber, cityID FROM Cities WHERE cityName=LOWER(:cityName2);
        INSERT INTO Company(companyName, companyActivity, nbAcceptedInterns, reviewPilot) VALUES (:companyName, :companyActivity, 0, :reviewPilot);
        INSERT INTO locate(localityID, companyID) SELECT last_insert_id(), localityID FROM Localities WHERE postalCode=:postalCode2 AND roadName=:roadName2 AND roadNumber=:roadNumber2;");

        $query->bindParam(":cityName", $cityName, PDO::PARAM_STR);
        $query->bindParam(":cityName2", $cityName, PDO::PARAM_STR);
        $query->bindParam(":postalCode", $postalCode, PDO::PARAM_STR);
        $query->bindParam(":roadName", $roadName, PDO::PARAM_STR);
        $query->bindParam(":roadNumber", $roadNumber, PDO::PARAM_INT);
        $query->bindParam(":companyName", $companyName, PDO::PARAM_STR);
        $query->bindParam(":companyActivity", $companyActivity, PDO::PARAM_STR);
        $query->bindParam(":reviewPilot", $reviewPilot, PDO::PARAM_INT);
        $query->bindParam(":postalCode2", $postalCode, PDO::PARAM_STR);
        $query->bindParam(":roadName2", $roadName, PDO::PARAM_STR);
        $query->bindParam(":roadNumber2", $roadNumber, PDO::PARAM_INT);


        return $query->execute();
    }

}