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
    alert("Impression du libellé du mois");

    /* Saisie du numéro de mois */
    mois = parseInt(prompt("Numéro du mois (1 à 12) :"));

    /* Affichage du résultat */
    switch (mois) {
        case 1:
            document.write("Mois n° " + mois + " : Janvier");
            break;
        case 2:
            document.write("Mois n° " + mois + " : Février");
            break;
        case 3:
            document.write("Mois n° " + mois + " : Mars");
            break;
        case 4:
            document.write("Mois n° " + mois + " : Avril");
            break;
        case 5:
            document.write("Mois n° " + mois + " : Mai");
            break;
        case 6:
            document.write("Mois n° " + mois + " : Juin");
            break;
        case 7:
            document.write("Mois n° " + mois + " : Juillet");
            break;
        case 8:
            document.write("Mois n° " + mois + " : Août");
        case 9:
            document.write("Mois n° " + mois + " : Septembre");
            break;
        case 10:
            document.write("Mois n° " + mois + " : Octobre");
            break;
        case 11:
            document.write("Mois n° " + mois + " : Novembre");
            break;
        case 12:
            document.write("Mois n° " + mois + " : Décembre");
            break;
        default:
            document.write("Erreur de saisie sur le n° de mois");
    }
</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>