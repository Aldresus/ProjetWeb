<?php
class grades
{
// déclaration des attributs :
    private int $companyID;
    private string $companyName;
    private int $userID;
    private string $firstName;
    private string $lastName;
    private float $grade;

    // Geters :
    public function getCompanyID(): int
    {
        return $this->companyID;
    }
    public function getCompanyName(): string
    {
        return $this->companyName;
    }
    public function getUserID(): int
    {
        return $this->userID;
    }
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    public function getLastName(): string
    {
        return $this->lastName;
    }
    public function getGrade(): float
    {
        return $this->grade;
    }

    // Seters :
    public function setCompanyID($companyID){
        $this->companyID = $companyID;
    }
    public function setCompanyName($companyName){
        $this->companyName = $companyName;
    }
    public function setUserID($userID){
        $this->userID = $userID;
    }
    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    public function setGrade($grade){
        $this->grade = $grade;
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