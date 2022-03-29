<?php

class ClLocalitiesService extends ClCadService
{
    public function addLocality($postalCode, $roadName, $roadNumber, $city)
    {
        $query=$this->oPdo->prepare("INSERT INTO Localities(postalCode, roadName, roadNumber, cityID) SELECT ?, ?, ?, cityID FROM Cities WHERE cityName=?;
");
        $query->bindParam(1, $postalCode, PDO::PARAM_STR);
        $query->bindParam(2, $roadName, PDO::PARAM_STR);
        $query->bindParam(3, $roadNumber, PDO::PARAM_INT);
        $query->bindParam(4, $city, PDO::PARAM_STR);

        return $query->execute();
    }
    public function giveLocality($localityID, $companyID):bool
    {
        $sql=$this->oPdo->prepare("INSERT INTO locate(localityID, companyID) SELECT ?, cityID FROM Cities WHERE cityName=?;");
        $sql->bindParam(1, $localityID, PDO::PARAM_INT);
        $sql->bindParam(2, $companyID, PDO::PARAM_INT);
        return $sql->execute();;
    }

}
