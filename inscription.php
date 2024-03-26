<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="bootstrap.css" rel="stylesheet">
    <link href="style/styleinscription.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="custom.css"> -->
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <img src="img/logo.png" alt="logo" style="width:50px; height:auto" />
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="accueil.php">Accueil</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#">Nos Cours</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#">Tarifs</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#">Contacts</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex">
                    <a href="inscription.php">
                        <button class="btn" href="inscription.php">Se connecter</button>
                    </a>
                    <a href="inscription.php">
                        <button class="btn btn-primary rounded-pill">S'inscrire</button>
                    </a>
                </div>
            </div>
        </nav>
    </header>


    <section>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center h-100 shadow-lg p-3 mb-5 bg-body rounded">

                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">

                            <div class="col-xl-6 d-flex align-items-center">
                                <div class="card-body p-md-5 text-black">
                                    <img src="img/Group 1.png" />
                                    <h1 class=>S'inscrire</h1>
                                    <p class="mb-5 text-muted">Rejoignez une communauté de +3000 couturiers.</p>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="formNom"><strong>Nom</strong></label>
                                                <input type="text" id="formNom" placeholder="Entrez votre nom." class="form-control form-control-lg rounded-pill" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="formPrenom"><strong>Prenom</strong></label>
                                                <input type="text" id="formPrenom" placeholder="Entrez votre prénom" class="form-control form-control-lg rounded-pill" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="formMail"><strong>Address email</strong></label>
                                        <input type="text" id="formMail" placeholder="Entrez votre adresse email." class="form-control form-control-lg rounded-pill" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="formMDP"><strong>Mot De Passe</strong></label>
                                        <input type="password" id="formMDP" placeholder="Entrez un mot de passe sécurisé" class="form-control form-control-lg rounded-pill" />
                                    </div>

                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="formCGU">J'accepte les termes et conditions d'utilisation.</label>
                                    </div>

                                    <div class="d-flex justify-content-end pt-3 mb-1">
                                        <button type="button" class="btn btn-primary btn-block w-100 rounded-pill">Submit form</button>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <p>Vous avez déjà un compte?</p>
                                        <a href="connection.php">Se connecter</a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="img/Inscription.png" alt="Inscription" class="img-fluid float-end" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



















    <div class="container-fluid">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-body-secondary">© 2024 Company, Inc</p>
            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="accueil.php" class="nav-link px-2 text-body-secondary">Accueil</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Nos Cours</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Tarifs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Contacts</a></li>
            </ul>
        </footer>
    </div>
</body>

</html>