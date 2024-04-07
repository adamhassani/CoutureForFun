<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription aux cours</title>
    <link href="../bootstrap.css" rel="stylesheet">
    <link href="../cssform/style1.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" sizes="64x64" href="../img/logo1.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="../errStyle.css" rel="stylesheet">
</head>

<body class="bg-primary">
    <?php include '../navigation/navbar.php'; ?>

    <section>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center h-100 shadow-lg p-3 mb-5 mt-5 bg-body rounded">

                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="../img/devis.png" alt="InscriptionCours" class="img-fluid float-end" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>

                            <div class="col-xl-6 d-flex align-items-center py-0 my-0">
                                <div class="card-body p-md-3 p-xl-5 text-black">
                                    <img class="mb-3" src="../img/Group 1.png" />
                                    <h1 class="mb-0">Demande echouée</h1>
                                    <p class="mb-4 text-muted">Votre demande n'a pas pu aboutir. Veuillez contacter un administrateur pour plus d'aide.</p>


                                    <div class="d-flex justify-content-end pt-3 mb-0">
                                        <a href = "../accueil/accueil.php">
                                            <button type="submit" class="btn btn-danger btn-block w-100 rounded-pill" name="envoyer-inscriptioncours">Vers l'accueil</button>
                                        </a>
                                    </div> 

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include '../navigation/footer.php'; ?>
</body>



</html>

