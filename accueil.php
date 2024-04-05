<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Couture For Fun</title>
    <link href="bootstrap.css" rel="stylesheet">
    <link href="css-accueil/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/logo1.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container-fluid bg-primary">
        <div class="row align-items-center">
            <div class="col-12 col-xl-6 px-5">
                <div class="d-flex justify-content-center">
                    <div class="w-100">
                        <img src="img/pointille.png" class="img-fluid mb-5 pe-5 d-none d-xl-block w-100" />
                        <h1 class="mt-5"><strong>Couture & Apprentissage :</br>Fournitures et Cours Experts</strong></h1>
                        <p class="my-5 me-5 text-muted fs-3">Découvrez notre sélection de fournitures et cours experts pour exprimer votre créativité à travers la couture.</p>
                        <div class="d-grid gap-2 col-5 mx-auto">
                            <a class="btn btn-secondary btn-lg rounded-pill my-2" href="#">Souscrire à cette offre</a>
                        </div>
                        <img src="img/pointille.png" class="img-fluid mt-5 pe-5 d-none d-xl-block w-100" />
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-none d-xl-block">
                <img src="img/accueil.png" alt="accueil" class="img-fluid" id="presentation" />
            </div>
        </div>
    </div>


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
    <?php include 'footer.php'; ?>
</body>

</html>