<?php
/**nous allons definir des fonctions qui seront utile pour 
gerer nos auteurs(membres) */

/*Vérifiez l'existence d'un membre dans la base de données
Inscription d'un Membre
connexion un membre
Déconnexion

*/

/*
* Permet l'inscription d'un auteur / membre dans la BDD
Retourne true ou 1 (oui) si l'insertion a été faite correctement
retourne false ou 0 si une erreur survient
 */
function Inscription($prenom, $nom, $email, $password) {

    global $db;

    $query = $db->prepare('
    INSERT INTO auteur (prenom, nom, email, password)
    VALUES (:prenom, :nom, :email, :password)
    ');

    $query->bindValue('prenom', $prenom, PDO::PARAM_STR);
    $query->bindValue('nom', $nom, PDO::PARAM_STR);
    $query->bindValue('email', $email, PDO::PARAM_STR);
    $query->bindValue('password', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);

    return $query->execute();
}

/*
* Permet la connexion d'un membre dans la BDD
Retourne true ou 1 (oui) si l'insertion a été faite correctement
retourne false ou 0 si une erreur survient
 */
function connexion($email, $password) {
global $db;
$sql = 'SELECT *FROM auteur WHERE email = :email';
$query = $db->prepare($sql);
$query->bindValue(':email', $email, PDO::PARAM_STR);
$query->execute();

//Récupération de l'auteur dans la base 
$auteur = $query->fetch();

// on vérifie si un auteur a été trouver et  que  le mot de passe correspond à  celui qui est dans la base de données de l'auteur.

if($auteur && password_verify($password, $auteur['password'])){
    
    //mettre en session les infos de l'auteur NE PAS OUBLIER START_SESSION !!!
    $_SESSION['auteur'] = $auteur;  //je stock dans ma session PHP à la clé auteur, mon tableau associatif $auteur.
    return true;
}
return false;


}









?>