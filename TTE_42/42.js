function check() {
    var invalid =document.getElementById("input").value; /** Initialisation des valeur pour la gestion d'erreur et la fonction de calcul */
    var if42 =document.getElementById("input").value;
    var valid =document.getElementById("input").value;
    if (invalid == ""){ /**Si rien n'est saisi dans le champ, on répond avec une popup indiquand l'erreur */
        alert("Veuillez saisir un nombre");
    }
    if (if42 == 42){ /**Si la valeur entrée est égale à 42, on répond avec une popup indiquand l'erreur  */
        alert ("Désolé, ma programmation m'interdit de calculer avec cette valeur");
    }
    else { /**On multiplie la valeur par 2. Le résultat est donné au user par une popup */
        alert (valid*=2);
    }
}