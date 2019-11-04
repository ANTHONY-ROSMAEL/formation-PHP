<?php
require_once(__DIR__.'/partials/header.php');
//recuperation du nom de la categorie dans l'URL.
$nom_categorie = (isset($_GET['nom_categorie'])) ? $_GET['nom_categorie'] : '';

//recuperation de l'id de la catégorie dans l'URL.
$id_categorie = (isset($_GET['id_categorie'])) ? $_GET['id_categorie'] : 0;

//je recupère les articles de la catégorie
$articles = getArticlesByCategorieId($id_categorie);

?>






<div class="p-3 mx-auto text-center">
<h1 class="display-4"><?php echo $_GET['nom_categorie']; ?></h1>
</div>
<div class=" py-5 bg-light">
    <div class="container">
        <div class="row">
        <?php foreach ($articles as $article) { ?>
            <div class="col-md-4 mt-4">
                <div class="card shadow-sm">
                <img src="assets/img/article/<?= $article['image'] ?>" class="card-img-top" 
                alt="<?= $article['titre'] ?>">
                    <div class="card-body">
                     <h5 class="card-title">
                     <?= $article['titre'] ?>
                     </h5>
                     <p class="card-text">
                     <?= summarize($article['contenu']) ?>
                    </p>
                    <div class="display-flex justify-content-between align-items-center">
                    <a href="#" class="btn btn-primary">
                    Lire la suite 
                    </a>
                    <small class="text-muted">
                    <?= $article['prenom'] . ' ' . $article['nom'] ?>
                    </small>
                    </div><!--d-flex-->
                    </div> <!--fin Card-body-->
                </div> <!--fin du card-->
            </div> <!--fin col -->
        <?php } ?>
        </div> <!--fin row-->
    </div> <!--fin du container-->
</div> <!-- bg-light-->

<?php

require_once(__DIR__.'/partials/footer.php');

?>