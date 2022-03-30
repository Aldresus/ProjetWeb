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
    <script src="../Scripts/inscription.js"></script>
</head>

<?php
include 'navbar.php';
require '../controllers/inscriptionController.php';
?>


<body>
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
