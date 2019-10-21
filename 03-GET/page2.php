<h1>Page 2</h1>

<?php 
/**ON PEUT ACCEDER AUX DONNEES DE L'URL grâce à $_GET.
 * c'est une superglobale, elle s'écrit toujours en majuscule.
 * S'il n'y a aucune information dans l'url alors $_get est "empty".
 */

 echo'<pre>';
 print_r($_GET);
 echo'</pre>';

//--vérifier les informations de $_GET

//--SI $_GET n'est pas vide...
if(!empty($_GET)){
    //je peux aussi lire son contenu grâce a $_GET['cle']
    echo 'id : '.$_GET['id'] .'<br>' ;
    echo 'titre : '.$_GET['titre'] .'<br>' ;
    echo 'date : '.$_GET['date'] .'<br>' ;
}








?>

