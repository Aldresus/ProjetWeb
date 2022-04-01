<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Évaluer une entreprise</title>
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
            <div class="col-md-6 offset-3 bg-light border">
                <form>
                    <div class="p-1">
                        <div class="bs-example">
                            <h1>Evaluer une entreprise</h1>
                            <p>Selectionner une entreprise :</p>
                            <input type="text" class="typeahead tt-query" autocomplete="off" spellcheck="false">
                        </div>
                    </div>

                    <div class="p-3">
                        <p>Avez-vous effectuer un stage dans cette entreprise ?</p>
                        <input type="radio" id="html" name="fav_language" value="oui">
                        <label for="html">Oui</label><br>
                        <input type="radio" id="css" name="fav_language" value="non">
                        <label for="css">Non</label><br>
                    </div>

                    <div class="p-3">
                        <p class="mb-4">Si oui, indiquez la période du stage:</p>

                        <label for="start">Date de début:</label>
                        <input type="date" id="start" name="trip-start"
                               value="2022-03-22"
                               min="1960-01-01" max="2022-03-21">
                    </div>

                    <div class="p-3">
                        <label for="start">Date de fin:</label>

                        <input type="date" id="end" name="trip-start"
                               value="2022-03-22"
                               min="1960-01-01" max="2022-03-21">
                    </div>
                    <div>
                        <!--div optionnelle pour contenir le tout-->
                        <div style="display: flex;justify-content:center;margin-top : 10px;width:100px;">

                            <!--div en arrière-plan qui s'allongera en fonction de la valeur de $value1-->
                            <div id="value">

                                <!--div qui contient les étoiles à changer-->
                                <div id="glob" >
                                    <img id="tde_1" src="images/star.png" class="tde"/>
                                    <img id="tde_2" src="images/star.png" class="tde"/>
                                    <img id="tde_3" src="images/star.png" class="tde"/>
                                    <img id="tde_4" src="images/star.png" class="tde"/>
                                    <img id="tde_5" src="images/star.png" class="tde"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4"><textarea>Commentaire</textarea></div>

                    <div class="mt-4 mb-4 col-12">
                        <button class="btn btn-primary" type="submit">Envoyer</button>
                        <button class="btn btn-primary" type="reset">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
    <?php
    include 'footer.php'
    ?>
</body>
</html>