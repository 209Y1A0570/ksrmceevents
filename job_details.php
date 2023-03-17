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
				$id=$_GET['id'];
				//echo $id;
				$query_select='select * from careers where job_id='.$_GET['id'].'';
				$run_search_query=mysqli_query($conn,$query_select) or die (mysqli_error());

				 while($a=mysqli_fetch_array($run_search_query))
				{
				  $job_name=$a['job_name'];
				  $job_location=$a['job_location'];
				  $job_package=$a['job_package'];
				  $job_details=$a['job_details'];
				  $job_image=$a['job_image'];

				}
			
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
                                    <h2>JOB DESCRIPTION</h2>
                                </div>
                            </div>
							
							
                        </div>
						<img src="assets/images/careers/<?php echo $job_image; ?>" style="width:100%;height:300px" >
							<h2  class="text-center text-danger my-3"><?php echo $job_name; ?></h2>
							<div  class="lead">
								<?php echo $job_details; ?>
							</div>
							<p class="lead"><b>PACKAGE: <?php echo $job_package; ?></b></p>
							<p  class="lead"><b>LOCATION: <?php echo $job_location; ?> </b></p>
							<a href="register.php" class="btn btn-primary">APPLY NOW</a>
                    </div>
                </section>
				
            </main>
			
    <?php
	require_once("include/footer.php")
	?>