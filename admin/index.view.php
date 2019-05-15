<?php
    $title = "Admin";
?>
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico" />
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>
        <?= $title ?>
    </title>
    <body>
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow" style="padding-bottom: 100px;">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><?= WEBSITE_NAME ?></a>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="#"><?= "ADMIN"; ?></a>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="row" style="padding-top: 100px;">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-robe-tab" data-toggle="pill" href="#v-pills-robe" role="tab" aria-controls="v-pills-robes" aria-selected="true">Robes</a>
                        <a class="nav-link" id="v-pills-pantalons-tab" data-toggle="pill" href="#v-pills-pantalons" role="tab" aria-controls="v-pills-pantalons" aria-selected="false">Pantalons</a>
                        <a class="nav-link" id="v-pills-chaussures-tab" data-toggle="pill" href="#v-pills-chaussures" role="tab" aria-controls="v-pills-chaussures" aria-selected="false">Chaussures</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-robe" role="tabpanel" aria-labelledby="v-pills-robe-tab">
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Nom du produit</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php while ($robe = $robes->fetch()) { ?>
                                    <tr>
                                        <th style="padding-top: 40px;"><?= $robe->id; ?></th>
                                        <td width="100" height="100" style="background: #000;"><img class="card-img-top" src="../assets/thumb/<?= $robe->image; ?>" alt=""></td>
                                        <td style="padding-top: 40px;"><?= $robe->name; ?></td>
                                        <td style="padding-top: 40px;"><?= $robe->price; ?> FCFA</td>
                                        <td style="padding-top: 40px;"><?= $robe->quantite; ?></td>
                                        <td style="padding-top: 40px;">
                                            <a href="delitem.php?c=<?= $robe->id_categorie ?>&id=<?= $robe->id ?>"><i class="fas fa-trash"></i></a>
                                            &nbsp; &nbsp;
                                            <a href="modifitem.php?c=<?= $robe->id_categorie ?>&id=<?= $robe->id ?>"><i class="fas fa-edit"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="v-pills-pantalons" role="tabpanel" aria-labelledby="v-pills-pantalons-tab">
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Nom du produit</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php while ($pantalon = $pantalons->fetch()) { ?>
                                    <tr>
                                        <th style="padding-top: 40px;"><?= $pantalon->id; ?></th>
                                        <td width="100" height="100" style="background: #000;"><img class="card-img-top" src="../assets/thumb/<?= $pantalon->image; ?>" alt=""></td>
                                        <td style="padding-top: 40px;"><?= $pantalon->name; ?></td>
                                        <td style="padding-top: 40px;"><?= $pantalon->price; ?> FCFA</td>
                                        <td style="padding-top: 40px;"><?= $pantalon->quantite; ?></td>
                                        <td style="padding-top: 40px;">
                                            <a href="delitem.php?c=<?= $pantalon->id_categorie ?>&id=<?= $pantalon->id ?>"><i class="fas fa-trash"></i></a>
                                            &nbsp; &nbsp;
                                            <a href="modifitem.php?c=<?= $pantalon->id_categorie ?>&id=<?= $pantalon->id ?>"><i class="fas fa-edit"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="v-pills-chaussures" role="tabpanel" aria-labelledby="v-pills-chaussures-tab">
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Nom du produit</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php while ($chaussure = $chaussures->fetch()) { ?>
                                    <tr>
                                        <th style="padding-top: 40px;"><?= $chaussure->id; ?></th>
                                        <td width="100" height="100" style="background: #000;"><img class="card-img-top" src="../assets/thumb/<?= $chaussure->image; ?>" alt=""></td>
                                        <td style="padding-top: 40px;"><?= $chaussure->name; ?></td>
                                        <td style="padding-top: 40px;"><?= $chaussure->price; ?> FCFA</td>
                                        <td style="padding-top: 40px;"><?= $chaussure->quantite; ?></td>
                                        <td style="padding-top: 40px;">
                                            <a href="delitem.php?c=<?= $chaussure->id_categorie ?>&id=<?= $chaussure->id ?>"><i class="fas fa-trash"></i></a>
                                            &nbsp; &nbsp;
                                            <a href="modifitem.php?c=<?= $chaussure->id_categorie ?>&id=<?= $chaussure->id ?>"><i class="fas fa-edit"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <form action="add.php" method="POST" class="jumbotron" enctype="multipart/form-data">

                <h1 class="text-info">Ajouter Un Produit</h1>

                <div class="form-group">
                    <label for="name">Nom : </label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Le nom du produit">
                </div>
                <div class="form-group">
                    <label for="price">Prix : </label>
                    <input name="price" type="number" class="form-control" id="price" placeholder="Le prix du produit">
                </div>
                <div class="form-group">
                    <label for="qte">Quantité : </label>
                    <input name="qte" type="number" class="form-control" id="qte" placeholder="La quantite du produit">
                </div>
                <div class="form-group">
                    <label for="category">Categorie : </label>
                    <select class="form-control" name="category" id="category">
                        <?php while ($catego = $categos->fetch()) { ?>
                        <option value="<?= $catego->id; ?>"><?= $catego->id; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description : </label>
                    <textarea name="description" class="form-control" id="description" rows="3">Une petite description du produit</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image du produit : </label>
                    <input name="image" type="file" class="form-control-file text-primary" id="image">
                </div>
                <div class="row float-right">
                    <input type="submit" name="valider" value="Ajouter le produit" class="btn btn-success">
                    &nbsp;&nbsp;
                    <input type="submit" value="Annulé" class="btn btn-danger">
                </div>
            </form>
        </div>
    </body>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

<?php ; ?>