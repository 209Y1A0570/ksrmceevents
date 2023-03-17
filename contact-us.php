<!doctype html>
    <html lang="eng">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Contact Us</title>
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

            <main>
                <section class="abt-01">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="seting">
                                    <h3>Contact Us</h3>
                                    <ol>
                                        <li>Home <i class="fas fa-chevron-double-right"></i></li>
                                        <li>Contact Us</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
				<?php
				#errors disply in bellow field,take errors variable empty
				$msg="";
				if(isset($_POST['submit']))
				{
					$N=$_POST['fname'];
					$eM=$_POST['email'];
					$sb=$_POST['sub'];
					$ms=$_POST['msg'];
					
					//echo $fN;
					if($N==""|| $eM=="" || $sb=="" || $ms=="")
					{
						if($N=="")
						{
						$msg="<b class='text-danger'>enter Your Name</b>";	
						}
						else if($eM=="")
						{
						$msg="<b class='text-danger'>enter Your email</b>";	
						}
						
						else if($sb=="")
						{
						$msg="<b class='text-danger'>enter Your subject</b>";	
						}
						else
						{
						$msg="<b class='text-danger'>enter Your message</b>";	
						}
					}
					else
					{
					$msg="<b class='text-success'>SUCCESS</b>";
					include("include/db.php");
					
					#duplicate data inset case how to disply error message
					$query_select='select * from contact where email="'.$eM.'"';
					
					$run_search_query=mysqli_query($conn,$query_select) or die(mysqli_error($conn));
					
					$count=mysqli_num_rows($run_search_query);
					
					//echo $count;
					
					if($count==0){
						$myQuery='INSERT INTO contact (name,email,subject,message ) VALUES ( "'.$N.'", "'.$eM.'", "'.$sb.'", "'.$ms.'")';
						
						#run Query
						$run_insert_query=mysqli_query($conn,$myQuery) or die (mysqli_error($conn));
						
						if($run_insert_query)
						{
						$msg="<div class='text-success font-weight-bold'>successfully inserted</div>";
						}
						else
						{
						$msg="Not inserted";	
						}
					}
					else{
					$msg="<div class='text-danger font-weight-bold'>Dublicate Data Entry</div>";	
						
					}
					
					}
				}
				?>
				<section class="bg-001">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="heading">
									<h2>GET IN TOUCH</h2>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="contact-box">
									<ul>
										<li>First Floor,Vincent Plaza, Kuzhithurai,Marthandam, Kanyakumari Dist
											Tamilnadu, India - 629163</li>
										<li>sales@smarteyeapps.com</li>
										<li>+91 9751791203</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="contact-box">
									<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="my-form">
									<div class="form-group">
										<input type="text" class="form-control"  placeholder="Enter Name" name="fname" value="<?php if(isset($_POST['submit'])){ echo $_POST['fname'];}?>">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Enter email" name="email" value="<?php if(isset($_POST['submit'])){ echo $_POST['email'];}?>">
									</div>
									<div class="form-group">
										<input type="text" class="form-control"  placeholder="Enter subject" name="sub" value="<?php if(isset($_POST['submit'])){ echo $_POST['sub'];}?>">
									</div>
									<div class="form-group">
										<textarea type="text" class="form-control"  placeholder="Enter msg" name="msg" value="<?php if(isset($_POST['submit'])){ echo $_POST['msg'];}?>"></textarea>
									</div>                                     
									<input type="submit" name="submit" class="btn btn-primary">
									<p><?php echo $msg; ?></p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>
    <?php
	require_once("include/footer.php")
	?>