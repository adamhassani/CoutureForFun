function isValidName(name) {
    return /^[a-zA-Z]{2,}$/.test(name);
}

// Function to validate email \S+ for at least one caracter but the whitespace then @ then \S+ then . then \S+ is a valid email format
function isValidEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
}

function validateForm()
{
    var name = document.getElementById("formNom").value.trim();
    var mail = document.getElementById("formMail").value.trim();

    var mailErr = document.getElementById("mailError");
    var nameErr = document.getElementById("nomError");

    mailErr.innerText = "";
    nameErr.innerText = "";


    var status = true;

    if (!isValidEmail(mail)){
        mailErr.innerText = "*Donnez un mail valide";
        status = false;
    }

    if (!isValidName(name)){
        nameErr.innerText = "*Donnez un nom valide";
        status = false;
    }

    return status;
}