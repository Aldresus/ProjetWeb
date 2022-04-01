<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Assignation de droit</title>
    <?php
    include 'header.php';
    ?>
</head>

<?php
include 'navbar.php'
?>
<!-- CONTENU -->
<main>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3 bg-light border">
            <form>
                <p class="mt-5 mb-5 h1">Assignation de droits</p>
                <div class="p-2 form-group">
                    <label for="nom">Nom :</label><br/>
                    <input type="text" id="nom" name="Nom" class="form-control" placeholder="Entrer un nom"/>
                </div>
                <div class="p-2 form-group" style=>
                    <label for="prénom">Prénom :</label><br/>
                    <input type="text" id="prénom" name="Prénom" class="form-control" placeholder="Entrer un prénom"/><br/>
                </div>

                <div class="mb-4 col-12">
                    <button class="btn btn-primary" type="submit">Rechercher</button>
                </div>

                <!-- Input grp 1 -->
                <div class="container center_div">

                    <div class="input-group mb-3">

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Droit 1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Droit 2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Droit 3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Droit 4</label>
                        </div>
                    </div>
                </div>

                <!-- Input grp 2 -->
                <div class="container center_div">

                    <div class="input-group mb-3">

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Droit 5</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Droit 6</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Droit 7</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Droit 8</label>
                        </div>
                    </div>
                </div>
                <div class="mb-4 col-12">
                    <button class="btn btn-primary" type="submit">Assigner</button>
                </div>
            </form>
        </div>
    </div>
</div>
</main>
<!-- CONTENU -->
<?php
include 'footer.php';
?>
</body>
</html>