<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>
<body>
    <p>consignes:Faites une fonction checkPassword,
    dont le but est de vérifier la validité d'un mot de passe, 
    qui sera pris en argument .Un mot de passe est considéré valide lorsqu'il fait plus de 9 caractères,
     et qu'il contient au moins le caratère '@' 
     La fonction renverra un booléen pour indiquer la validité du mot de passe.</p>


    <?php
        $passWord="jenes@";
        
    if (strlen($passWord)<9){
        echo "le mot de mot est invalide";
       
    }else if (strlen($passWord)>9 && (str_contains($passWord,"@"))){
        echo " le mot de passe est valide";
    } else
        echo "le mot de passe est invalide"

    ?>

</body>
</html>