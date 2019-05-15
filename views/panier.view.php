<?php
$title = "Accueil";
require ('partials/header.php');
require ('partials/nav.php'); ?>
<div class="padbody"></div>
<body>
    <div class="container">
        <h1 class="text-danger"><i class="fas fa-shopping-cart fa-2x"></i> Mon pannier</h1>
        <form action="" method="POST">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Nom du produit</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Quantite</th>
                    <th scope="col">Total</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php while ($product = $products->fetch()) {
                    $nbre = $product->id_categorie.$product->id;
                    $qte = $_SESSION["panier"][$nbre]["qte"];
                    $prix = $product->price * $qte; ?>
                    <tr>
                        <th width="100" height="100" style="background: #FFF;"><img class="card-img-top" src="assets/thumb/<?= $product->image; ?>" alt=""></th>
                        <td style="padding-top: 40px;"><?= $product->name; ?></td>
                        <td style="padding-top: 40px;"><?= $product->price; ?> FCFA</td>
                        <td style="padding-top: 40px;"><input type="text" value="<?= $qte; ?>" name="qte[<?= $nbre ?>]"></td>
                        <td style="padding-top: 40px;"><?= $prix; ?>FCFA</td>
                        <td style="padding-top: 40px;"><a href="delitem.php?c=<?= $product->id_categorie ?>&id=<?= $product->id ?>"><i class="fa fa-trash"></i></a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <input class="btn btn-secondary" type="submit" value="Recalculer" name="recal">
            <div class="float float-right">
                <div class="btn btn-warning">Total : 20000 FCFA</div>
                <a href="" class="btn btn-primary">Commander</a>
            </div>
        </form>
    </div>
</body>
<div class="padbody"></div>


<?php require ('partials/footer.php'); ?>