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

    public function getOffers(int $perPage, int $page): array
    {
        $start=(($page-1)*$perPage);
        $sql=$this->oPdo->prepare("SELECT Offer.offerID, Offer.wage, Offer.offerDate, Offer.internNumber, Offer.available, Offer.offerDescription, Company.companyName, Company.companyActivity, Company.reviewPilot, Localities.postalCode, Localities.roadName, Localities.roadNumber, Cities.cityName, Promotions.promotion FROM Offer 
            JOIN need ON Offer.offerID=need.offerID
            JOIN Company ON Company.companyID=Offer.companyID
            JOIN locate ON locate.companyID=Company.companyID
            JOIN Localities ON Localities.localityID=locate.localityID
            JOIN Cities ON Cities.cityID=Localities.cityID
            JOIN Promotions ON Promotions.promotionID=need.promotionID LIMIT ?, ?;");
        $sql->bindParam(1, $start, PDO::PARAM_INT);
        $sql->bindParam(2, $perPage, PDO::PARAM_INT);
        $sql->execute();

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOffersFromUser(int $perPage, int $page, int $userID): array
    {
        $start=(($page-1)*$perPage);
        $sql=$this->oPdo->prepare("SELECT Offer.offerID, Offer.wage, Offer.offerDate, Offer.internNumber, Offer.available, Offer.offerDescription, Company.companyName, Company.companyActivity, Company.reviewPilot, Localities.postalCode, Localities.roadName, Localities.roadNumber, Cities.cityName, Promotions.promotion FROM Offer 
            JOIN need ON Offer.offerID=need.offerID 
            JOIN Company ON Company.companyID=Offer.companyID 
            JOIN locate ON locate.companyID=Company.companyID 
            JOIN Localities ON Localities.localityID=locate.localityID 
            JOIN Cities ON Cities.cityID=Localities.cityID 
            JOIN Promotions ON Promotions.promotionID=need.promotionID 
            WHERE Promotions.promotionID=(
            SELECT Promotions.promotionID FROM Promotions 
            JOIN Users ON Users.promotionID=Promotions.promotionID 
            WHERE Users.userID=?) LIMIT ?, ?;");
        $sql->bindParam(1, $userID, PDO::PARAM_INT);
        $sql->bindParam(2, $start, PDO::PARAM_INT);
        $sql->bindParam(3, $perPage, PDO::PARAM_INT);
        $sql->execute();

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

}