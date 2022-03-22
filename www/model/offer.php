<?php

class offer
{
// déclaration des attributs :
    private int $offerID;
    private int $duration;
    private string $offerDate;
    private int $internNumber;
    private bool $available;
    private int $companyID;
    private int $localityID;

    public function getOfferID(): int
    {
        return $this->offerID;
    }

    public function setOfferID(int $offerID): void
    {
        $this->offerID = $offerID;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    public function getOfferDate(): string
    {
        return $this->offerDate;
    }

    public function setOfferDate(string $offerDate): void
    {
        $this->offerDate = $offerDate;
    }

    public function getInternNumber(): int
    {
        return $this->internNumber;
    }

    public function setInternNumber(int $internNumber): void
    {
        $this->internNumber = $internNumber;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }

    public function setAvailable(bool $available): void
    {
        $this->available = $available;
    }

    public function getCompanyID(): int
    {
        return $this->companyID;
    }

    public function setCompanyID(int $companyID): void
    {
        $this->companyID = $companyID;
    }

    public function getLocalityID(): int
    {
        return $this->localityID;
    }

    public function setLocalityID(int $localityID): void
    {
        $this->localityID = $localityID;
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