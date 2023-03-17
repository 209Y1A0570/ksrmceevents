<!doctype html>
    <html lang="eng">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Index</title>
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/font/flaticon.css">
            <link rel="stylesheet" href="assets/css/all.min.css">
            <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
            <link rel="stylesheet" href="assets/css/style.css">
        </head>

        <body>
            <?php
			require_once("include/navbar.php");
			?>
            <main>
                <section class="slider">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="banner-content text-light">
                                    <h3>Explore your favourite event</h3>
									<p>Be updated</p>
                                </div>
                            <img class="d-block w-100" src="assets/images/banner/5.png">
                            </div>
                            <div class="carousel-item">
                                <div class="banner-content text-light">
                                    <h3>Explore your favourite event</h3>
									<p>Be updated</p>
                                </div>
                            <img class="d-block w-100" src="assets/images/banner/5.png">
                            </div>
                            <div class="carousel-item">
                                <div class="banner-content text-light">
                                    <h3>Explore your favourite event</h3>
									<p>Be updated</p>
                                </div>
                            <img class="d-block w-100" src="assets/images/banner/5.png">
                            </div>
                        </div>
                    </div>
                </section>
                <?php
					include("include/work.php");
				?>
                <?php 
				include("include/eventscard.php")
				?>
				<?php
				include("include/gallery.html")
				?>	
			<?php
			include("include/news.php")
			?>			
			</main>
		<?php
		require_once("include/footer.php")
		?>
		</body>
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/plugins/owl.carousel.min.js"></script>
	<script src="assets/js/script.js"></script>

	</html>