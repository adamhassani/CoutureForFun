function sha256Hash(password) {
    // Hash the password using SHA-256 algorithm
    const hash = CryptoJS.SHA256(password).toString(CryptoJS.enc.Hex);
    return hash;
}

function validateForm() 
{
    // get the elements from the form
    var nom = document.getElementById("formNom").value.trim();
    var prenom = document.getElementById("formPrenom").value.trim();
    var mail = document.getElementById("formMail").value.trim();
    var mdp = document.getElementById("formMDP").value;
    var term =document.querySelector("input[name='flexCheckDefault']:checked");

    // get the elements for error display
    var nomError = document.getElementById("nomError");
    var prenomError = document.getElementById("prenomError");
    var mailError = document.getElementById("mailError");
    var mdpError = document.getElementById("mdpError");
    var termError = document.getElementById("termError");

    
    // Reset error messages by default they are empty 
    nomError.innerText = "";
    prenomError.innerText = "";
    mailError.innerText = "";
    mdpError.innerText = "";
    termError.innerText = "";
    var isValid = true; // by default isValid is true
    if (!term)
    {   
        termError.innerText = "Il faut accepter les termes et conditions d'utilisation !";
        isValid= false;
    }
    if (nom === "" || !isValidName(nom)) { // verify the nom
        nomError.innerText = "Le nom doit contenir au moins 2 lettres sans chiffres";
        isValid = false; // set it to false cause all the section need to be valid
    }

    if (prenom === "" || !isValidName(prenom)) { // then the prenom
        prenomError.innerText = "Le prénom doit contenir au moins 2 lettres sans chiffres";
        isValid = false;
    }

    if (mail === "" || !isValidEmail(mail)) { // then the email
        mailError.innerText = "Veuillez entrer une adresse email valide";
        isValid = false;
    }

    if (mdp === "" || !isValidPassword(mdp)) { // finally the password
        mdpError.innerText = "Le mot de passe doit contenir au moins 8 caractères avec des majuscules, des minuscules et des caractères spéciaux";
        isValid = false;
    }
    if (isValid){
        document.getElementById("formmdp").value = sha256Hash(mdp); // hashing the password from the client side , because hashing the passwrod in the server is useless the password is delivered to the server in plain text
    }
    return isValid;
}

// Function to validate name (at least 2 letters without numbers) ^ -> the start of the string , then [a to z or A to Z] {2,} at least two times then $ the end of the string preventing names like john12, mike2354 ....
function isValidName(name) {
    return /^[a-zA-Z]{2,}$/.test(name);
}

// Function to validate email \S+ for at least one caracter but the whitespace then @ then \S+ then . then \S+ is a valid email format
function isValidEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
}

// Function to validate password (at least 8 characters with uppercase, lowercase, and special characters)
function isValidPassword(password) {
    return /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/.test(password);// ?= is for verifiying assertion .*\d is for at least one num(digit or \d) [a-z] lowercase [A-Z] uppercase and then special caracters
}

function mailInsError(){
    document.getElementById("mailError").innerText = "Ce mail est deja associe a un compte";
}

function mailInsCheck(){
    document.getElementById("mailError").innerText = "";
}

