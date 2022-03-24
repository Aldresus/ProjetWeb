<?php

class promotions
{
    private int $promotionID;
    private string $promotion;
    private string $userID;


    public function getPromotionID(): int
    {
        return $this->promotionID;
    }

    public function setPromotionID(int $promotionID): void
    {
        $this->promotionID = $promotionID;
    }

    public function getPromotion(): string
    {
        return $this->promotion;
    }

    public function setPromotion(string $promotion): void
    {
        $this->promotion = $promotion;
    }

    public function getUserID(): string
    {
        return $this->userID;
    }

    public function setUserID(string $userID): void
    {
        $this->userID = $userID;
    }

//CRUD

    public function select(): string
    {//Ajouter la moyenne des notes
        return "SELECT * FROM Promotions";
    }

    public function insert(): string
    {
        return "INSERT INTO Promotions(promotion, userID) VALUES (?, ?)";
    }

    public function update(): string
    {
        return "UPDATE Permissions SET (promotion=?, userID=?) WHERE (promotionID=?)";
    }

    public function delete(): string
    {
        return "DELETE FROM Permissions WHERE (promotionID=?)";
    }

}