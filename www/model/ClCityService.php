<?php
class ClCityService extends ClCadService
{
    public function getCenters():array
    {
        $sql=$this->oPdo->prepare("SELECT cityID, cityName FROM Cities WHERE center=1;");
        $sql->execute();
        $centers=array();
        foreach ($sql->fetchAll() as $row) {
            $centers["${row['cityName']}"]=$row['cityID'];
        }
        return $centers;
    }

    public function addCity(string $cityName, bool $isCenter):bool
    {
        $sql=$this->oPdo->prepare("INSERT IGNORE INTO Cities(cityName, center) VALUES (?, ?);");
        $sql->bindParam(1, $cityName, PDO::PARAM_STR);
        $sql->bindParam(2, $isCenter, PDO::PARAM_BOOL);
        return $sql->execute();;
    }

}