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