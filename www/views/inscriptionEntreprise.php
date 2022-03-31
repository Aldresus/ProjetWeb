<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Ajouter une entreprise</title>
    <?php
        include 'header.php';
    ?>
    <script src="../Scripts/inscriptionEntreprise.js"></script>
</head>


<body>
<?php
include 'navbar.php';
?>
<main>
    <?php
        $_POST['requiredPerm']=3;
        require_once '../controllers/verifierController.php';
    ?>
<h1 class="ms-5 mt-5 mb-5">Ajout d'une entreprise :</h1>

<div class="container mb-5 pb-5">
    <div class="row">
        <?php
            if(isset($_GET['success'])){
                echo '<H4 class="text-center text-success">Entreprise ajoutée</H4>';
            }
        ?>
        <div class="offset-md-1 col-md-10 offset-lg-3 col-lg-6 col-sm-12">
            <form action="../controllers/entrepriseController.php" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" placeholder="Entreprise" name="name" required>
                    <label for="name">Entreprise</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="activity" placeholder="activity" name="activity" required>
                    <label for="activity">Activité</label>
                </div>
                <div class="mb-3">
                    <p id="confianceLabel">Indice de confiance : 0%</p>
                    <input type="range" class="form-range" min="0" max="10" step="1" value="0" id="confiance" name="confiance">

                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" min="0" id="roadNumber" placeholder="12" name="roadNumber" required>
                    <label for="roadNumber">Numéro de rue</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="address" placeholder="rue des saucisses" name="address" required>
                    <label for="address">Adresse</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="postalCode" placeholder="Code postal" name="postalCode" required>
                    <label for="postalCode">Code postal</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="city" placeholder="Strasbourg" name="city" required>
                    <label for="city">Ville</label>
                </div>
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
