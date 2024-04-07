var globalCout ;
function isValidEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
}

function sendChecked(){
    var mailDevis = document.getElementById("mailDevis");
    var errormsgmail = document.getElementById("errormail");
    var recap = document.getElementById("recap");
    var errormsgconf = document.getElementById("errorconfirmation");
    // by default set it to empty
    errormsgconf.innerText = "";
    errormsgmail.innerText = "";
    if (!isValidEmail(mailDevis.value.trim())){
        errormsgmail.innerText = "*Saisir un mail valide!";
        return false;
    }
    if (recap.innerText == "")
    {
        // change the error of the confirmation
        errormsgconf.innerText = "*Confimer avant d'envoyer!";
        return false;
    }

    
    return true;
}

function devisValidation()
{
    var typevet = document.getElementById("typevet");
    var typevetIndex = typevet.selectedIndex;

    var tissuvet = document.getElementById("tissuvet");
    var tissuvetIndex = tissuvet.selectedIndex;

    var taillevet = document.getElementById("taillevet");
    var taillevetIndex = taillevet.selectedIndex;

    var servicesInputs = document.getElementsByName('btnOptions');

    // Initialize a variable to store the selected radio value
    var services = "Rien";
    var coutServices = 0;
    // Iterate over the radio inputs
    for (var i = 0; i < servicesInputs.length; i++) {
        // Check if the current radio input is checked
        if (servicesInputs[i].checked) {
            // Get the value of the checked radio input
            services = servicesInputs[i].value;
            break;
        }
    }

    if (services == "Ourlets" ){
        coutServices = 20;
    }else if (services == "Retouches"){
        coutServices = 30;
    }else if(services == "Ourlets + Retouches"){
        coutServices = 50;
    }else {
        coutServices = 0;
    }
        
    var cout = 10*(typevetIndex ) + 20*(tissuvetIndex ) + 5*(taillevetIndex ) + coutServices;
    globalCout = cout;
    var recap = document.getElementById("recap");
    var recapSend = document.getElementById("recapId");
    var globalRecap = "Type: {" + typevet.options[typevetIndex].value + "} Tissu: {" + tissuvet.options[tissuvetIndex].value + "} Taille: {" + taillevet.options[taillevetIndex].value + "} Cout: " + (cout-coutServices)+"+"+coutServices+"["+services+"]"+"="+cout +"$";
    
    recap.innerHTML = "Type: <strong>" + typevet.options[typevetIndex].value + "</strong> Tissu: <strong>" + tissuvet.options[tissuvetIndex].value + "</strong> Taille: <strong>" + taillevet.options[taillevetIndex].value + "</strong> <p>Cout: " + (cout-coutServices)+" + "+coutServices+"["+services+"]"+" = "+cout +"$</p>";
    
    recapSend.value = globalRecap;


}