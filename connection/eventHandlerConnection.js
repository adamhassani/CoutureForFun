function mailConnErrorMsg() {
    document.getElementById("mailConnError").innerText = "*Ce mail n'est pas associé à aucun compte!";
}

function passConnErrorMsg() {
    document.getElementById("passConnError").innerText = "*Mot de passe incorrect!";
} 


function mailConnCheck(){
    document.getElementById("mailConnError").innerText = "";
}


function passConnCheck(){
    document.getElementById("passConnError").innerText = "";
}

function sha256Hash(password) {
    // Hash the password using SHA-256 algorithm
    const hash = CryptoJS.SHA256(password).toString(CryptoJS.enc.Hex);
    return hash;
}
function validateConnection(){
    var mdp = document.getElementById("formMDP").value ;
    document.getElementById("formmdp").value = sha256Hash(mdp);
    
    return true;
}
