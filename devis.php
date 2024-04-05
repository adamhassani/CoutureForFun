<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Effectuer un devis.</title>
    <link href="bootstrap.css" rel="stylesheet">
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
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="img/devis.png" alt="Inscription" class="img-fluid float-end" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>

                            <div class="col-xl-6 d-flex align-items-center py-0 my-0">
                                <div class="card-body p-md-5 text-black">
                                    <img class="mb-3" src="img/Group 1.png" />
                                    <h1 class="mb-0">Devis gratuit</h1>
                                    <p class="mb-4 text-muted">Obtenez un devis gratuit par mail avec une estimation du prix.</p>

                                    <form method="post">

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="devisMail"><strong>Address email</strong></label>
                                            <input type="text" id="devisMail" placeholder="Entrez votre adresse email." class="form-control form-control-lg rounded-4" name="mail" />
                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="devisType"><strong>Type de vêtement</strong></label>
                                            <select class="form-select rounded-4" aria-label="">
                                                <option value="" disabled selected hidden>Please Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="devisTissu"><strong>Tissu</strong></label>
                                            <select class="form-select rounded-4" aria-label="">
                                                <option value="" disabled selected hidden>Please Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="devisTaille"><strong>Taille</strong></label>
                                            <select class="form-select rounded-4" aria-label="">
                                                <option value="" disabled selected hidden>Please Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="devisDescription"><strong>Description</strong></label>
                                            <textarea type="text" id="devisDescription" placeholder="Decrivez votre demande" class="form-control form-control-lg rounded-4" name="description" rows="1"></textarea>
                                        </div>


                                        <div class="d-flex justify-content-end pt-3 mb-3">
                                            <button type="submit" class="btn btn-blue btn-block w-100 rounded-pill" name="envoyer-devis">Envoyer</button>
                                        </div>

                                        <div class="form-outline border p-0 m-0">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-auto">
                                                    <img class="" src="img/devis_tel.png" />
                                                </div>
                                                <div class="col d-flex align-items-center">
                                                    <p class="">01 23 45 67 89</p>
                                                </div>
                                            </div>
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
</body>

</html>