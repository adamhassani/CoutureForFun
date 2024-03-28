<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="bootstrap.css" rel="stylesheet">
    <link href="css-accueil/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/logo1.png">

</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="container mw-100 bg-primary">
        <div class="row d-flex">
            <div class="col-xl-6 my-auto">
                <div class="d-flex justify-content-center">
                    <div class="border">
                        <img src="img/pointille.png" class="img-fluid mw-100 mb-5"/>
                        <h1 class="mt-5"><strong>Couture & Apprentissage :</br>Fournitures et Cours Experts</strong></h1>
                        <p class="mt-5">Découvrez notre sélection de fournitures et cours experts pour exprimer votre créativité à travers la couture.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 d-none d-xl-block">
                <img src="img/accueil.png" alt="accueil" class="img-responsive" id="presentation" />
            </div>
        </div>
    </div>

    <!-- <div class="container-fluid bg-primary" id="firstContainer">
    
        <div class="row">
            <div class="col-lg-6">
                <div class="container">
                    <img src="img/pointillé.png" class="vecteur rounded mx-auto d-block" />
                </div>
                <div class="container">
                    <h1>Couture & Apprentissage :<br>
                        Fournitures et Cours Experts
                        </h>
                        <div class="d-flex justify-content-center">
                            <p class="paragraphe">Découvrez notre sélection de fournitures et cours experts<br> pour exprimer votre créativité à travers la couture.</p>
                        </div>
                        <div class="d-flex justify-content-center bouttonSouscrire">
                            <button class="btn btn-blue rounded-pill">Souscrire à cette offre</button>
                        </div>

                </div>
                <div class="container">
                    <img src="img/pointillé.png" class="vecteur rounded mx-auto d-block" />
                </div>
            </div>
            <div class="col-xl-6 d-none d-xl-block">
                <img src="img/vetements.png" class="float-end" id="image-presentation" />
            </div>
        </div>
    </div> -->


    <div class="container my-5">
        <div class="row ">
            <h6 class="d-flex justify-content-center align-items-center mt-5 mb-2">NOS CLIENTS</h6>
        </div>
        <div class="row">
            <h2 class="d-flex justify-content-center">Ce qu'ils pensent de nous.</h2>
        </div>
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col d-flex">
                <div class="card shadow-lg p-3 mb-5 mt-5 mx-3 bg-body rounded">
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare felis ac magna malesuada congue. Phasellus rutrum ac lacus ut suscipit. Ut sed convallis nunc.”</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <img class="avatar ms-0" alt="avatar" src="img/pdp.jpg">
                        </div>
                        <div class="col-sm-8">
                            <p>John Doe</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col d-flex">
                <div class="card shadow-lg p-3 mb-5 mt-5 mx-3 bg-body rounded">
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare felis ac magna malesuada congue. Phasellus rutrum ac lacus ut suscipit. Ut sed convallis nunc.”</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <img class="avatar ms-0" alt="avatar" src="img/pdp.jpg">
                        </div>
                        <div class="col-sm-8">
                            <p>John Doe</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col d-flex">
                <div class="card shadow-lg p-3 mb-5 mt-5 mx-3 bg-body rounded">
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare felis ac magna malesuada congue. Phasellus rutrum ac lacus ut suscipit. Ut sed convallis nunc.”</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <img class="avatar ms-0" alt="avatar" src="img/pdp.jpg">
                        </div>
                        <div class="col-sm-8">
                            <p>John Doe</p>
                        </div>
                    </div>
                </div>
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