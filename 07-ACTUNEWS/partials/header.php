<?php
//inclusion du fichier global
require_once(__DIR__.'/../functions/global.php');


//Inclusion du fichier database.php.
require_once(__DIR__.'/../config/database.php');
//Inclusion de nos fonctions.
require_once(__DIR__.'/../functions/categorie.php');
require_once(__DIR__.'/../functions/article.php');



//$categories = ['Politique', 'Economie', 'Culture', 'Sports'];

//recuperation des catégorie de la base de données

$categories = getCategories();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>ActuNews | Premier site d'actualité en France</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles personnalisés -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    
<!-- Menu du site -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ActuNews</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
  data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
  aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  <div class="navbar-nav">
        <a class="nav-link active" href="index.php">Accueil<span class="sr-only">(current)</span></a>
        <!--Les catégories du site -->
        <?php foreach ($categories as $categorie) { ?>
            <a class="nav-item nav-link" href="categorie.php?nom_categorie=<?= $categorie['nom'] ?>&id_categorie=<?= $categorie['id'] ?>">
            <?= $categorie['nom'] ?></a>
       <?php } ?>
       <a class="nav-item nav-link btn btn-outline-primary mx-1" href="connexion.php">
           Connexion
           </a>
           <a class="nav-item nav-link btn btn-outline-primary mx-1" href="inscription.php">
         Inscription
           </a>
  </div>
  </div>
</nav>
<!-- Fin du Menu du site -->