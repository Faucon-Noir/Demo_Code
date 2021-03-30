function check() {
    var invalid =document.getElementById("input").value;
    var if42 =document.getElementById("input").value;
    var valid =document.getElementById("input").value;
    if (invalid == ""){
        alert("Veuillez saisir un nombre");
    }
    if (if42 == 42){
        alert ("Désolé, ma programmation m'interdit de calculer avec cette valeur");
    }
    else {
        alert (valid*=2);
    }
}