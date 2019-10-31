<?php
require_once(__DIR__.'partials/header.php');

//recuperation du nom de la categorie dans l'URL.
$nom_categorie = (isset($_GET['nom_categorie'])) ? $_GET ['nom_categorie'] : '';

//recuperation de l'ID de la categorie dans L'url 
$id_categorie = (isset($_GET['id_categorie'])) ? $_GET ['id_categorie'] : 0;

//je recupere les articles de la catégorie
$articles = getArticlesByCategorieId($id_categorie);
?>


<div class="p-3 mx-auto text-center">
<h1 class="d-4"><?php echo $nom_categorie; ?> </h1>
</div>
<div class=" py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($articles as $article) { ?>
                <div class="col-md-4 mt-4">
                    <div class="card shadow-sm">
                        <img  src="assets/img/<?= $article['image'] ?>" 
                        alt="<?= $article['titre'] ?>">
                        <div class="card-body">
                         <h5 class="card-title"><?= $article['titre'] ?></h5>
                        <p class="card-text"> <?= summarize($article['contenu']) ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="btn btn-primary">Lire la suite</a>
                        </div>
                    </div><!--fin de card-body-->
                </div><!--fin de card-->
            </div><!--fin de col-md-4-->
            <?php } ?>
         </div><!--fin de .row-->
    </div><!--fin de .container-->
</div> <!--fin de bg-light--

<?php

require_once(__DIR__.'partials/footer.php');

?>