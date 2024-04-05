<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'enregistrer.</title>
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

                            <div class="col-xl-6 d-flex align-items-center">
                                <div class="card-body p-md-5 text-black">
                                    <img class="mb-3" src="img/Group 1.png" />
                                    <h1 class="mb-0">S'inscrire</h1>
                                    <p class="mb-5 text-muted">Rejoignez une communauté de +3000 couturiers.</p>
                                    <form method="post" onsubmit = "return validateForm();">
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label mx-2" for="formNom"><strong>Nom</strong></label>
                                                    <input type="text" id="formNom" placeholder="Entrez votre nom." class="form-control form-control-lg rounded-4" name="nom" />
                                                    <span class = "error-message" id = "nomError"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="formPrenom"><strong>Prenom</strong></label>
                                                    <input type="text" id="formPrenom" placeholder="Entrez votre prénom" class="form-control form-control-lg rounded-4" name="prenom" />
                                                    <span class = "error-message" id = "prenomError"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="formMail"><strong>Address email</strong></label>
                                            <input type="text" id="formMail" placeholder="Entrez votre adresse email." class="form-control form-control-lg rounded-4" name="mail" />
                                            <span class = "error-message" id = "mailError"></span>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="formMDP"><strong>Mot De Passe</strong></label>
                                            <input type="password" id="formMDP" placeholder="Entrez un mot de passe sécurisé" class="form-control form-control-lg rounded-4" name="mdp" />
                                            <span class = "error-message" id = "mdpError"></span>
                                        </div>

                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name = "flexCheckDefault">
                                            <label class="form-check-label" for="formCGU">J'accepte les termes et conditions d'utilisation.</label><br>
                                            <span class = "error-message" id = "termError"></span>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3 mb-1">
                                            <button type="submit" class="btn btn-blue btn-block w-100 rounded-4" name="inscrire">S'inscrire</button>
                                        </div>

                                        <div class="d-flex justify-content-center">
                                            <p class="me-1">Vous avez déjà un compte?</p>
                                            <a class="text-primary" href="connection.php">Se connecter</a>
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
    <script src = "eventHandlerInscription.js" ></script>
    <?php include 'inscriptionProcedure.php';?>
</body>

</html>