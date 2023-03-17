<!doctype html>
    <html lang="eng">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>events</title>
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
                <section class="abt-01">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="seting">
                                    <h3>EVENTS</h3>
                                    <ol>
                                        <li>Home <i class="fas fa-chevron-double-right"></i></li>
                                        <li>events</li>
                                    </ol>
                                </div>
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
				include("include/services-part.php")
				?>
                </main>
    <?php
	require_once("include/footer.php")
	?>
	</body>
</html>
