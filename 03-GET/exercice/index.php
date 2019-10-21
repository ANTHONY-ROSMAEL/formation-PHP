 <!---inclusion du header-->
   <?php include_once './includes/header.php';  ?>
   
   <?php
   //apercu des donnees $_GET
   print_r($_GET);
  
   //si $_GET ['page'] n'est pas vide
   if(!empty($_GET['page'])){

    // je crée une variable $_page
    $page=$_GET['page'];
   }else{
     $page = 'acceuil';
   }

   ?>

   <!--Afficher les données de $page-->
  <h3>Je suis la page <? =$page ?></h3>

  <!--on, inclus $page dans notre fichier .
  include './pages/accueil.php';
   include './pages/presentation.php';
   ------------------------------------
   si $page ou $_GET['page'] égale à accueil
   alors j'inclus accueil.php dans ma page.
   pareil pour les autres pages.
   -------------------------------------
  -->
   

  
  <!---inclusion du footer-->
<?php  include_once './includes/footer.php';?>
