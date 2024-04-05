<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Cours</title>
    <link href="bootstrap.css" rel="stylesheet">
    <link href="css-accueil/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/logo1.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container-fluid bg-primary pt-5 px-5">
        <div class="row ">
            <h6 class="d-flex justify-content-center align-items-center mt-5 mb-2">SERVICES</h6>
        </div>
        <div class="row">
            <h2 class="d-flex justify-content-center">Des offres adaptées à vous.</h2>
        </div>
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col d-flex">

                <div class="card-body shadow-lg p-4 m-5 bg-body rounded">
                    <img class="mb-3" src="img/coutDebutants.png" />
                    <h3 class="d-flex">Couture pour débutants</h3>
                    <p>Découvrez la couture avec notre formation pour débutants. Nos experts vous guideront pas à pas pour maîtriser les bases, de la lecture de patrons aux techniques essentielles. Devenez fier(e) de vos premières créations !</p>
                    <hr>
                    <div class="d-flex justify-content-end pt-3 mb-3">
                        <?php
                        if ($_SESSION['logged_in'] && $_SESSION['logged_in'] == true){
                        echo '<button type="submit" class="btn btn-blue btn-block w-100 rounded-pill" name="envoyer-devis">Souscrire à cette offre</button>';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col d-flex">
                <div class="card-body shadow p-4 m-5 bg-body rounded">
                    <img class="mb-3" src="img/coutPatrons.png" />
                    <h3 class="d-flex">Couture avec patrons</h3>
                    <p>Vous avez des bases en couture ? Apprenez à maîtriser l'utilisation des patrons pour réaliser des vêtements sur-mesure. Nos formateurs vous enseigneront les techniques d'ajustement et de transformation des modèles.</p>
                    <hr>
                    <div class="d-flex justify-content-end pt-3 mb-3">
                        <?php
                        if ($_SESSION['logged_in'] && $_SESSION['logged_in'] == true){
                        echo '<button type="submit" class="btn btn-blue btn-block w-100 rounded-pill" name="envoyer-devis">Souscrire à cette offre</button>';
                        }
                        ?>                    
                    </div>
                </div>
            </div>

            <div class="col d-flex">
                <div class="card-body shadow-lg p-4 m-5 bg-body rounded">
                    <img class="mb-3" src="img/coutAvancee.png" />
                    <h3 class="d-flex">Couture avancée</h3>
                    <p>Vous êtes couturier(ère) confirmé(e) ? Repoussez vos limites avec notre formation avancée. Découvrez des techniques de pointe comme la couture de tissus délicats ou la création de vos propres patrons. Devenez un(e) créateur(trice) unique.</p>
                    <hr>
                    <div class="d-flex justify-content-end pt-3 mb-3">
                        <?php
                        if ($_SESSION['logged_in'] && $_SESSION['logged_in'] == true){
                        echo '<button type="submit" class="btn btn-blue btn-block w-100 rounded-pill" name="envoyer-devis">Souscrire à cette offre</button>';
                        }
                        ?>                    
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include 'footer.php'; ?>


</body>

</html>