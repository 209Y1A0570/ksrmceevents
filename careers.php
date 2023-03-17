<!doctype html>
    <html lang="eng">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Blog</title>
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/font/flaticon.css">
            <link rel="stylesheet" href="assets/css/all.min.css">
            <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
            <link rel="stylesheet" href="assets/css/style.css">
        </head>

        <body>
		
            <?php
			include("include/navbar.php")
			?>
			<?php
			include("include/db.php");
			$sql="select * from careers";
			$run_search_query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
			$count=mysqli_num_rows($run_search_query);
			//echo $count;
			
			?>
            <main>
                <section class="abt-01">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="seting">
                                    <h3>Careers</h3>
                                    <ol>
                                        <li>Home <i class="fas fa-chevron-double-right"></i></li>
                                        <li>Careers</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-06">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading">
                                    <h2>Our Careers</h2>
                                </div>
                            </div>
							<?php 
								if($count>0){
								while($data=mysqli_fetch_array($run_search_query)){
								/*echo "<pre>";
								print_r($data);
								echo "</pre>";*/
							?>
							<div class="col-md-4 mt-3">
								<div class="card h-100">
									<img class="card-img-top w-100" src="assets/images/careers/<?php echo $data["job_image"];?>" alt="Card image" style="height:200px">
									<div class="card-body">
										<h4 class="card-title"><?php echo $data["job_name"];?></h4>
										<p class="card-text">Location: <?php echo $data["job_location"];?></p>
										<p class="card-text">Package: <?php echo $data["job_package"];?></p>
										<a href="job_details.php?id=<?php echo $data["job_id"];?>" class="btn btn-primary mt-3">ViewDetails</a>
										<a href="register.php" class="btn btn-success mt-3">APPLY</a>
									</div>
								</div>
							</div>
							<?php
								}
							}
							?>
							
                        </div>
                    </div>
                </section>
				
            </main>
			
    <?php
	require_once("include/footer.php")
	?>