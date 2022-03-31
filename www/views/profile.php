<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Profil</title>
    <?php
        include 'header.php';
    ?>

</head>
<body>
<?php
include 'navbar.php';
?>
<!-- Contenu du site -->
<main>
<div>
    <div class="container">
        <div class="row mt-5">

            <div class="col-12">
                <h4 class="text-center mb-2 pb-5"> Information personnelles </h4>
                <?php
                $_POST['part']='infos';
                require '../controllers/profileController.php';
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="container">
                        <div class="row mt-3 g-0">
                            <?php
                                $_POST['part']='buttons';
                                require '../controllers/profileController.php';
                            ?>

                        </div>
                    </div>
                </form>
            </div>
        </div>


                <?php
                    $_POST['part']='offers';
                    require '../controllers/profileController.php';
                ?>





        </div>
    </div>
</main>

<?php
    include 'footer.php';
?>
</body>
</html>