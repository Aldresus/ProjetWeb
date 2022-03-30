<?php

class ClOfferService extends ClCadService
{
    public function addOffer($duration, $wage, $offerDate, $interNumber ,$available, $offerDescription, $companyID, $promotionID): bool
    {
        $sql=$this->oPdo->prepare("INSERT INTO Offer(duration, wage, offerDate, internNumber, available, offerDescription, companyID, localityID) SELECT ?, ?, ?, ?, ?, ?, ?, localityID FROM locate WHERE companyID=?;
        INSERT INTO need(promotionID, offerID) VALUES (?, last_insert_id());");
        $sql->bindParam(1, $duration, PDO::PARAM_INT);
        $sql->bindParam(2, $wage, PDO::PARAM_STR);
        $sql->bindParam(3, $offerDate, PDO::PARAM_STR);
        $sql->bindParam(4, $interNumber, PDO::PARAM_INT);
        $sql->bindParam(5, $available, PDO::PARAM_BOOL);
        $sql->bindParam(6, $offerDescription, PDO::PARAM_STR);
        $sql->bindParam(7, $companyID, PDO::PARAM_INT);
        $sql->bindParam(8, $companyID, PDO::PARAM_INT);
        $sql->bindParam(9, $promotionID, PDO::PARAM_INT);

        return $sql->execute();
    }
}