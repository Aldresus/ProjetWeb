<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Contact</title>
    <?php
    include 'header.php';
    ?>
</head>

<body>
<?php
include 'navbar.php'
?>

<!-- Contenu du site -->
<main>
    <div class="container mb-3 mt-5 pt-3" >
        <h1 class="mb-3">Contact</h1>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia metus vel orci blandit, eget commodo libero auctor. Pellentesque tristique libero leo, quis cursus lorem finibus id. In enim nibh, vehicula sit amet rutrum id, dictum sit amet nulla. Nunc ac dolor lacus. Nunc pharetra rhoncus mi imperdiet accumsan. Cras eget nunc magna. Integer sed mauris rutrum libero efficitur semper ac quis nisl. Nullam accumsan dolor fringilla turpis tempor, sed fermentum neque facilisis. Donec consectetur metus quis interdum vulputate. Mauris molestie enim quis arcu sollicitudin eleifend. Maecenas accumsan turpis ex, vel laoreet felis fringilla vitae. Maecenas a dapibus tortor, vitae rhoncus turpis.</p>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6 border rounded border-warning p-3">
                <form class="">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="email" placeholder="xyz@exemple.fr">
                        <label for="email">Adresse email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="nom" class="form-control" id="Nom" placeholder="Dupont" autocomplete="name">
                        <label for="Nom">Nom complet</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="textarea" placeholder="Votre message" maxlength="400"></textarea>
                        <label for="textarea">Texte</label>

                    </div>


                    <button type="submit" class="btn btn-warning">Envoyer</button>
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
