<?php
   
    require_once(__DIR__.'/../config/database.php');
    
    // Récupération des catégories de la base
    // $categories = ['Politique', 'Economie', 'Culture', 'Sports'];
    
    // Récupération des catégories de la base
    // $categories = ['Politique', 'Economie', 'Culture', 'Sports'];
    $query = $db->query('SELECT*FROM categorie');
    $categories = $query->fetchAll();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>ActuNews | Premier site d'actualité en France</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles personnalisés -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    
<!-- Menu du site -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

        <ul class="navbar-nav mr-0 mt-2 mt-lg-0 ">
            <li class="nav-item active">
                <a class="nav-link" href=".">ActuNews<span class="sr-only">(current)</span></a>
            </li>
            <?php foreach ($categories as $categorie) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="categorie.php?nom_categorie=<?= $categorie['nom'] ?>">
                        <?= $categorie['nom'] ?></a>
                </li>
            <?php } ?>
        </ul>

        <ul class="navbar-nav mx-auto"></ul>

        <ul class="navbar-nav justify-content-end">
         
                
       
      
                <a class="nav-item btn btn-outline-dark mx-1 navbar-right" href="connexion.php">Connexion</a>
                <a class="nav-item btn btn-outline-dark mx-1 navbar-right" href="inscription.php">Inscription</a>
           
        </ul>


    </div>
</nav>
<!-- Fin du Menu du site -->