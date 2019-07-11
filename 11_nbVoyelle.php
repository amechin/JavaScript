<?php

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<script>
    /* Affichage du nom du script */
    alert("Décompte du nombre de voyelles dans un mot");

    /* Déclaration de variables locales */
    var mot, nb_voyelles, compteur;

    /* Saisie du mot */
    mot = prompt("Mot :");

    /* Conversion en majuscules (pour éviter de faire 12 tests) */
    mot = mot.toUpperCase();

    /* Initialisation des variables */
    nb_voyelles = 0;

    /* Détermination du nombre de voyelles */
    for (compteur=0; compteur<=mot.length; compteur++) {
        switch (mot.charAt(compteur)) {
            case "A":
                nb_voyelles = nb_voyelles + 1;
                break;
            case "E":
                nb_voyelles = nb_voyelles + 1;
                break;
            case "I":
                nb_voyelles = nb_voyelles + 1;
                break;
            case "O":
                nb_voyelles = nb_voyelles + 1;
                break;
            case "U":
                nb_voyelles = nb_voyelles + 1;
                break;
            case "Y":
                nb_voyelles = nb_voyelles + 1;
                break;
        }
    }

    /* Affichage du résultat */
    document.write(mot, " contient " + nb_voyelles + " voyelles");

</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



