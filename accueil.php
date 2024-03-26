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

            <div class="col-lg-7">
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
                        <button class="btn btn-dark">Souscrire à cette offre</button>
                    </div>
                </div>
                
                <div class="container">
                    <img src="img/pointillé.png" class="vecteur rounded mx-auto d-block" />
                </div>
            </div>

            <div class="col-lg-4">
                <img src="img/vetements.png" id="image-presentation"/>
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
            <div class="col-lg-3 div">
                <img class="mx-auto d-block img" src="img/coutureDébutant.png" />
                <h3 class="p-3 mb-5 bg-white">Couture pour débutants</h3>
                <button class="btn btn-primary">En savoir Plus</button>
            </div>
            <div class="col-lg-3">
                <img class="mx-auto d-block img" src="img/couturePatrons.png" />
                <h3 class="p-3 mb-5 bg-white">Couture avec patrons</h3>
                <button class="btn btn-primary">En savoir Plus</button>
            </div>
            <div class="col-lg-3">
                <img class="mx-auto d-block img" src="img/coutureAvancée.png" />
                <h3 class="p-3 mb-5 bg-white">Couture avancée</h3>
                <button class="btn btn-primary">En savoir Plus</button>
            </div>
        </div>
    </div>
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">

        <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <p class="text-body-secondary">© 2024</p>
        </div>

        <div class="col mb-3">

        </div>

        <div class="col mb-3">
            <h5>LearnMore</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Environment</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Jobs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Privaty Policy</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Contact Us</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Contact Us</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Reservation : 12-34-56-78-90</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Accueil : 09-87-65-43-21</a></li>
            </ul>
        </div>
        <div class="col mb-3">
            <h5>Social</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>