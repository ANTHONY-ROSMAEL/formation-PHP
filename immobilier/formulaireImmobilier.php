<?php

require_once 'config/database.php';

 // Initialisation des variables
 $titre = $adresse = $ville = $codePostal = $surface = $prix = $location = $vente = $type = $description = null;


 //Si $_POST n'est pas vide
 // Affectation des données POST dans des variables 
 foreach ($_POST as $cle => $valeur) {
    $$cle=$valeur;
} 

// Déclaration du tableau vide
$errors = [];

if(empty($titre)) {
    $errors['titre'] = 'Vous avez oublié votre titre';
}
//adresse
if(empty($adresse)) {
    $errors['adresse'] = 'Vous avez oublié votre adresse';
}

//code postal 
if(empty($codePostal)) {
    $errors['codePostal'] = 'Vous avez oublié votre code postal ';
}
if(!empty($codePostal) && !filter_var($codePostal, FILTER_VALIDATE_FLOAT)) {
    $errors['codePostal'] = "Vérifiez le format de votre code postal.";
}
if((strlen($codePostal) < 5)) {
    $errors['codePostal'] = 'Vérifiez le format de votre code postal  ';
}

//ville
if(empty($ville)) {
    $errors['ville'] = 'Vous avez oublié la ville';
}

//surface
if(empty($surface)) {
    $errors['surface'] = 'Vous avez oublié de tapez la surface';
}
if(!empty($surface) && !filter_var($surface, FILTER_VALIDATE_INT)) {
    $errors['surface'] = "le format de votre surface est incorrect.";
}


//Prix
if(empty($prix)) {
    $errors['prix'] = 'Vous avez oublié le prix';
}
if(!empty($prix) && !filter_var($prix, FILTER_VALIDATE_INT)) {
    $errors['prix'] = "le format de votre prix est incorrect.";
}


//type
if(empty($type)) {
    $errors['type'] = 'Vous avez oublié de choisir';
}

// echo '<pre>';
 //print_r( $errors );
//echo '</pre>';


if (empty($errors)) {
        
    $query = $db->prepare('
    INSERT INTO `logements` (`titre`,`adresse`,`ville`,`code_postal`,`surface`,`prix`,`type`,`description`)
    VALUES (:titre, :adresse, :ville, :code_postal, :surface, :prix, :type, :description);
    ');
    $query->bindValue(':titre', $titre, PDO::PARAM_STR);
    $query->bindValue(':adresse', $adresse, PDO::PARAM_STR);
    $query->bindValue(':ville', $ville, PDO::PARAM_STR);
    $query->bindValue(':code_postal', $codePostal, PDO::PARAM_INT);
    $query->bindValue(':surface', $surface, PDO::PARAM_INT);
    $query->bindValue(':prix', $prix, PDO::PARAM_INT);
    $query->bindValue(':type', $type, PDO::PARAM_INT);
    $query->bindValue(':description', $description, PDO::PARAM_STR);


    $query->execute();
// Initialisation des variables
$titre = $adresse = $ville = $codePostal = $surface = $prix = $location = $vente = $type = $content = $description = null;
   
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Immobilier || Guadeloupe</title>

    <!--bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="container">
                <div>
                    <h1>Formulaire Immobilier Guadeloupe</h1>
                </div>
                <form method="POST">
                    <!-- ----------------------- Titre ----------------------- -->
                    <div class="form-group">
                        <label for="titre">Titre</label>
                        <input type="text" class="form-control <?= isset($errors['titre']) ? 'is-invalid' : '' ?>" 
                        id="titre" name="titre" value="<?= $titre ?>" placeholder="Titre">
                        <div class="invalid-feedback">
                            <?= isset($errors['titre']) ? $errors['titre'] : '' ?>
                        </div>
                    </div>
                    <!-- ----------------------- Adresse ----------------------- -->

                    <div class="form-group">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="form-control <?= isset($errors['adresse']) ? 'is-invalid' : '' ?>" 
                        id="adresse" value="<?= $adresse ?>" name="adresse" placeholder="adresse">
                        <div class="invalid-feedback">
                            <?= isset($errors['adresse']) ? $errors['adresse'] : '' ?>
                        </div>


                    </div>
                    <!-- ----------------------- Ville ----------------------- -->
                    <div class="form-group">
                        <label for="ville">Ville</label>
                        <input type="text" class="form-control <?= isset($errors['ville']) ? 'is-invalid' : '' ?>" 
                        id="ville" value="<?= $ville ?>" name="ville" placeholder="ville">
                        <div class="invalid-feedback">
                            <?= isset($errors['ville']) ? $errors['ville'] : '' ?>
                        </div>


                    </div>
                    <!-- ----------------------- Code Postal ----------------------- -->
                    <div class="form-group">
                        <label for="codePostal">Code Postal</label>
                        <input class="form-control <?= isset($errors['codePostal']) ? 'is-invalid' : '' ?>" 
                        id="codePostal" value="<?= $codePostal ?>" name="codePostal" placeholder="97000">
                        <div class="invalid-feedback">
                            <?= isset($errors['codePostal']) ? $errors['codePostal'] : '' ?>
                        </div>
                    </div>
                    <!-- ----------------------- Surface ----------------------- -->

                    <div class="form-group">
                        <label for="surface">Surface</label>
                        <input class="form-control <?= isset($errors['surface']) ? 'is-invalid' : '' ?>" 
                        id="surface" value="<?= $surface ?>" name="surface" placeholder="surface">
                        <div class="invalid-feedback">
                            <?= isset($errors['surface']) ? $errors['surface'] : '' ?>
                        </div>

                    </div>
                    <!-- ----------------------- Prix ----------------------- -->

                    <div class="form-group">
                        <label for="prix">Prix</label>
                        <input class="form-control <?= isset($errors['prix']) ? 'is-invalid' : '' ?>" 
                        id="prix" value="<?= $prix ?>" name="prix" placeholder="Prix de l'annonce... Ex : 5">
                        <div class="invalid-feedback">
                            <?= isset($errors['prix']) ? $errors['prix'] : '' ?>
                        </div>

                    </div>

                    <!-- ----------------------- type----------------------- -->


                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input <?= $type == 'location' ? 'checked' : '' ?> class="form-check-input" type="radio" name="type" id="location" value="location">
                            <label class="form-check-label" for="location">Location</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input <?= $type == 'vente' ? 'checked' : '' ?> class="form-check-input" type="radio" name="type" id="vente" value="vente">
                            <label class="form-check-label" for="vente">Vente</label>
                        </div>
                    </div>

                    <!-- ----------------------- Description----------------------- -->
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" class="form-control" id="description" value="<?= $description ?>" 
                        name="description" placeholder="description.."></textarea>

                    </div>

                    <button type="submit" class="btn btn-block btn-success">Validé</button>
                </form>
            </div>
        </div>
    </div>

                        