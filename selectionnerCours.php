<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription aux cours</title>
    <link href="bootstrap.css" rel="stylesheet">
    <link href="cssform/style1.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" sizes="64x64" href="img/logo1.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="errStyle.css" rel="stylesheet">
</head>

<body class="bg-primary">
    <?php include 'navbar.php'; ?>

    <section>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center h-100 shadow-lg p-3 mb-5 mt-5 bg-body rounded">

                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="img/devis.png" alt="InscriptionCours" class="img-fluid float-end" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>

                            <div class="col-xl-6 d-flex align-items-center py-0 my-0">
                                <div class="card-body p-md-3 p-xl-5 text-black">
                                    <img class="mb-3" src="img/Group 1.png" />
                                    <h1 class="mb-0">Inscription Aux Cours</h1>
                                    <p class="mb-4 text-muted">Rejoignez dès aujourd'hui le cours qui vous convient.</p>

                                    <form method="post" onsubmit = "return validateSelect();">

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="devisType"><strong>Nos Cours</strong></label>
                                            <select class="form-select rounded-4" aria-label="" id ="coursSelect" name = "cours">
                                                <option value="" disabled hidden>Sélectionnez un cours</option>
                                                <option value="debutants" selected>Couture pour débutants</option>
                                                <option value="patrons">Couture avec patrons</option>
                                                <option value="avancee">Couture Avancée</option>
                                            </select>
                                        </div>

                                        <!-- to stock -->
                                        <input type="hidden" value = "" name = "cours" id = "coursId"/>
                                        <!-- span for error -->
                                        <span id ="cours-error" class = "error-message"></span>
                                        <div class="d-flex justify-content-end pt-3 mb-0">
                                            <button type="submit" class="btn btn-blue btn-block w-100 rounded-pill" name="envoyer-inscriptioncours">Inscription</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
    <script src = "eventHandlerCours.js"></script>
    <?php include 'selectionnerCoursProcedure.php'; ?>
</body>



</html>

