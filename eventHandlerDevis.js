function isValidEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
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
    var services = null;
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

    if (servies = )
    var cout = 10*(typevetIndex + 1) + 20*(tissuvetIndex + 1) + 5*(taillevetIndex + 1) + 
     
}