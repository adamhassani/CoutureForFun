<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Effectuer un devis.</title>
    <link href="../bootstrap.css" rel="stylesheet">
    <link href="../cssform/style1.css" rel="stylesheet">
    <link href="../errStyle.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" sizes="64x64" href="../img/logo1.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
                                <img src="../img/devis.png" alt="Inscription" class="img-fluid float-end" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>

                            <div class="col-xl-6 d-flex align-items-center py-0 my-0">
                                <div class="card-body p-md-3 p-xl-5 text-black">
                                    <img class="mb-3" src="../img/Group 1.png" />
                                    <h1 class="mb-0">Devis gratuit</h1>
                                    <p class="mb-4 text-muted">Obtenez un devis gratuit par mail avec une estimation du prix.</p>

                                    <form method="post" onsubmit = "return sendChecked()" id = "formDevis">

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="devisMail"><strong>Address email</strong></label>
                                            <input type="text" id="mailDevis" placeholder="Entrez votre adresse email." class="form-control form-control-lg rounded-4" name="mailDevis" />
                                            <span class = "error-message" id="errormail"></span>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="devisType"><strong>Type de vêtement</strong></label>
                                            <select class="form-select rounded-4" aria-label="" id = "typevet">
                                                <option value="" disabled hidden>Choisissez votre type de vêtements</option>
                                                <option value="Pantalon" selected>Pantalon</option>
                                                <option value="Pull">Pull</option>
                                                <option value="Veste">Veste</option>
                                            </select>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="devisTissu"><strong>Tissu</strong></label>
                                            <select class="form-select rounded-4" aria-label="" id = "tissuvet">
                                                <option value="" disabled  hdden>Choisissez votre tissu</option>
                                                <option value="Coton" selected>Coton</option>
                                                <option value="Lin">Lin</option>
                                                <option value="Soie">Soie</option>
                                            </select>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="devisTaille"><strong>Taille</strong></label>
                                            <select class="form-select rounded-4" aria-label="" id = "taillevet">
                                                <option value="" disabled  hidden>Choisissez votre taille</option>
                                                <option value="XS" selected>XS</option>
                                                <option value="S">S</option>
                                                <option value="M">M</option>
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

                                            <input type="radio" class="btn-check" value = "Ourlets" name="btnOptions" id="btnOurlets" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="btnOurlets">Ourlets</label>

                                            <input type="radio" class="btn-check" value = "Retouches"name="btnOptions" id="btnRetouches" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="btnRetouches">Retouches</label>

                                            <input type="radio" class="btn-check" value = "Ourlets + Retouches" name="btnOptions" id="btnDeux" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="btnDeux">Ourlets + Retouches</label>
                                            
                                            <input type="radio" class="btn-check" value = "Rien" name="btnOptions" id="rien" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="rien">Rien</label>

                                        </div>
                                        
                                        <div class= "form-outline mb-3 px-0">
                                            <span>Apres votre choix finale confirmer pour envoyer</span>
                                            <button type = "button" onclick="devisValidation()" class="btn btn-blue btn-block w-25 rounded-pill" name="confirmer">Confirmer</button><br>
                                            <span id = "errorconfirmation" class = "error-message"></span><br>
                                            <span id = "recap" value = "" name = "recapDevisIni"></span>
                                        </div>
                                        <!-- hidden input to stock the recap to send it to the server-->
                                        <input type="hidden" name="recapDevis" id="recapId" value="" />

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
    <?php include '../navigation/footer.php'; ?>
    <script src = "eventHandlerDevis.js"></script>
    <?php include 'recapDevis.php';?>
</body>

</html>