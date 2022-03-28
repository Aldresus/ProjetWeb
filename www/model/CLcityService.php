<?php
class CLcityService extends CLcadService
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

}