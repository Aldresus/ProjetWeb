<?php

class apply
{
// déclaration des attributs :
    private int $offerID;
    private int $userID;
    private string $resume;
    private string $motivationLetter;
    private  string$validationSheet;
    private  string$convention;
    private bool $rejected;
    private int $step;
    private float $studentGrade;

    public function getOfferID(): int
    {
        return $this->offerID;
    }

    public function setOfferID(int $offerID): void
    {
        $this->offerID = $offerID;
    }

    public function getUserID(): int
    {
        return $this->userID;
    }

    public function setUserID(int $userID): void
    {
        $this->userID = $userID;
    }

    public function getResume(): string
    {
        return $this->resume;
    }

    public function setResume(string $resume): void
    {
        $this->resume = $resume;
    }

    public function getMotivationLetter(): string
    {
        return $this->motivationLetter;
    }

    public function setMotivationLetter(string $motivationLetter): void
    {
        $this->motivationLetter = $motivationLetter;
    }

    public function getValidationSheet(): string
    {
        return $this->validationSheet;
    }

    public function setValidationSheet(string $validationSheet): void
    {
        $this->validationSheet = $validationSheet;
    }

    public function getConvention(): string
    {
        return $this->convention;
    }

    public function setConvention(string $convention): void
    {
        $this->convention = $convention;
    }

    public function isRejected(): bool
    {
        return $this->rejected;
    }

    public function setRejected(bool $rejected): void
    {
        $this->rejected = $rejected;
    }

    public function getStep(): int
    {
        return $this->step;
    }

    public function setStep(int $step): void
    {
        $this->step = $step;
    }

    public function getStudentGrade(): float
    {
        return $this->studentGrade;
    }

    public function setStudentGrade(float $studentGrade): void
    {
        $this->studentGrade = $studentGrade;
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