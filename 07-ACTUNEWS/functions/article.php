<?php
/*
créer 3 fonctions.
getArticles() : permet de retourner tous les articles de la base.
getArticleById() : Permet de récupérer un article grâce à son ID
getArticlesByCategorieId() : permet de récuperer les articles d'une catégorie
grâce à l'ID de la categorie.

*/
/* retourne les articles de la base de données */
function getArticles(){
    global $db;
    $query = $db->query('SELECT * FROM article, auteur 
    WHERE article.auteur_id = auteur.id 
    ORDER BY article.id DESC');
    return $query->fetchAll();
}

/*recuperer un article dans la base par son ID */
function getArticleById($article_id){
global $db;
$sql = 'SELECT *FROM article WHERE id = :id';
$query = $db->prepare($sql);
$query->bindValue(':id', $article_id);
$query->execute();

return $query->fetch();
}
/**retourne les articles appartenant à l'ID de la catégorie passé
en paramètre */
function getArticlesByCategorieId($categorie_id){
global $db;
$sql = 'SELECT * FROM article, auteur 
WHERE article.auteur_id = auteur.id AND article.categorie_id = :id';
$query = $db->prepare($sql);
$query->bindValue(':id', $categorie_id);
$query->execute();

return $query->fetchAll();

}



?>