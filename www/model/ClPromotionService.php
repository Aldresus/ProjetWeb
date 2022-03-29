<?php
class ClPromotionService extends ClCadService
{
    public function getPromotions():array
    {
        $sql=$this->oPdo->prepare("SELECT * FROM Promotions;");
        $sql->execute();
        $promotions=array();
        foreach ($sql->fetchAll() as $row) {
            $promotions["${row['promotion']}"]['promotionID']=$row['promotionID'];
            $promotions["${row['promotion']}"]['userID']=$row['userID'];
        }
        return $promotions;
    }
}
