<?php
// DEMARRER LA SESSION PHP

session_start();



/*
Nous pourront définir ici toutes les fonctions utiles à notre projet et utilisable
sur toute les pages.
*/
/**
*permet de rediriger l'utilisateur sur une nouvelle page  */
function redirection ($page) {
header('Location: ' .$page);
}

/*
permet de vérifier si un auteur est connecté en session.
retourne oui si mon utilisateur est connecté et non si ce n'est pas le cas
*/
function isOnline(){
return isset($_SESSION['auteur'] ) ? $_SESSION['auteur'] : false;

}






/*
Permet de générer une accroche.
*/

function summarize($text) {
//suppresion des balises HTML
$string = strip_tags($text);

//si mon string est supérieur à 150, je continue
        if(strlen($string) > 150) {

    //je coupe ma chaine à 150.
    $stringCut = substr($string, 0, 150);
     // je m'assure de ne pas couper un mot.
    //en recherchant la position du dernier esspace.
    $string = substr($stringCut, 0, strrpos($stringCut,' '));


        }

return $string . '...';
}

?>