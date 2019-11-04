<?php
/*
retourne les categories du site 
depuis la base de données.

*/
  function getCategories() {
    global $db; // Récuperation du $db depuis l'espace global.
    $query = $db->query('SELECT * FROM categorie');
  return $query->fetchAll(); // on retourne les catégories de la BDD.
  }
    
    
?>