<?php
var_dump($_POST);
if (!empty($_POST)){ 
    echo '<br>prenom :' . $_POST['prenom'] .'<br>';
    echo '<br>nom :' . $_POST['nom'] .'<br>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire PHP</title>
</head>
<body>
  <h1>Formulaire</h1>  
  <!--créer un formulaire HTML avec deux champs:
  prenom + nom +submit.-->

    <form method="POST" action="formulaire1.php">
    <!--method : permet de preciser quelle méthode GET ou POST
    doit être utiliser par le navigateur vers la page "action".-->


    <label for="prenom">Prenom :</label>
    <!--ne pas oublier la propriété name-->
    <input type="text" id="prenom" name="prenom" 
    placeholder="saisissez votre prenom "><br>

<label for="nom">nom :</label>
    <input type="text" id="nom" name="nom" 
    placeholder="saisissez votre prenom "><br>

    <input type="submit" value="Envoyer Mes informations">
    </form>

</body>
</html>