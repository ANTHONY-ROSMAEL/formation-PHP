<?php

/*
        Inclusion de la connexion à ma BDD.
        ------------------------------------
        Grâce au require_once, ma variable $db
        est maintenant disponible dans cette page.
        Je peux donc utiliser $db pour accéder à
        ma base de données.
    */
    require_once 'config/database.php';

    /*
        OBJECTIF : Réaliser, Valider et Insérer les données
        d'un formulaire.

        CONSIGNE :
            1. Créer une BDD 'contact' permettant de stocker
            les informations d'un formulaire :
                - id
                - email
                - sujet
                - message

            2. Créer un formulaire bootstrap permettant la saisie
            de ces champs.

            3. A la soumission du formulaire, vérifiez les données :
                - Tous les champs sont obligatoire ;
                - Vérifier le format du champ 'email' ;
                - Le 'message' doit avoir 15 caractères minimum.

            4. Insérer les données vérifiées dans votre BDD.

            BONUS : Afficher un message de confirmation / d'erreur
            à l'utilisateur grâce à une alerte bootstrap.
    */

    

        //print_r( $_POST );


        $email = $sujet = $message = null;

        if(!empty($_POST)) {
          $email = $_POST['email'];
          $sujet = $_POST['sujet'];
          $message = $_POST['message'];
        }

        $errors =[];

        if (empty ($_POST['email'])) {
        $errors = ['vous avez oubliez de tapez votre mot de passe'];
        //print_r( $errors );
        }

        if (empty ($_POST['sujet'])) {
          $errors = ['vous avez oubliez votre sujet'];
         // print_r( $errors );
          }

          if (strlen ($_POST['message']) < 15) {
            $errors = ['vous devez tapez au minimum 15 caractères'];
           // print_r( $errors );
            }
            if ( empty($errors) ) {
              
          }


          if(empty($errors)) {

            $content = '
                <div class="alert alert-success">
                    Merci, votre formulaire : <strong>' . $sujet . '</strong>
                    a bien été envoyé !
                </div>
            ';

          
            $email = $sujet = $message  = null;

        } else {

            $content = '
                <div class="alert alert-danger">
                    Attention, veuillez bien remplir vos champs.
                </div>
            ';

        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulaire de contact</title>
</head>
<body>
<div class="container">
    <h1 style="text-align : center;"> Formulaire de contact </h1>
    <?= $content ?>
    <form method="post" action="02-FormulairePDO.php">
    <!------mail---->
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control <?= isset($errors['titre']) ? 'is-invalid' : '' ?>"
    value="<?= $email ?>" name="email" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted"></small>
    <div class="invalid-feedback">
    <?= isset($errors['email']) ? $errors['email'] : '' ?>
  </div>
  </div>
  <!------sujet--------->
  <div class="form-group">
    <label for="exampleFormControlInput1">Sujet</label>
    <input type="text" class="form-control <?= isset($errors['titre']) ? 'is-invalid' : '' ?>" 
    value="<?= $sujet ?>" name ="sujet" placeholder="votre sujet">
    <div class="invalid-feedback">
   <?= isset($errors['sujet']) ? $errors['sujet'] : '' ?>
  </div>
  </div>
  <!--------message------>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control <?= isset($errors['titre']) ? 'is-invalid' : '' ?>" name="message" rows="3" placeholder="tapez votre message"><?= $message ?></textarea>
    <div class="invalid-feedback">
  <?= isset($errors['message']) ? $errors['message'] : '' ?>
  </div>
  </div>
  <button type="submit" class="btn btn-primary">envoyer</button>
  </div>
</body>
</html>