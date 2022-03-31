<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Page de connexion</title>
    <?php
        include 'header.php';
    ?>

</head>



<body>
<?php
include 'navbar.php'
?>
<main>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 offset-lg-4 offset-md-4 offset-sm-0">
                    <form class="border mt-5 p-3 rounded" method="post" action="../controllers/authController.php">
                        <h1 class="mb-4">Connection</h1>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="login" name="login" value="michelpilote@mail.com" placeholder="name@example.com" required>
                            <label for="login">Adresse email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" name="password" value="password123" placeholder="Psw123" required>
                            <label for="login">Mot de passe</label>
                        </div>
                        <?php
                            if(isset($_GET['error'])) {
                                echo '<p class="mt-3 text-danger">Votre compte et/ou mot de passe est incorrect.</p>';
                            }
                        ?>
                        <button class="btn btn-primary" type="submit">Envoyer</button>
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
