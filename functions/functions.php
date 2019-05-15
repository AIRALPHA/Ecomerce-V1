<?php
    function get_id_categorie($name){
        global $db;
        $query = $db->prepare("SELECT id FROM categories WHERE name = ?");
        $query->execute([$name]);
        $id = $query->fetch();
        return $id->id;
    }

    function create_panier(){
        if (!isset($_SESSION["panier"])){
            $_SESSION["panier"] = [];
        }
    }

    function add_item($c, $id){
        $nbre = $c.$id;
        if (isset($_SESSION["panier"][$nbre])){
            $_SESSION["panier"][$nbre]["qte"]++;
        }else{
            $_SESSION["panier"][$nbre] = [
                "categorie" => $c,
                "id_prod" => $id,
                "qte" => 1,
            ];
        }
    }
    function e($string)
    {
        return htmlspecialchars($string);
    }
?>