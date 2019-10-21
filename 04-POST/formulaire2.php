<?php
print_r($_POST);
if(!empty($_POST)){
    echo '<br>prenom :' . $_POST['prenom'] .'<br>';
    echo '<br>nom :' . $_POST['nom'] .'<br>';
    echo '<br>email :' . $_POST['email'] .'<br>';
    echo '<br>mot de passe :' . $_POST['motDePasse'] .'<br>';
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
    <title>Formulaire 2 PHP</title>
</head>
<body>
    <!-- 
	1. Créer un formulaire d'inscription avec les champs suivants : prenom, nom, email et motdepasse

	2. Afficher à l'aide de $_POST les informations
sur la page.
-->

<form method="POST" action="formulaire2.php">
  <div class="form-group">
  <br>
  <label for="prenom">Prenom :</label>
    <input type="text" id="prenom" name="prenom" 
    placeholder="saisissez votre prenom "><br>

<label for="nom">nom :</label>
    <input type="text" id="nom" name="nom" 
    placeholder="saisissez votre prenom "><br>

    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" 
    aria-describedby="emailHelp" name="email" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"
     name="motDePasse" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>