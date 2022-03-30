<?php
    $bdd = new PDO('mysql:host=localhost;dbname=projet_web;','root','');
    $allusers = $bdd->query('SELECT * FROM users');
    if(isset($_GET['s']) AND !empty($_GET['s'])){
        $recherche=htmlspecialchars($_GET['s']); //l'utilisateur ne pourra pas rentrer de code html
        $allusers = $bdd->query('SELECT firstName FROM users WHERE login LIKE "%'.$recherche.'%"');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
        <meta charset="utf-8">
        <link href="/chemin-vers-fontawesome/css/all.css" rel="stylesheet">
    </head>
    <body>
        <form method="GET">
            <input type="search" name="s" placeholder="Rechercher un utilisateur">
            <input type ="submit" name="envoyer">
        </form>
        <section class="afficher_utilisateur">
            <?php
                if($allusers->rowCount()>0){
                    while($users = $allusers->fetch()){
                        ?>
                        <p><?= $users['firstName']; ?></p>
                        <?php
                    }
                }else{
                    ?>
                    <p>Aucun utilisateur</p>
                    <?php
                }
            ?>
        </section>
    </body>
</html>