<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 7</title>
</head>
<body>
    <p>
        consigne : 
        Faites une fonction qui prend en argument une chaîne de caractères (LONGUE)
        Cette fonction doit afficher les 15 premiers caractères puis '...' Par exemple :
        Je passe la chaîne : 'Lorem quisque class vestibulum'
        La fonction doit afficher 'Lorem quisque c...'
    </p>

    <p>Technique :</p>
    <p>je déclare une variable : $stringLongue;</p>   
    <p>ensuite une variable: $reduit ;</p>    
    <p> j'utilise substr qui sert à prendre que les éléments que l'on a besoin 
        je lui mets entre parentheses dans quelle variable se servir puis le premier chiffre correspond au point de
        départ, le second chiffre à la fin. 
    </p> 
    <p> synthaxe :  substr($item['stringvalue'],0,25);</p>
    

    <?php
    $stringLongue = 'Lorem quisque class vestibulum';

    $reduit =substr($stringLongue,0,15) ;

 var_dump($reduit . "...")

    ?>

</body>
</html>