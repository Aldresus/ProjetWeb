<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Liste des offres</title>
    <?php
        include 'header.php';
    ?>
</head>
<body>
<?php
include 'navbar.php';
?>
<main>
<div class="container mb-5 mt-5">
    <div class="row">
        <?php
        $_POST['action']="getOffers";
        require '../controllers/offerController.php';
        ?>
    </div>
    <div class='row text-center fixed-bottom mb-5'>
        <div class='col-4'>
            <?php
            $next= $page + 1;

            $previous= $page - 1;
            if ($page > 1) {
                echo "
                <a href='offers.php?page=$previous'><i class='fa-solid fa-angles-left btn btn-warning'></i></a>";
            }
            echo "</div>
            <div class='col-4'>
                <p>$page</p>
            </div>
            <div class='col-4'>
                <a href='offers.php?page=$next'><i class='fa-solid fa-angles-right btn btn-warning'></i></a>";
            ?>
        </div>
    </div>
</div>
</main>
<?php
include 'footer.php';
?>
</body>
</html>