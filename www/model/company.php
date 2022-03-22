<?php
class company extends localities
{
// déclaration des attributs :
    private $companyID;
    private $companyName;
    private $companyActivity;
    private $nbAcceptedIntern;
    private $internReview;
    private $reviewPilot;

    // Geters :
    public function getCompanyID() {
        /** @var int $companyID */
        return $this->$companyID;
    }
    public function getCompanyName() {
        /** @var string $companyName */
        return $this->$companyName;
    }
    public function getCompanyActivity() {
        /** @var string $companyActivity */
        return $this->$companyActivity;
    }
    public function getNbAcceptedIntern() {
        /** @var int $nbAcceptedIntern */
        return $this->$nbAcceptedIntern;
    }
    public function getInternReview() {
        /** @var float $internReview */
        return $this->$internReview;
    }
    public function getReviewPilot() {
        /** @var float $reviewPilot */
        return $this->$reviewPilot;
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