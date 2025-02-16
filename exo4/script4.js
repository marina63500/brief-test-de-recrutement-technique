let test = getPourcentage(100, 10);
// console.log(test);

getPourcentage(150, 10);
getPourcentage(100, 20);




function getPourcentage(prix, fixedPourcentage){
    let pourcentage = fixedPourcentage/100;
    let prixsolder = prix-(prix*pourcentage);
    
    return prixsolder;
}
