<?php
class localities
{
// déclaration des attributs :
    private int $cityID;
    private string $cityName;
    private string $postalCode;
    private string $roadName;
    private int $roadNumber;


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
    {//Ajouter la moyenne des notes
        return "SELECT * FROM Localities";
    }

    public function insert(): string
    {
        return "INSERT INTO Localities(cityID, cityName, postalCode, roadName, roadNumber) VALUES (?, ?, ?, ?, ?)";
    }

    public function update(): string
    {
        return "UPDATE Localities SET (grade=?) WHERE (companyID=? AND userID=?)";
    }

    public function delete(): string
    {
        return "DELETE FROM Localities WHERE (companyID=? AND userID=?)";
    }
}