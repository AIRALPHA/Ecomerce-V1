<?php
    session_start();
    $id = intval($_GET['id']);
    $c = intval($_GET['c']);

    $nbre = $c.$id;

    unset($_SESSION['panier'][$nbre]);
    header("Location:panier.php");
?>