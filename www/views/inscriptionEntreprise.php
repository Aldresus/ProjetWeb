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
    <script src="../Scripts/inscriptionEntreprise.js"></script>
</head>

<?php
include 'navbar.php';
?>


<body>
<h1 class="ms-5 mt-5 mb-5">Ajout d'une entreprise :</h1>

<div class="container mb-5">
    <div class="row">
        <?php
            if(isset($_GET['success'])){
                echo '<H4 class="text-center text-success">Entrprise ajoutée</H4>';
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
