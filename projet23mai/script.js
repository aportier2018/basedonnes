
function validateForm() {
    var x = document.forms["form"]["titre"].value;
    if (x == "") {
        alert("Cocher un titre");
        return false;
      }

    var y = document.forms["form"]["prenom"].value;
    if (y == "") {
        alert("votre prénom SVP");
        return false;
    }

    var z = document.forms["form"]["nom"].value;
    if (z == "") {
        alert(" * votre Nom SVP");
        return false;
    }

    var a = document.forms["form"]["email"].value;
    if (a == "") {
        alert(" * votre Email SVP");
        return false;
    }
}
