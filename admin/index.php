<?php

//Inclusion des fichiers importants
require_once ('../functions/constants.php');
require_once('../functions/database.php');
require_once ('../functions/functions.php');
require_once ('../functions/function_admin.php');
?>

<?php
    //Recuperation des produits
    // 1 --- Robes
    $id_robes = get_id_categorie("robes");
    $robes = $db->prepare("SELECT * FROM items WHERE id_categorie = ?");
    $robes->execute([$id_robes]);

    // 2 --- pantalons
    $id_pantalons = get_id_categorie("pantalons");
    $pantalons = $db->prepare("SELECT * FROM items WHERE id_categorie = ?");
    $pantalons->execute([$id_pantalons]);

    // 3 --- chaussure
    $id_chaussures = get_id_categorie("chaussures");
    $chaussures = $db->prepare("SELECT * FROM items WHERE id_categorie = ?");
    $chaussures->execute([$id_chaussures]);

    // Selection des categorie
    $categos = $db->query("SELECT * FROM categories");
?>



<?php require ('index.view.php'); ?>