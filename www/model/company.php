<?php
class company extends localities
{
// déclaration des attributs :
    private int $companyID;
    private string $companyName;
    private string $companyActivity;
    private int $nbAcceptedIntern;
    private float $internReview;
    private float $reviewPilot;

    // Geters :
    public function getCompanyID(): int
    {
        return $this->companyID;
    }
    public function getCompanyName(): string
    {
        return $this->companyName;
    }
    public function getCompanyActivity(): string
    {
        return $this->companyActivity;
    }
    public function getNbAcceptedIntern(): int
    {
        return $this->nbAcceptedIntern;
    }
    public function getInternReview(): float
    {
        return $this->internReview;
    }
    public function getReviewPilot(): float
    {
        return $this->reviewPilot;
    }


    // Seters :
    public function setCompanyID($companyID): void
    {
        $this->$companyID = $companyID;
    }
    public function setCompanyName($companyName): void
    {
        $this->$companyName = $companyName;
    }
    public function setCompanyActivity($companyActivity): void
    {
        $this->$companyActivity = $companyActivity;
    }
    public function setNbAcceptedIntern($nbAcceptedIntern): void
    {
        $this->$nbAcceptedIntern = $nbAcceptedIntern;
    }
    public function setReviewPilot($reviewPilot): void
    {
        $this->$reviewPilot = $reviewPilot;
    }

    //CRUD

    public function select(): string
    {//Ajouter la moyenne des notes
        return "SELECT * FROM Company";
    }

    public function insert(): string
    {
        return "INSERT INTO Company(companyName, companyActivity, nbAcceptedInterns, reviewPilot) VALUES (?, ?, ?, ?)";
    }

    public function update(): string
    {
        return "UPDATE Company SET (companyName=?, companyActivity=?, nbAcceptedInterns=?, reviewPilot=?) WHERE (companyId=?)";
    }

    public function delete(): string
    {
        return "DELETE FROM Company WHERE (companyId=?)";
    }
}