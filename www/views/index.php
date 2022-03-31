<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Cesi Staj</title>
    <?php
        include 'header.php';
    ?>

</head>

<body>
<?php
include 'navbar.php';
?>
<main>
<!-- Contenu du site -->
<div class="bg-dark text-light">
<div class="container border-bottom mb-5 pt-5 pb-5">
    <h1 class="mb-3">CESI Staj</h1>
    <div class="row">

    <p class="col-md-6 col-lg-6 col-sm-12">
        <span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia metus vel orci blandit, eget commodo libero auctor. Pellentesque tristique libero leo, quis cursus lorem finibus id. In enim nibh, vehicula sit amet rutrum id, dictum sit amet nulla. Nunc ac dolor lacus. Nunc pharetra rhoncus mi imperdiet accumsan. Cras eget nunc magna. Integer sed mauris rutrum libero efficitur semper ac quis nisl. Nullam accumsan dolor fringilla turpis tempor, sed fermentum neque facilisis.
        </span>
    </p>

    <p class="col-md-6 col-lg-6 col-sm-12">
        <span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia metus vel orci blandit, eget commodo libero auctor. Pellentesque tristique libero leo, quis cursus lorem finibus id. In enim nibh, vehicula sit amet rutrum id, dictum sit amet nulla. Nunc ac dolor lacus. Nunc pharetra rhoncus mi imperdiet accumsan. Cras eget nunc magna. Integer sed mauris rutrum libero efficitur semper ac quis nisl. Nullam accumsan dolor fringilla turpis tempor, sed fermentum neque facilisis.
        </span>
    </p>
    </div>
</div>
</div>
<div class="container mb-5">
    <H4 class="text-center mb-4 pb-5 text-decoration-underline">Découvrez nos offres les plus populaires :</H4>
    <div class="row">
        <?php
            require '../controllers/indexController.php';
        ?>
    </div>
</div>
</main>

<!-- Bas de page -->
<?php
include 'footer.php';
?>
</body>
</html>
