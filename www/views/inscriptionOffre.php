<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bd63cdcb8f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/index.css">
</head>

<?php
include 'navbar.php';
require '../controllers/offerController.php';
?>


<body>
<h1 class="ms-5 mt-5 mb-5">Création d'une offre :</h1>

<div class="container mb-5">
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
                    echo '">';
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



<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 mb-0 mt-5 border-top bg-dark text-white">
    <div class="col-md-4 d-flex align-items-center ms-4">
        <span class="text-muted">&copy; 2021 le stage là</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex me-4">
        <li class="ms-3"><a class="text-muted" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa-brands fa-twitter"></i></a></li>
        <li class="ms-3"><a class="text-muted" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa-brands fa-instagram"></i></a></li>
        <li class="ms-3"><a class="text-muted" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa-brands fa-facebook-f"></i></a></li>
    </ul>
</footer>
</body>
</html>
