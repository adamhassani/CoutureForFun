<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez nous.</title>
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
                                    <img class="mb-3" src="img/contactLogo.png" />
                                    <h1 class="mb-0">Contactez-nous</h1>
                                    <p class="mb-5 text-muted">Contactez notre équipe pour en savoir plus sur nos offres chez Couture for Fun.</p>

                                    <div class="form-outline mb-3">
                                        <label class="form-label mx-2" for="formNom"><strong>Nom</strong></label>
                                        <input type="text" id="formNom" placeholder="Entrez votre nom." class="form-control form-control-lg rounded-pill" name="nomContact" />
                                        <span class="error-message" id="nomError"></span>
                                    </div>

                                    <form method="post" >
                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="formMail"><strong>Address email</strong></label>
                                            <input type="text" id="formMail" placeholder="Entrez votre adresse email." class="form-control form-control-lg rounded-pill" name="mailContact" />
                                            <span class="error-message" id="mailConnError"></span>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="devisDescription"><strong>Description</strong></label>
                                            <textarea type="text" id="devisDescription" placeholder="Decrivez votre demande" class="form-control form-control-lg rounded-4" name="descriptionContact" rows="4"></textarea>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3 mb-1">
                                            <button type="submit" class="btn btn-blue btn-block w-100 rounded-pill" name="contactContact">Envoyer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="img/contact.png" alt="Inscription" class="img-fluid float-end" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'contactProcedure.php'; ?>
    <?php include 'footer.php'; ?>
</body>

</html>