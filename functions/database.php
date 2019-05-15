<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_name = "dress";
    $db_password = "";

    try
    {
        $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $db->exec("set names utf8");
    }
    catch (PDOException $e)
    {
        die ("Erreur : ". $e->getMessage());
    }