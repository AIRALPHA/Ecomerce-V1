<?php
    require '../functions/functions.php';
    require '../functions/database.php';

    extract($_POST);
    $image = $_FILES['image']['name'];
    $img_src = $_FILES['image']['tmp_name'];

    if (isset($name, $price, $qte, $description, $category, $image))
    {
        $img_ext = strtolower(strrchr($image, "."));
        $ext_ok = ['.png', '.jpg', '.jpeg', '.jif'];
        if (in_array($img_ext, $ext_ok))
        {
            move_uploaded_file($img_src, "../assets/thumb/".$image);
        }
        $query = $db->prepare("INSERT INTO items(name, description, image, price, quantite, id_categorie) VALUES
                         (?, ?, ?, ?, ?, ?)");
        $query->execute([$name, $description, $image, $price, $qte, $category]);
    }

//


?>