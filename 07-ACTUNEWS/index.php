<?php
//VAR_dump pour verifier ce qu'il y a dedans.
//inclusion de header.php sur la page.
require_once(__DIR__.'/partials/header.php');

//recuperation des articles de la base de données.
//$article = getArticles();
?>

<!--ici viendra le contenu de ma page-->
<div class="p-3 mx-auto text-center">
    <h1 class="display-4">Actunews</h1>
</div>

<div class=" py-5 bg-light">
    <div class="container">
        <div class="row">
            <!--<?php foreach ($articles as $article) { ?>-->
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
                        <small class="text-muted">
                        <?= $article['prenom'].''.$article['nom'] ?>
                        </small>
                        </div>
                    </div><!--fin de card-body-->
                </div><!--fin de card-->
            </div><!--fin de col-md-4-->
            <?php } ?>
         </div><!--fin de .row-->
    </div><!--fin de .container-->
</div> <!--fin de bg-light-->

<?php

//inclusion de footer.php sur la page.
require_once(__DIR__.'/partials/footer.php');

?>