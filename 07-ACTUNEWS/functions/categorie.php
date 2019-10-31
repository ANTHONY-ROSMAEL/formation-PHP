<?php
   function getcategories(){
    global $db;
   $query = $db->query('SELECT*FROM categorie');
    $categories = $query->fetchAll();
    }

    $categories = getcategories();
    
?>