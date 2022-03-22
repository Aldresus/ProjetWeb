<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Les stages là</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bd63cdcb8f.js" crossorigin="anonymous"></script>
</head>

<?php
include 'navbar.php'
?>

<!-- Contenu du site -->
<body>
    <div class="container mb-3 mt-5 pt-3" >
        <h1 class="mb-3">Contact</h1>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia metus vel orci blandit, eget commodo libero auctor. Pellentesque tristique libero leo, quis cursus lorem finibus id. In enim nibh, vehicula sit amet rutrum id, dictum sit amet nulla. Nunc ac dolor lacus. Nunc pharetra rhoncus mi imperdiet accumsan. Cras eget nunc magna. Integer sed mauris rutrum libero efficitur semper ac quis nisl. Nullam accumsan dolor fringilla turpis tempor, sed fermentum neque facilisis. Donec consectetur metus quis interdum vulputate. Mauris molestie enim quis arcu sollicitudin eleifend. Maecenas accumsan turpis ex, vel laoreet felis fringilla vitae. Maecenas a dapibus tortor, vitae rhoncus turpis.</p>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6 border rounded p-3">
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
    </div>
</body>

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 mb-0 mt-5 border-top bg-dark text-white fixed-bottom">
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
