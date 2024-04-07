<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Cours</title>
    <link href="../bootstrap.css" rel="stylesheet">
    <link href="../css-accueil/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../img/logo1.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include '../navigation/navbar.php'; ?>
    <div class="container-fluid bg-primary pt-xl-5">
        <div class="row ">
            <h6 class="d-flex justify-content-center align-items-center mt-5 mb-2">SERVICES</h6>
        </div>
        <div class="row">
            <h2 class="d-flex justify-content-center">Des offres adaptées à vous.</h2>
        </div>
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col d-flex">

                <div class="card-body shadow-lg p-4 m-5 bg-body rounded">
                    <img class="mb-3" src="../img/coutDebutants.png" />
                    <h3 class="d-flex">Couture pour débutants</h3>
                    <p>Découvrez la couture avec notre formation pour débutants. Nos experts vous guideront pas à pas pour maîtriser les bases, de la lecture de patrons aux techniques essentielles. Devenez fier(e) de vos premières créations !</p>
                    <hr>
                    <p class="text-muted">Ce cours est structuré sur <strong>4 semaines</strong>, avec des cours en lignes d'<strong>une heure par semaine.</strong></p>
                    </p>
                    <hr>
                    <ul class="list-unstyled">
                        <li class="text-muted"><img src="../img/checklist.png" class="img-fluid me-2" alt="Image 1"> Utilisation de la machine à coudre</li>
                        <li class="text-muted"><img src="../img/checklist.png" class="img-fluid me-2" alt="Image 2"> Réalisation d'ourlets</li>
                        <li class="text-muted"><img src="../img/checklist.png" class="img-fluid me-2" alt="Image 3"> Pose de fermeture éclaire</li>
                        <li class="text-muted"><img src="../img/checklist.png" class="img-fluid me-2" alt="Image 3"> Dispensé par <strong>Michelle Legrand</strong></li>
                    </ul>
                    <div class="d-grip gap-2">
                        <?php
                        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                            echo '<a href = "selectionnerCours.php"><button type="submit" class="btn btn-blue btn-block w-100 rounded-pill">Souscrire à cette offre</button></a>';
                        } else {
                            echo '<a href = "../connection/connection.php"><button type="submit" class="btn btn-blue btn-block w-100 rounded-pill">Se connecter</button></a>';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col d-flex">
                <div class="card-body shadow p-4 m-5 bg-body rounded">
                    <img class="mb-3" src="../img/coutPatrons.png" />
                    <h3 class="d-flex">Couture avec patrons</h3>
                    <p>Vous avez des bases en couture ? Apprenez à maîtriser l'utilisation des patrons pour réaliser des vêtements sur-mesure. Nos formateurs vous enseigneront les techniques d'ajustement et de transformation des modèles.<br/> 
                    <hr>
                    <p class="text-muted">Ce cours est structuré sur <strong>6 semaines</strong>, avec des cours en lignes d'<strong>une heure par semaine.</strong></p>
                    <hr>
                    <ul class="list-unstyled">
                        <li class="text-muted"><img src="../img/checklist.png" class="img-fluid me-2" alt="Image 1"> Patrons pour pantallon</li>
                        <li class="text-muted"><img src="../img/checklist.png" class="img-fluid me-2" alt="Image 2"> Patrons pour jupes</li>
                        <li class="text-muted"><img src="../img/checklist.png" class="img-fluid me-2" alt="Image 3"> Patrons pour pull</li>
                        <li class="text-muted"><img src="../img/checklist.png" class="img-fluid me-2" alt="Image 3"> Dispensé par <strong>Lucas Chardon</strong></li>
                    </ul>
                    <div class="d-grip gap-2">
                        <?php
                        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                            echo '<a href = "selectionnerCours.php"><button type="submit" class="btn btn-blue btn-block w-100 rounded-pill">Souscrire à cette offre</button></a>';
                        } else {
                            echo '<a href = "../connection/connection.php"><button type="submit" class="btn btn-blue btn-block w-100 rounded-pill">Se connecter</button></a>';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col d-flex">
                <div class="card-body shadow-lg p-4 m-5 bg-body rounded">
                    <img class="mb-3" src="../img/coutAvancee.png" />
                    <h3 class="d-flex">Couture avancée</h3>
                    <p>Vous êtes couturier(ère) confirmé(e) ? Repoussez vos limites avec notre formation avancée. Découvrez des techniques de pointe comme la couture de tissus délicats ou la création de vos propres patrons. Devenez un(e) créateur(trice) unique.</p>
                    <hr>
                    <p class="text-muted">Ce cours est structuré sur <strong>10 semaines</strong>, avec des cours en lignes d'<strong>une heure par semaine.</strong></p>
                    <hr>
                    <ul class="list-unstyled">
                        <li class="text-muted"><img src="../img/checklist.png" class="img-fluid me-2" alt="Image 1"> Apprendre à creer des patrons</li>
                        <li class="text-muted"><img src="../img/checklist.png" class="img-fluid me-2" alt="Image 2"> Coudre des modèles plus avancés</li>
                        <li class="text-muted"><img src="../img/checklist.png" class="img-fluid me-2" alt="Image 3"> Dispensé par <strong>Marion Mai</strong></li>
                    </ul>
                    <div class="d-grip gap-2">
                        <?php
                        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) { 
                            echo '<a href = "selectionnerCours.php"><button type="submit" class="btn btn-blue btn-block w-100 rounded-pill">Souscrire à cette offre</button></a>';
                        } else {
                            echo '<a href = "../connection/connection.php"><button type="submit" class="btn btn-blue btn-block w-100 rounded-pill">Se connecter</button></a>';
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include '../navigation/footer.php'; ?>


</body>

</html>