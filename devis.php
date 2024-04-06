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
                                <div class="card-body p-md-3 p-xl-5 text-black">
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
                                            <select class="form-select rounded-4" aria-label="" id = "typevet">
                                                <option value="" disabled selected hidden>Choisissez votre type de vêtements</option>
                                                <option value="Pantalon">Pantalon</option>
                                                <option value="Pull">Pull</option>
                                                <option value="Veste">Veste</option>
                                            </select>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="devisTissu"><strong>Tissu</strong></label>
                                            <select class="form-select rounded-4" aria-label="" id = "tissuvet">
                                                <option value="" disabled selected hidden>Choisissez votre tissu</option>
                                                <option value="Coton">Coton</option>
                                                <option value="Lin">Lin</option>
                                                <option value="Soie">Soie</option>
                                            </select>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="devisTaille"><strong>Taille</strong></label>
                                            <select class="form-select rounded-4" aria-label="" id = "taillevet">
                                                <option value="" disabled selected hidden>Choisissez votre taille</option>
                                                <option value="1">XS</option>
                                                <option value="2">S</option>
                                                <option value="3">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                                <option value="2XL">2XL</option>
                                                <option value="3XL">3XL</option>
                                            </select>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="devisDescription"><strong>Description</strong></label>
                                            <textarea type="text" id="devisDescription" placeholder="Decrivez votre demande" class="form-control form-control-lg rounded-4" name="description" rows="1"></textarea>
                                        </div>

                                        <div class="form-outline mb-3 px-0">
                                            <label class="form-label" for="devisServices"><strong>Choisir un sérvice</strong></label><br>

                                            <!-- Option 1 -->
                                            <input type="radio" class="btn-check" name="btnOptions" id="btnOurlets" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="btnOurlets">Ourlets</label>

                                            <!-- Option 2 -->
                                            <input type="radio" class="btn-check" name="btnOptions" id="btnRetouches" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="btnRetouches">Retouches</label>

                                            <!-- Option 3 -->
                                            <input type="radio" class="btn-check" name="btnOptions" id="btnDeux" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="btnDeux">Ourlets + Retouches</label>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3 mb-0">
                                            <button type="submit" class="btn btn-blue btn-block w-100 rounded-pill" name="envoyer-devis">Envoyer</button>
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