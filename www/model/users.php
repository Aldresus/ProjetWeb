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
    {//Ajouter la moyenne des notes
        return "SELECT * FROM Users";
    }

    public function insert(): string
    {
        return "INSERT INTO Users(firstName, lastName, center, login, password, promotionID) VALUES (?, ?, ?, ?, ?, ?)";
    }

    public function update(): string
    {
        return "UPDATE Users SET (firstName=?, lastName=?, center=?, login=?, password=?, promotionID=?) WHERE (userID=?)";
    }

    public function delete(): string
    {
        return "DELETE FROM Users WHERE (userID=?)";
    }
}