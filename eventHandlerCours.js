function validateSelect()
{
    var cours = document.getElementById("coursSelect");
    var coursIndex = cours.selectedIndex;

    document.getElementById("coursId").value = cours.options[coursIndex].value;

    return true;
}

function addCoursError()
{
    var courserror = document.getElementById("cours-error");
    courserror.innerText = "*Vous avez deja un cours";
}
function remCoursError()
{
    var courserror = document.getElementById("cours-error");
    courserror.innerText = "";
}