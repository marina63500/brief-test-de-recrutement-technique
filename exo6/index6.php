<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 6</title>
</head>
<body>
Avec le moins de lignes de code possible, proposez moi un algorithme qui,
pour un nombre donné, affiche la table de multiplication liée.
 Par exemple : Si je demande 1, je veux voir :
1x1 = 1
1x2 = 2
etc Et ce jusqu'à 12

    <p>technique :</p>
    <p>je commence par nommer ma fonction tableMultiplication;</p>
    <p>puis j'écris ma fonction tableMultiplication d'un nombre,
        je fais un echo pour écrire mon paragraphe qui stipule ma table choisie d'un nombre :;
        puis je dis que pour ma variable i doit etre égale à 1 pour demarrer à 1,
        et i va comter jusqu'à 12, et que à chaque tour je lui rajoute 1 au i;

        et je lui demande de m'écrire la variable de i * par ma variable de nombre qui correspond a ma table choisie
        est egale à $i*$nombre
    </p>


<?php
tableMultiplication(7);

function tableMultiplication($nombre){
    echo '<p>'.'Table de multiplication de ' . $nombre . ' ' . ':'. '</p>';    

    for($i=1;$i<=12;$i++){
        echo '<p>'  . $i . 'x' .$nombre . '=' .$i*$nombre . ' ' . ';' . '</p>';
    }
   
     
}

?>

</body>
</html>