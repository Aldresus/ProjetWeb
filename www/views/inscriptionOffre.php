<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Ajouter une offre</title>
    <?php
        include 'header.php';
    ?>
</head>

<body>
<?php
include 'navbar.php';
require '../controllers/offerController.php';
?>
<main>
<h1 class="ms-5 mt-5 mb-5">Création d'une offre :</h1>

<div class="container mb-5 pb-5">
    <div class="row">
        <?php
        if(isset($_GET['success'])){
            echo '<H4 class="text-center text-success">Entreprise ajoutée</H4>';
        }
        ?>
        <div class="offset-md-1 col-md-10 offset-lg-3 col-lg-6 col-sm-12">
            <form method="post" action="<?php
                if(isset($_POST['company'])){
                    echo '../controllers/offerController.php?submit=1">';
                }else{
                    echo 'inscriptionOffre.php">';
                }
                        if(isset($_POST['company'])){

                            echo "<option value='1'>${_POST['company']}</option>";
                        }
                        else{
                            echo '<div class="form-floating mb-3">
                                    <select class="form-select" id="company" name="company" required>';
                            echo '<option value="">Choisir une entreprise</option>';

                            foreach (array_keys($companies) as $company) {
                                echo "<option value='${companies[$company]}'>$company</option>";
                            }
                            echo '</select>
                            <label for="company">Entreprise</label></div>';
                        }
                    if(isset($_POST['company'])){
                        echo "<input id='companyID' name='companyID' type='hidden' value='${_POST['company']}'>
                           <div class='form-floating mb-3'>
                            <input type='number' class='form-control' id='wage' step='0.01' min='0' name='wage' placeholder='3.9' required>
                            <label for='wage'>Gratification</label>
                        </div>
                        <div class='form-floating mb-3'>
                            <input type='date' class='form-control' id='offerDate' name='offerDate' required>
                            <label for='offerDate'>Date de début</label>
                        </div>
                            <div class='form-floating mb-3'>
                            <textarea class='form-control' id='offerDescription' placeholder='Votre message' name='offerDescription' maxlength='400'></textarea>
                            <label for='offerDescription'>Description du stage</label>
                        </div>
                        <div class='form-floating mb-3'>
                            <input type='number' class='form-control' id='internNumber' name='internNumber' min='1' placeholder='1' required>
                            <label for='internNumber'>Places disponible</label>
                        </div>
                        <div class='form-floating mb-3'>
                            <input type='number' class='form-control' id='duration' name='duration' min='75' placeholder='0' required>
                            <label for='duration'>Durée du stage (en j)</label>
                        </div>";

                        echo "<div class='form-floating mb-3'>
                                <select class='form-select' id='promotion' name='promotion' required>
                                <option value='null'>Choisir une promotion</option>";
                        foreach (array_keys($promotions) as $promotion) {
                            echo "<option value='".$promotions["$promotion"]['promotionID']."'>$promotion</option>";
                        }
                        echo "</select>
                            <label for='promotion'>Promotion</label>
                            </div>";
                    }

                ?>

                <button type="submit" class="btn btn-warning" name="submit" value="1">Envoyer</button>

            </form>
        </div>
    </div>
</div>
</main>


<?php
    include 'footer.php';
?>
</body>
</html>
