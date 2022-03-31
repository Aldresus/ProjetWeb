<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Les stages là</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bd63cdcb8f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/index.css">

</head>

<?php
include 'navbar.php';
print_r($_COOKIE);
?>

<body>
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
<div class="container">
    <H4 class="text-center mb-4 pb-5 text-decoration-underline">Découvrez nos offres les plus populaires&#8239:</H4>
    <div class="row">
        <?php
            require '../controllers/indexController.php';
        ?>
    </div>
</div>
</body>

<!-- fin du contenu -->


<!-- Bas de page -->
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
</html>
