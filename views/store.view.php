<?php
$title = "Boutique";
require ('partials/header.php');
require ('partials/nav.php'); ?>
    <link rel="stylesheet" href="assets/css/store.css">
    <meta charset="utf-8">
<div class="padbody"></div>
<div class="store container">
    <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-robe" data-toggle="pill" href="#robe" role="tab" aria-controls="robe" aria-selected="true">Robes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-pantalon" data-toggle="pill" href="#pantalon" role="tab" aria-controls="pantalon" aria-selected="false">Pantalons</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-chaussure" data-toggle="pill" href="#chaussures" role="tab" aria-controls="chaussure" aria-selected="false">Chaussures</a>
        </li>
    </ul>
    <div class="tab-content text-center" id="pills-tabContent">
        <div class="tab-pane fade show active" id="robe" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row">
                <?php while ($robe = $robes->fetch()) { ?>
                <div class="col-md-4 col-sm-6">
                    <div class="thumnail">
                        <img src="assets/thumb/<?= $robe->image; ?>" alt="">
                        <div class="price"><?= $robe->price; ?> XAF</div>
                        <div class="caption bg-secondary">
                            <h4 class="lead text-uppercase"><?= $robe->name; ?></h4>
                            <p class="lead"><?= $robe->description; ?></p>
                            <a href="addpanier.php?c=<?= $id_robes ?>&id=<?= $robe->id; ?>" class="btn btn-outline-warning col-md-12"><i class="fas fa-shopping-cart"></i> Commander</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="tab-pane fade" id="pantalon" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row">
                <?php while ($pantalon = $pantalons->fetch()) { ?>
                <div class="col-md-4 col-sm-6">
                    <div class="thumnail">
                        <img src="assets/thumb/<?= $pantalon->image; ?>" alt="">
                        <div class="price"><?= $pantalon->price; ?> XAF</div>
                        <div class="caption bg-secondary">
                            <h4 class="lead text-uppercase"><?= $pantalon->name; ?></h4>
                            <p class="lead"><?= $pantalon->description; ?></p>
                            <a href="addpanier.php?c=<?= $id_pantalons ?>&id=<?= $pantalon->id; ?>" class="btn btn-outline-warning col-md-12"><i class="fas fa-shopping-cart"></i> Commander</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="tab-pane fade" id="chaussures" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="row">
                <?php while ($chaussure = $chaussures->fetch()) { ?>
                <div class="col-md-4 col-sm-6">
                    <div class="thumnail">
                        <img src="assets/thumb/<?= $chaussure->image; ?>" alt="">
                        <div class="price"><?= $chaussure->price; ?> XAF</div>
                        <div class="caption bg-secondary">
                            <h4 class="lead text-uppercase"><?= $chaussure->name ?></h4>
                            <p class="lead"><?= $chaussure->description; ?></p>
                            <a href="addpanier.php?c=<?= $id_chaussures ?>&id=<?= $chaussure->id; ?>" class="btn btn-outline-warning col-md-12"><i class="fas fa-shopping-cart"></i> Commander</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
    <div class="padbody"></div>
<?php require ('partials/footer.php'); ?>