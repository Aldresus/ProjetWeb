<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bd63cdcb8f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/index.css">
</head>

<?php
include 'navbar.php';
?>


<body>
<h1 class="ms-5 mt-5">Inscription :</h1>

<div class=" container">
    <div class="row">
        <div class="col-6">
            <form>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nom" placeholder="Dupont">
                    <label for="nom">Nom</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="prenom" placeholder="Michelle">
                    <label for="prenom">Prénom</label>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="promotion">A</span>
                    <input type="number" class="form-control" placeholder="promotion" aria-label="promotion" aria-describedby="promotion" min="1" max="5">
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="centre">
                        <option>Choisir un centre</option>
                        <option>Strasbourg</option>
                        <option>Toulouse</option>
                        <option>Nanterre</option>
                        <option>Pau</option>
                    </select>
                    <label for="centre">Centre</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="role">
                        <option>Choisir un rôle</option>
                        <option>Etudiant</option>
                        <option>Pilote</option>
                        <option>Délégué</option>
                        <option>Administrateur</option>
                    </select>
                    <label for="role">Role</label>
                </div>
                <button type="submit" class="btn btn-warning">Envoyer</button>

            </form>
        </div>
        <div class="col-2 p-0 text-center">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="perm2">
                <label class="form-check-label" for="perm2">
                    Default checkbox
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="perm3">
                <label class="form-check-label" for="perm3">
                    Default checkbox
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="perm4">
                <label class="form-check-label" for="perm4">
                    Default checkbox
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="perm5">
                <label class="form-check-label" for="perm5">
                    Default checkbox
                </label>
            </div>
        </div>

        <div class="col-2 p-0 text-center">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="perm6">
                <label class="form-check-label" for="perm6">
                    Default checkbox
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="perm7">
                <label class="form-check-label" for="perm7">
                    Default checkbox
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="perm8">
                <label class="form-check-label" for="perm8">
                    Default checkbox
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="perm1">
                <label class="form-check-label" for="perm1">
                    Default checkbox
                </label>
            </div>
        </div>

        <div class="col-2 p-0 text-center">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="perm1">
                <label class="form-check-label" for="perm1">
                    Default checkbox
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="perm1">
                <label class="form-check-label" for="perm1">
                    Default checkbox
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="perm1">
                <label class="form-check-label" for="perm1">
                    Default checkbox
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="perm1">
                <label class="form-check-label" for="perm1">
                    Default checkbox
                </label>
            </div>
        </div>
    </div>
</div>
</body>


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
