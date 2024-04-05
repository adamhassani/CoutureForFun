<header>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="img/logo1.png" alt="logo" style="width:50px; height:auto" class="ms-5"/>
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="accueil.php">Accueil</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="noscours.php">Nos Cours</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="devis.php">Devis</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="contact.php">Contacts</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex me-5">
                <?php 
                    // Check if the user is logged in
                    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                        // If logged in, display the user's name and a logout button
                        echo '<button class="btn">' . $_SESSION['username'] . '</button>';
                        echo '<a href="logout.php"><button class="btn btn-blue rounded-pill">Déconnexion</button></a>';
                    } else {
                        // If not logged in  display login and signup buttons
                        echo '<a href="connection.php"><button class="btn">Se connecter</button></a>';
                        echo '<a href="inscription.php"><button class="btn btn-blue rounded-pill">S\'inscrire</button></a>';
                    }
                ?>
            </div>
        </div>
    </nav>
</header>
