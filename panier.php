<?php
session_start();
//Inclusion des fichiers importants
require_once ('functions/constants.php');
require_once('functions/database.php');
require_once ('functions/functions.php');

?>
<?php
    //Selection des informations des produits en session
    $ids = array_column($_SESSION["panier"], "id_prod");
    $qtes = array_column($_SESSION["panier"], "qte");
    $l_ids = implode(',', $ids);
    $products = $db->query("SELECT * FROM items WHERE id IN (".$l_ids.")");

    //Recalcul du prix des produits
    if (isset($_POST['recal'])){
        $nbre = array_keys($_POST['qte']);
        $q = array_values($_POST['qte']);
        $t = count($_POST['qte']);
        for ($i = 0; $i < $t; $i++){
            $_SESSION['panier'][$nbre[$i]]['qte'] = $q[$i];
        }
    }
?>

<?php require ('views/panier.view.php'); ?>