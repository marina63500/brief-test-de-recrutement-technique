<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 5</title>
</head>
<body>
    Écrivez une fonction pour supprimer les doublons d’un tableau :
    Exemple : [1, 2, 3, 3, 3, 4, 5, 5] Résultat attendu : [1, 2, 3, 4, 5]


    j'ai utiliser la boucle foreach pour parcourir le tableau Array 
    et la fonction in_array pour vérifier si l'élément n'etait pas dans mon tableau sans doublon.
    si l'élément n'est pas dans mon tableau sans doublon alors il faut lui ajouter.


    <?php
$Array = [1,2,3,3,3,4,5,5];
$SansDoublon = [];

foreach($Array as $item){
    if(in_array($item, $SansDoublon)===false){
        $SansDoublon[] = $item;
        
    }
    var_dump($SansDoublon);
}







    ?>

</body>
</html>