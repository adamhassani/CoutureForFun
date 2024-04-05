<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter.</title>
    <link href="bootstrap.css" rel="stylesheet">
    <link href="cssform/style1.css" rel="stylesheet">
    <link href="errStyle.css" rel = "stylesheet">
    <link href="cssform/style1.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" sizes="64x64" href="img/logo1.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-primary">
    <?php include 'navbar.php'; ?>

    <section>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center h-100 shadow-lg p-3 mb-5 mt-5 bg-body rounded">

                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">

                            <div class="col-xl-6 d-flex align-items-center">
                                <div class="card-body p-md-5 text-black">
                                    <img class="mb-3" src="img/Group 1.png" />
                                    <h1 class="mb-0">Bon retour parmi nous</h1>
                                    <p class="mb-5 text-muted">Saisissez vos données d'identification pour accéder à votre compte.</p>

                                    <form method="post">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="formMail"><strong>Address email</strong></label>
                                            <input type="text" id="formMail" placeholder="Entrez votre adresse email." class="form-control form-control-lg rounded-pill" name="mailConn" />
                                            <span class="error-message" id="mailConnError"></span>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="formMDP"><strong>Mot De Passe</strong></label>
                                            <a class="" href="connection.php" id="connect-shortcut">Mot de passe oublie</a>
                                            <input type="password" id="formMDP" placeholder="Entrez un mot de passe sécurisé" class="form-control form-control-lg rounded-pill" name = "mdpConn"/>
                                            <span class="error-message" id="passConnError"></span>
                                        </div>

                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="formCGU">Se souvenir de moi</label>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3 mb-1">
                                            <button type="submit" class="btn btn-primary btn-block w-100 rounded-pill" name="connection">Se connecter</button>
                                        </div>

                                        <div class="d-flex justify-content-center">
                                            <p class="me-1">Vous n'avez pas de compte ?</p>
                                            <a href="inscription.php" id="connect-shortcut">S'inscrire</a>
                                        </div>
                                    </form>
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

    <?php include 'footer.php'; ?>
    <script src="eventHandlerConnection.js"></script>
    <?php include 'connectionProcedure.php'; ?>
</body>

</html>