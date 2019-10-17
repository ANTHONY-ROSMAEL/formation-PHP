<!--Tout d'abord on peut ecrire du HTML dans un fichier ayant l'extension PHP.
 L'inverse n'est pas possible-->

 <style>
 h2{
     margin:0;
     font-size:15px;
     color:red;
 }
 </style>

 <h2>Ecriture et Affichage</h2>

 <!--ouvrir la balise php et fermeture-->

 <?php
echo 'bonjour'; // ECHO est une instruction qui nous permet d'effectuer un affichage.
 
echo '<br>'; //Nous pouvons également 
echo 'salut';
 ?> 
    <hr>
     <strong>BONJOUR</strong>
     <?= 'hello world'; ?> <!-- = remplace echo-->

     <!--il est possible d'ouvrir et de fermer php pour mélanger du code HTML et PHP. -->

<?php
echo 'texte'; //commentaire sur une ligne
echo 'texte'; /*ceci est un commentaire sur plusieurs ligne*/
/* PRINT est une autre instruction d'affichage
pas de differente entre print et echo
-----------------------------------
il n'est pas obligatoire de fermer php '?>' sauf si 
HTML à la suite*/

echo '<hr><h2>Variable PHP :Type/Déclaration/Affection</h2>';
//Déclaration d'une variable PHP avec le signe $

$a = 127; // Affectation de la valeur 127 dans la variablz nommée : a
$b = 1.5; //Affectation de la valeur 1.5 dans la variable nommée : b

// $nom_de_ma_variable = ma_valeur  //gettype permet d'avoir le type

echo gettype ($a); //il s'agit d'un entier : integer
echo gettype ($b) ;  //il s'agit d'un nombre à virgule : double

$a = "une chaine";
$b = "127";
echo'<br>';
echo gettype ($a); // il s'agit d'un string
echo gettype ($b);// string est équivalent de varchar de MySQL

/* NOTER que nous pouvons appeler une variable 'a2' mais pas 
'2a'Elle peut contenir des chiffres, mais ne doit pas commernce par un chiffre.*/

echo'<hr><h2>La concaténation</h2>';

/* on utilise le point ou la virgule pour concaténer.
*/
$prenom ="rosmael";
$nom ="benjamin";
echo "bonjour " . $prenom . '<br>';
echo "bonjour " , $nom , '<br>';

