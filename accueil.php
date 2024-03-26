<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

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

    <div class="container-fluid" id="firstContainer">
        <div class="row">
            <div class="col-lg-6">
                <div class="container">
                    <img src="img/pointillé.png" class="vecteur rounded mx-auto d-block" />
                </div>
                <div class="container">
                    <h2>Couture & Apprentissage :<br>
                        Fournitures et Cours Experts
                    </h2>
                    <div class="d-flex justify-content-center">
                        <p class="paragraphe">Découvrez notre sélection de fournitures et cours experts<br> pour exprimer votre créativité à travers la couture.</p>
                    </div>
                    <div class="d-flex justify-content-center bouttonSouscrire">
                        <button class="btn btn-dark rounded-pill">Souscrire à cette offre</button>
                    </div>

                </div>
                <div class="container">
                    <img src="img/pointillé.png" class="vecteur rounded mx-auto d-block" />
                </div>
            </div>
            <div class="col-lg-6">
                <img src="img/vetements.png" class="float-end" id="image-presentation"/>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center">
        <br><br>
        <p>NOS CLIENTS</p>
        <h3>Ce qu'ils pensent de nous</h3>
        <div class="row justify-content-center">
            <div class="paragrapheClients col-lg-2 shadow p-3 mb-5 bg-white rounded">
                <p>htrhuthut tjiouthhugituith jgriuhigthgui thuguhihughug hugthuighuigthuigt gthuighuithugthug gtghuithughugh uhithgh</p>
            </div>
            <div class="paragrapheClients col-lg-2 shadow p-3 mb-5 bg-white rounded">
                <p>hirttuti tjigtiuuti tiutuituut tuiru ru urtuyio oip"ép "éou u'o u 'o u'u "'op&^gijg ero ui </p>
            </div>
            <div class="paragrapheClients col-lg-2 shadow p-3 mb-5 bg-white rounded">
                <p>tiotiorjitjo itjoitoit triotri triotiotioi hhhhhhhhhh hrhrhhrhr rhrhrhtht hrhrhh h hrhrr hh rh hrh hrhhrh hh rh hr hhrhr </p>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center" id="troisiemeContainer">
        <br><br>
        <p>SERVICES</p>
        <h3>Des offres adaptées à vous</h3>
        <div class="row justify-content-center">
            <div class="col-lg-3 services">
                <img class="mx-auto d-block img" src="img/coutureDébutant.png" />
                <div class="p-3 mb-5 bg-white">
                    <h3>Couture pour débutants</h3>
                    <button class="btn btn-primary rounded-pill">En savoir Plus</button>
                </div>
            </div>
            <div class="col-lg-3">
                <img class="mx-auto d-block img" src="img/couturePatrons.png" />
                <div class="p-3 mb-5 bg-white">
                    <h3>Couture avec patrons</h3>
                    <button class="btn btn-primary rounded-pill">En savoir Plus</button>
                </div>
            </div>
            <div class="col-lg-3">
                <img class="mx-auto d-block img" src="img/coutureAvancée.png" />
                <div class="p-3 mb-5 bg-white">
                    <h3>Couture avancée</h3>
                    <button class="btn btn-primary rounded-pill">En savoir Plus</button>
                </div>
            </div>
        </div>
    </div>
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
</body>

</html>