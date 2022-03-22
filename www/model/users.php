<?php
class users
{
// déclaration des attributs :

    private int $userID;
    private string $firstName;
    private string $lastName;
    private string $center;
    private string $login;
    private string $password;
    private int $promotionID;

    // Geters :
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
    public function getCenter(): string
    {
        return $this->center;
    }
    public function getLogin(): string
    {
        return $this->login;
    }
    public function getPassword(): string
    {
        return $this->password;
    }
    public function getPromotionID(): int
    {
        return $this->promotionID;
    }


    // Seters :
    public function setUserID(int $userID): void
    {
        $this->userID = $userID;
    }
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }
    public function setCenter(string $center): void
    {
        $this->center = $center;
    }
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
    public function setPromotionID(int $promotionID): void
    {
        $this->promotionID = $promotionID;
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