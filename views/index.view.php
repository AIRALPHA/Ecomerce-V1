<?php
$title = "Accueil";
require ('partials/header.php');
require ('partials/nav.php'); ?>
    <link rel="stylesheet" href="assets/css/style.css">
<body>
    <div class="main-image">
        <h2> <?= WEBSITE_NAME ?></h2>
            <p>
                Vente des vetêments de marque <br><br><br><br><br><br><br>
                <a href="store.php" class="btn btn-danger btn-lg">Commencer !</a>
            </p>
    </div>
    <div class="container" style="font-size: 1.12em;">
        <p class="col-md-6 offset-3">
            <h3 class="text-center jumbotron">Nous proposons des vetêments pour femmes</h3>
        </p>
        <div id="main-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main-carousel-indicator" data-slide-to="0" class="active"></li>
                <li data-target="#main-carousel-indicator" data-slide-to="1"></li>
                <li data-target="#main-carousel-indicator" data-slide-to="2"></li>
                <li data-target="#main-carousel-indicator" data-slide-to="3"></li>
                <li data-target="#main-carousel-indicator" data-slide-to="4"></li>
                <li data-target="#main-carousel-indicator" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/bg-2.jpg" width="800" height="400" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/bg-3.jpg" width="800" height="400" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/bg-4.jpg" width="800" height="400" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/product-1.jpg" width="800" height="400" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/tes-1.jpg" width="800" height="400" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/product-7.jpg" width="800" height="400" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#main-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#main-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <section id="recommandation">
            <div class="container">
                <div class="red-divided"></div>
                <div class="heading">
                    <h2>Recommandations</h2>
                </div>
                <div id="recommandation-carousel" class="carousel slide text-center" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="assets/img/1.jpg" width="80" height="80" alt="" class="border border-dark rounded-circle" style="padding-bottom: 10px;">
                            <h3>"Ce site est vraiment incroyable, je vous le recommande fortement"</h3>
                            <h4 class="lead">AIR ALPHA</h4>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/1.jpg" width="80" height="80" alt="" class="border border-dark rounded-circle" style="padding-bottom: 10px;">
                            <h3>"j'ai utilise ce site une seule fois et je suis deja accros"</h3>
                            <h4 class="lead">ROSE JOYCE</h4>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/1.jpg" width="80" height="80" alt="" class="border border-dark rounded-circle" style="padding-bottom: 10px;">
                            <h3>"J'ai achetter un produit pour une fille sur ce site et elle est folle de moi"</h3>
                            <h4 class="lead">Idrice Roussin</h4>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#recommandation-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#recommandation-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
    </div><!-- /.container -->
</body>
<?php require ('partials/footer.php'); ?>