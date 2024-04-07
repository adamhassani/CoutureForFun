<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Couture For Fun</title>
    <link href="../bootstrap.css" rel="stylesheet">
    <link href="../css-accueil/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../img/logo1.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include '../navigation/navbar.php'; ?>
    <div class="container-fluid bg-primary">
        <div class="row align-items-center">
            <div class="col-12 col-xl-6 px-5">
                <div class="d-flex justify-content-center">
                    <div class="w-100">
                        <img src="../img/pointille.png" class="img-fluid mb-5 pe-5 d-none d-xl-block w-100" />
                        <h1 class="mt-5"><strong>Couture & Apprentissage :</br>Fournitures et Cours Experts</strong></h1>
                        <p class="my-5 me-5 text-muted fs-3">Découvrez notre sélection de fournitures et cours experts pour exprimer votre créativité à travers la couture.</p>
                        <div class="d-grid gap-2 col-xl-6 mx-auto mb-2">
                            <a class="btn btn-secondary btn-lg rounded-pill my-2" href="../cours/noscours.php">Souscrire à cette offre</a>
                        </div>
                        <img src="../img/pointille.png" class="img-fluid mt-5 pe-5 d-none d-xl-block w-100" />
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-none d-xl-block">
                <img src="../img/accueil.png" alt="accueil" class="img-fluid" id="presentation" />
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
                <div class="card-body shadow-lg p-4 m-5 bg-body rounded">
                    <p>“J'ai trouvé les cours de couture en ligne sur le site Couture For Fun très utile pour me perfectionner dans ma couture. Les cours sont claires et détaillées, et j'ai pu apprendre beaucoup de nouvelles techniques.”</p>
                    <div class="row">

                        <div class="col-sm-8">
                            <p><strong>Charlotte</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col d-flex">
                <div class="card-body shadow-lg p-4 m-5 bg-body rounded">
                    <p>“J'ai été très satisfait de la formation en ligne de Couture For Fun. Les cours sont structurés et bien organisés, ce qui a permis à ma femme et à moi de travailler ensemble sur nos projets de couture.”</p>
                    <div class="row">

                        <div class="col-sm-8">
                            <p><strong>Thomas</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col d-flex">
                <div class="card-body shadow-lg p-4 m-5 bg-body rounded">
                    <p>“Les cours de Couture For Fun sont parfaits pour les débutants en couture. Ils sont accessibles et détaillés, ce qui a permis à mes amis et à moi de découvrir de nouvelles techniques et de progresser dans notre apprentissage.”</p>
                    <div class="row">
                        <div class="col-sm-8">
                            <p><strong>Amelie</strong></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>




    </div>
    <div class="container-fluid bg-primary pt-xl-5">
        <div class="row ">
            <h6 class="d-flex justify-content-center align-items-center mt-5 mb-2">SERVICES</h6>
        </div>
        <div class="row">
            <h2 class="d-flex justify-content-center">Des offres adaptées à vous.</h2>
        </div>
        <div class="row d-flex justify-content-center align-items-center ">

            <div class="col d-flex">
                <div class="card-body shadow-lg px-0 m-5 bg-body rounded">
                    <img class="card-img-top" src="../img/debutantsAccueil.png" />
                    <h3 class="text-center mx-2 my-3">Couture pour débutants</h3>
                    <div class="d-grip gap-2 mt-5 mb-3 px-5">
                        <a href="../cours/noscours.php"><button type="submit" class="btn btn-blue btn-block w-100 rounded-pill">En savoir Plus</button></a>
                    </div>
                </div>
            </div>

            <div class="col d-flex">
                <div class="card-body shadow-lg px-0 m-5 bg-body rounded">
                    <img class="card-img-top" src="../img/patronsAccueil.png" />
                    <h3 class="text-center mx-2 my-3">Couture avec patrons</h3>
                    <div class="d-grip gap-2 mt-5 mb-3 px-5">
                        <a href="../cours/noscours.php"><button type="submit" class="btn btn-blue btn-block w-100 rounded-pill">En savoir Plus</button></a>
                    </div>
                </div>
            </div>

            <div class="col d-flex">
                <div class="card-body shadow-lg px-0 m-5 bg-body rounded">
                    <img class="card-img-top" src="../img/avanceeAccueil.png" />
                    <h3 class="text-center mx-2 my-3">Couture avancée</h3>
                    <div class="d-grip gap-2 mt-5 mb-3 px-5">
                        <a href="../cours/noscours.php"><button type="submit" class="btn btn-blue btn-block w-100 rounded-pill">En savoir Plus</button></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include '../navigation/footer.php'; ?>
</body>

</html>