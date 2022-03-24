<?php
class grades
{
// déclaration des attributs :
    private int $companyID;
    private int $userID;
    private float $grade;

    // Geters :
    public function getCompanyID(): int
    {
        return $this->companyID;
    }
    public function getUserID(): int
    {
        return $this->userID;
    }
    public function getGrade(): float
    {
        return $this->grade;
    }

    // Seters :
    public function setCompanyID($companyID){
        $this->companyID = $companyID;
    }
    public function setUserID($userID){
        $this->userID = $userID;
    }
    public function setGrade($grade){
        $this->grade = $grade;
    }

    //CRUD

    public function select(): string
    {//Ajouter la moyenne des notes
        return "SELECT * FROM grade";
    }

    public function insert(): string
    {
        return "INSERT INTO grade(companyId, userID, grade) VALUES (?, ?, ?)";
    }

    public function update(): string
    {
        return "UPDATE grade SET (grade=?) WHERE (companyID=? AND userID=?)";
    }

    public function delete(): string
    {
        return "DELETE FROM grade WHERE (companyID=? AND userID=?)";
    }
}