/*
il est possible de mélanger les points et virgule; 
ce n'est pas une bonne pratique. A NE PAS FAIRE.
*/
echo '<br>';
echo "bonjour $prenom <br>"; // Dans les guillements la variable est évaluer.
echo 'bonjour $prenom <br>';  // dans les quotes, la variable n'est pas évaluer.

 // ------------------------------------

 echo '<hr><h2>Constante et Constante Magique !</h2>';

 define('IMPOSSIBLE_A_MODIFIER', 'Valeur de ma constante');
 echo IMPOSSIBLE_A_MODIFIER . '<br>';

 /*
     Par convention, une constante se déclare toujours en MAJUSCULE.
     --------------------------------------------------------------
     Les constantes sont utiles pour sauvegarder vos informations
     de connexion à une BDD par exemple.
 */

 // -- Les constantes magiques :

 echo __FILE__  . '<br>'; // Chemin complet vers mon fichier.
 echo __DIR__  . '<br>'; // Chemin vers mon dossier.
 echo __LINE__  . '<br>'; // Affiche le numéro de la ligne.

 // ------------------------------------

 echo '<hr><h2>Les Opérateurs Arithmétique</h2>';

 $a = 10;
 $b = 5;

 echo $a + $b . '<br>'; // Affiche 15
 echo $a - $b . '<br>'; // Affiche 5
 echo $a * $b . '<br>'; // Affiche 50
 echo $a / $b . '<br>'; // Affiche 2

 // -- Opération / Affectation

 $a = $a + $b; // Ici, $a vaut 10... donc 10 + 5 = 15
 $a += $b; // Ecriture simplifiée Même chose que $a = $a + $b;
 $a -= $b; // Même chose que $a = $a - $b ;
 $a *= $b; // Même chose que $a = $a * $b ;
 $a /= $b; // Même chose que $a = $a / $b ;

 $a += 1; // J'incrémente de 1. J'ajoute +1 à ma variable.
 $a++; // Même chose que $a += 1; Ecriture simplifiée.
 $a--; // Même chose que $a -= 1; Ecriture simplifiée.

 echo '<hr><h2>Structures Conditionelles (if / else)</h2>';

 /* 
     Isset & Empty
     empty = test si une variable est égale à 0, est vide ou non définie.
     isset = test uniquement si une variable est définie / existe.
 */

 $var1 = "test";
 $var2 = "";

 if ( empty( $var2 ) ) { // Si $var2 est égale à 0, est vide ou n'existe pas.
     echo '0, vide ou non définie<br>';
 } else {
     echo 'Ma variable est définie<br>';
 }

 if ( isset( $var2 ) ) { // Si existe $var2 ?
     echo 'var2 existe<br>';
 } else {
     echo 'var2 n\'existe pas !<br>';
 }

 $prenom = "0";
 $nom = "LIEGEARD";

 if (isset($prenom)) echo "Attention, prenom existe !";
 if (empty($prenom)) echo "Attention, vous avez oublié de remplir votre prénom";

 echo '<hr>';

 $a = 2;
 $b = 5;
 $c = 8;

 if ( $a > $b ) { // Si A est supérieur à B
     print "A est bien supérieur à B.<br>";
 } else {
     print "non, c'est B qui est supérieur à A.<br>";
 }

 if ( $a > $b && $b > $c ) { // Si A est supérieur à B et que dans le même temps B est supérieur à C.
     print "Tous est OK pour les deux conditions.<br>";
 }

 if ( $a == 2 || $b > $c ) { // Si A contient 2 ou que B est supérieur à C
     print "Tout est OK pour au moins l'une des deux conditions.<br>";
 } else {
     // Aucune des deux sont bonnes.
     print "Nous sommes dans le ELSE";
 }

 /*
     NOTA BENE :
     Le double égale == permet de vérifier une information
     à l'intérieur d'une variable.
 */

 if ( $a == 10 XOR $b == 6 ) { // Seulement l'une des 2 conditions doit être valide. Mais pas les deux en même temps.
     echo 'Ok, condition exclusive.';
 }

 /*
     Forme contracté du IF...
     Une ecriture ternaire, un if ternaire
     Le "?" remplace le IF (alors), le ":" remplace le ELSE (sinon)
 */

 echo ($a == 10) ? "a est égal à 10<br>" : "a n'est pas égal à 10<br>";

 // -- Comparaison

 $a = 1;
 $b = "1";

 if ( $a == $b ) echo "Les deux variables sont égales";
 if ( $a === $b ) echo "Les deux variables sont strictement égales";

 /*
     /!\ A NE PAS OUBLIER /!\
     = Affectation
     == Comparaison des valeurs
     === Comparaison des valeurs et des types
 */

 echo '<hr><h2>Condition Switch</h2>';

 $couleur = 'bleu';

 switch($couleur) {
     case 'bleu' :
         echo 'Vous aimez le bleu';
         break;
     case 'rouge' :
         echo 'Vous aimez le rouge';
         break;
     case 'jaune' :
         echo 'Vous aimez le jaune';
         break;
     case 'vert' :
         echo 'Vous aimez le vert';
         break;
     default: // Cas par défaut, on ne rentre dans aucun des cas précédent.
         echo "Vous n'aimez ni le bleu, ni le rouge, ...";
         break;
 }

 /*
     EXERCICE :
     Pouvez-vous faire la même chose que le switch
     ... avec des if/else ? est-ce possible ?
 */

 if ( $couleur == "bleu" ) {
     echo 'Vous aimez le bleu';
 } else if ($couleur == 'rouge') {
     echo 'Vous aimez le rouge';
 } else if ($couleur == 'jaune') {
     echo 'Vous aimez le jaune';
 } else if ($couleur == 'vert') {
     echo 'Vous aimez le vert';
 } else {
     echo "Vous n'aimez ni le bleu, ni le rouge,  ...";
 }

 // ------------------------------------------------------------

 echo '<hr><h2>Les Fonctions prédéfinies</h2>';

 // A regarder : http://overapi.com/php

 /*
Exemple avec la fonction date() qui permet de  renvoyer la date du jour au format souhaité
https://www.php.net/manual/fr/function.date.php
*/
 echo '<br>Date : <br>';
 print date('d/m/Y');
 echo '<br>';
 print date('Y M d D');

 echo '<hr><h2>Les Fonctions prédéfinies : string </h2>';

 $email1 = "rosmaelanthony@gmail.com";
 echo strpos ($email1,"@"); //strpos = string position
/*
La fonction strpos() indique la position du caractère @ dans la chaine.
On commence à, 0.
*/
$email2 = "hugo";
echo strpos ($email2,"@");
echo'<br>';
/**cette ligne ne sort rien pourtant il y à une valeur. FALSE : boolean.
 * -------------------------------------------------------------------
 * avec var_dump on aperçoit le FALSE si le caractère @n'est pas trouvé
 * ----------------------------------------------------------------------
 * var_drump est une instruction d'affichauge amélioré que l'on utilise
 * régulièrement en phase de développement.
 */
var_dump(strpos($email2,"@"));

