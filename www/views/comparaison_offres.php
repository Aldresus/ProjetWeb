<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Les stages là</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/bd63cdcb8f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="index.css">
</head>
<body>
<header class="p-3 bg-dark text-white">
  <?php
  include 'navbar.php'

  ?>
</header>
<!-- Contenu du site -->
<main>
  <div class="container">
    <div class="row">
      <h4>Comparaison des offres sélectionnées</h4>
      <div class="col-12 text-center">
        <table class="table table-striped">
          <tr>
            <th></th>
            <th>Offre 1</th>
            <th>Offre 2</th>
            <th>Offre 3</th>
            <th>Offre 4</th>
            <th>Offre 5</th>
            <th>Offre 6</th>
          </tr>
          <tr>
            <th>Localité</th>
          </tr>
          <tr>
            <th>Compétences</th>
          </tr>
          <tr>
            <th>Entreprises</th>
          </tr>
          <tr>
            <th>Promotion concernées</th>
          </tr>
          <tr>
            <th>Durée du stage</th>
          </tr>
          <tr>
            <th>Base de rémunération</th>
          </tr>
          <tr>
            <th>Date de l'offre</th>
          </tr>
          <tr>
            <th>Nombre de places offertes</th>
          </tr>
        </table>
      </div>
    </div>
  </div>
</main>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 mb-0 mt-5 border-top bg-dark text-white fixed-bottom">
  <div class="col-md-4 d-flex align-items-center ms-4">
    <span class="text-muted">&copy; 2021 le stage là</span>
  </div>

  <ul class="nav col-md-4 justify-content-end list-unstyled d-flex me-4 ">
    <li class="ms-3"><a class="text-muted" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa-brands fa-twitter"></i></a></li>
    <li class="ms-3"><a class="text-muted" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa-brands fa-instagram"></i></a></li>
    <li class="ms-3"><a class="text-muted" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa-brands fa-facebook-f"></i></a></li>
  </ul>
</footer>
</body>
</html>