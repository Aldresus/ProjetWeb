<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Ajouter un utilisateur</title>
    <?php
        include 'header.php';
    ?>
    <script src="../Scripts/inscription.js"></script>
</head>


<body>
<?php
include 'navbar.php';
require '../controllers/inscriptionController.php';
?>
<main>
<h1 class="ms-5 mt-5">Inscription :</h1>

<div class="container mb-5 pb-5">
    <div class="row">
        <?php
            if(isset($_GET['success'])){
                echo '<H4 class="text-center text-success">Inscription effectuée</H4>';
            }
        ?>
        <div class="offset-md-1 col-md-10 offset-lg-3 col-lg-6 col-sm-12">
            <form action="../controllers/inscriptionController.php" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nom" placeholder="Dupont" name="lastname" required>
                    <label for="nom">Nom</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="prenom" placeholder="Michelle" name="firstname" required>
                    <label for="prenom">Prénom</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="login" placeholder="michelledupont@mail.com" name="email" required>
                    <label for="login">login</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" placeholder="mot de passe" name="password" required>
                    <label for="password">Mot de passe</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="passwordConfirmation" placeholder="mot de passe" required>
                    <label for="passwordConfirmation">Confirmation du mot de passe</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="role" name="role" required>
                        <option value="">Choisir un rôle</option>
                        <?php
                        foreach (array_keys($roles) as $role) {
                            echo "<option value='${roles[$role]}'>$role</option>";
                        }
                        ?>
                    </select>
                    <label for="role">Role</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="promotion" name="promotion" required>
                        <option value="null">Choisir une promotion</option>
                        <?php
                        foreach (array_keys($promotions) as $promotion) {
                            echo "<option value='".$promotions["$promotion"]['promotionID']."'>$promotion</option>";
                        }
                        ?>
                    </select>
                    <label for="promotion" id="promotionLabel">Promotion</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="center" name="center" required>
                        <option value="">Choisir un centre</option>
                        <?php
                            foreach (array_keys($centers) as $center) {
                                echo "<option value='${centers[$center]}'>$center</option>";
                            }
                        ?>
                    </select>
                    <label for="center">Centre</label>
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
