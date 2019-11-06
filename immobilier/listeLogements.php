<?php
require_once 'config/database.php';

$titre = $adresse = $ville = $codePostal = $surface = $prix = $location = $vente = $type = $content = $description = null;
foreach ($_POST as $cle => $valeur) {
    $$cle=$valeur;
} 



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

     
}
// Récupération des données de la table logements ET AFFICHAGE DANS UN TABLEAU HTML.
$query = $db->query('SELECT * FROM logements'); 
$logements = $query->fetchAll();

foreach ($logements as $logement) {
    echo '<td>' . ''. '</td>';
    }

  

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>liste des Logements</title>
         <!--bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
    <div class="container">
         <div class="row">
             <div class="col">
                 <table class="table">
                <thead>
                <tr>
                 <th scope="col">#</th>
                 <th scope="col">titre</th>
                 <th scope="col">adresse</th>
                 <th scope="col">ville</th>
                 <th scope="col">code postal</th>
                 <th scope="col">surface</th>
                 <th scope="col">prix</th>
                 <th scope="col">description</th>
                 
     
                 </tr>
                 </thead>
                <tbody>
                <?php foreach ($logements as $logement) { ?>
                 <tr>
                 <th scope="row"><?php echo $logement['id_logements'] ?></th>
                 <td><?php echo $logement['titre'] ?></td>
                 <td><?php echo $logement['adresse'] ?></td>
                 <td><?php echo $logement['ville'] ?></td>
                 <td><?php echo $logement['code_postal'] ?></td>
                 <td><?php echo $logement['surface'] ?></td>
                 <td><?php echo $logement['prix'] ?></td>
                 <td><?php echo $logement['description'] ?></td>
    
                </tr>  
                 <?php }//Fin du foreach ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
    </html>