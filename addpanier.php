<?php
    require 'functions/database.php';
    require 'functions/functions.php';
    session_start();
    if (isset($_GET['c']) && isset($_GET['id'])){
        $c = intval($_GET['c']);
        $id = intval($_GET['id']);
        create_panier();
        add_item($c, $id);
        header("Location:panier.php");
    }
?>