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


