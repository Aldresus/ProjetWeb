<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

        <a class="navbar-brand" href="index.php">
            <img src="../assets/staj.png" alt="logo" height="24">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li><a href="entreprise.php" class="nav-link px-2 text-light">Entreprises</a></li>
                <li><a href="Contact.php" class="nav-link px-2 text-light">Contact</a></li>
                <li><a href="aPropos.php" class="nav-link px-2 text-light">À propos</a></li>
            </ul>
            <?php
            if(!isset($_COOKIE)){
                echo'<a href="connection.php" class="btn btn-warning text-dark me-2">Connection</a>';
            }
            else
            {
                echo'<i class="fa-solid fa-user-astronaut fa-xl btn btn-warning text-dark px-3 py-3"></i>';
            }
            ?>
        </div>
    </div>
</nav>
