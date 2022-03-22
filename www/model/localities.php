<?php
class localities
{
// déclaration des attributs :
    private int $cityID;
    private string $postalCode;
    private string $roadName;
    private int $roadNumber;
    private string $cityName;

    // Geters :
    public function getCityID(): int
    {
        return $this->cityID;
    }
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    public function getRoadName(): string
    {
        return $this->roadName;
    }
    public function getRoadNumber(): int
    {
        return $this->roadNumber;
    }
    public function getCityName(): string
    {
        return $this->cityName;
    }


    // Seters :
    public function setCityID($cityID){
        $this->cityID = $cityID;
    }
    public function setPostalCode($postalCode){
        $this->postalCode = $postalCode;
    }
    public function setRoadName($roadName){
        $this->roadName = $roadName;
    }
    public function setRoadNumber($roadNumber){
        $this->roadNumber = $roadNumber;
    }
    public function setCityName($cityName){
        $this->cityName = $cityName;
    }


    //CRUD

    public function select(): string
    {
        return "";
    }

    public function insert(): string
    {
        return "";
    }

    public function update(): string
    {
        return "";
    }

    public function delete(): string
    {
        return "";
    }
}