/**strpos()permet de trouver la position d'un caractère dans une chaine de caractère
 * --------------------------------------------------------------------------------
 * Succès : int Entier
 * echec : boolean false
 * --------------------------------------------------------------------------------
 * paramètre : 
 * 1.La chaîne dans laquelle effectuer la recherche
 * 2.Le caractère / l'information à chercher
 */

 $phrase = "je suis une phrase et j'aime ce que je, suis.";
 echo iconv_strlen( $phrase ) .'<br>';

 /**iconv_strlen() permet de retourner le nombre de caractère d'une chaine
  * ---------------------------------------------------------------------
  valeur retour : Retourne le nombre de caractères , sous la forme d'un entier.
  succès : int 
  echec : boolean false : 0
  ------------------------------------------------------------------------
  paramètre:
  1. la chaine de caractère pour laquelle nous souhaitons trouver la taille.
  */
   
$texte = "Il circule des centaines de versions différentes du Lorem ipsum, mais ce texte 
aurait originellement été tiré de 
louvrage écrit par Cicéron en  J.-C., De finibus bonorum.
Il circule des centaines de versions différentes du Lorem ipsum, mais ce texte 
aurait originellement été tiré de 
louvrage écrit par Circule";
 echo '<br>';
echo substr ($texte,0,50) .'...<a href="#"> Lire la suite </a>';
 
/**iconv_strlen() retourne une partie d'une chaine
  * ---------------------------------------------------------------------
  valeur retour : 
  succès : string
  echec : boolean false 
  ------------------------------------------------------------------------
  paramètre:
  1. chaine d'entrée ( la chaine qu'on souhaiite couper)
  2. start ; position de début
  3.length : nb de caractères souhaités
  */



  echo '<hr><h2>Les Fonctions Utilisateurs</h2>';

/**les fonctions qui ne, sont pas prédéfinie en PHP
 * sont déclarer puis exécuter par l'utilisateur.
 * -----------------------
 * autrement dit, vous avez la possibilité de creez
 * vos propres fonction PHP
 * --------------------------
 * realisons une fonction permettant de tirer un trait 
 * sur la page.
 */

 function separator() { //cette focntion ne recoit, pas d'argument.
     echo "<br><hr><br>";
 }

 separator(); //execution de notre fonction.

/**fonction avec arguments
 * les ($) arguments sont des parametres fournis par la fonction.
 * ils lui permettent de completer ou modifier son comportement
 * initialement prevu.
 */

function bonjour( $prenom ) {
return  "bonjour $prenom <br>";
}


echo bonjour("hugo");
echo bonjour("léna");
echo bonjour("melissa");

//-----------------------------------------------------------------

separator();


   // EXERCICE :
    //1. Créer une fonction permettant de calculer la somme de 2 nb.

    function addition ($nb1,$nb2){
        return $nb1+$nb2;
    }
    
    $resultat = addition (130,15);
    echo $resultat ;

   // 2. Créer une fonction permettant de générer des titres h3

   echo titre('Je suis développeuse web'); // il est possible d'exécuter 
   //une fonction avant qu'elole, soit d'éclarer.

   function titre ($h3){
       return "<h3>$h3</h3>"; // a partir du return on quitte la fonction.
       //TOUT CE QUI VIENT APRES NE S'EXECUTERA PAS.
   }

  //  3. Créer une fonction permettant de calculer la TVA 20% (1.2)

   function calculTva ( $montantHT ){
    return $montantHT *1.2;
   }

   echo '20EUR HT soit' . calculTva(20) . 'EUR TVA <br>';
   echo '40EUR HT soit' . calculTva(40) . 'EUR TVA <br>';

   echo '<br>';
   separator();
  //  4. Créer une fonction permettant de calculer la TVA plusieurs taux. normal : 20% ou 1.2 | réduit : 5.5% ou 1.055

  function calculTvaTaux( $montantHT, $tauxTva=1.2 ){
    return $montantHT * $tauxTva;
   }
   echo '10EUR HT soit' .calculTvaTaux(10) .'euro TVA <br>';
   echo '10EUR HT soit' .calculTvaTaux(10,1.055) .'euro TVA reduite <br>';

 //  5. BONUS : Réaliser une fonction permettant de générer une accroche de X caractères passé paramètres, sans couper de mot.

 //   6. BONUS : Challenge Réaliser une fonction PHP permettant de
 //   convertir une chaine en slug. slugify().

separator();
echo '<hr><h2>Les Boucles</h2>';

for( $i = 0 ; $i < 10 ; $i++){
    echo $i . '<br>';
}
 
//exercice : en partant de l'exemple et en utilisant une bouclle for, réalisez un select allat de 1 à 31. 

echo '<select>';

for ($i=1; $i <=31 ; $i++){
echo "<option> $i </option>";
}

echo '</select>';

?> <!--fermeture de php donc je passe en html-->

<table border="1">
<tr>
<?php
for ($i=1; $i <=31 ; $i++){
    echo "<td> $i <td>";
    }
?>
</td>
</table>

<?php // je retourne dans php

// meme exemple 100% PHP

echo '<table border="1"><tr>';
for ($i=1; $i <=31 ; $i++){
    echo "<td> $i <td>";
    }

echo '</td></table>';

//-------------------------------------------------------------------

echo '<hr><h2>Les Tableaux</h2>';

?>




