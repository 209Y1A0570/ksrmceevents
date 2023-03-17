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
                                    <h3>Edit Student</h3>
                                    <ol>
                                        <li>Home <i class="fas fa-chevron-double-right"></i></li>
                                        <li>Edit Student</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
				<?php
				#errors disply in bellow field,take errors variable empty
				$msg="";
				$id=$_GET["id"];
				if(isset($_POST['submit']))
				{
					$N=$_POST['fname'];
					$eM=$_POST['new_email'];
					$oldeM=$_POST['old_email'];
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
					if($oldeM==$eM)
						{
						$count=0;

						}
						else{
					
					#duplicate data inset case how to disply error message
					$query_select='select * from contact where email="'.$eM.'"';
					
					$run_search_query=mysqli_query($conn,$query_select) or die(mysqli_error($conn));
					
					$count=mysqli_num_rows($run_search_query);
						}
					
					//echo $count;
					
					if($count==0){
			$query_update='update contact set name="'.$N.'",email="'.$eM.'",subject="'.$sb.'",message="'.$ms.'"  where id='.$id.'';
			
			$run_update_query=mysqli_query($conn,$query_update) or die (mysqli_error());
			
			$msg='<div class="alert alert-success">Sucessfully Updated</div>';
			echo '<script>window.location.assign("contact-us.php");</script>';
			//header('location:contact-us.php');
		}
		else{
			$msg='<div class="alert alert-error alert-danger">email Already Exists </div>';	
			
		}
	
	}
}
$id=$_GET["id"];
include("include/db.php");
$query_select='select * from contact where  id='.$_GET['id'].'';
$run_search_query=mysqli_query($conn,$query_select) or die (mysqli_error());
while($a=mysqli_fetch_array($run_search_query))
{
	$N=$a['name'];
	$eM=$a['email'];
	$sb=$a['subject'];
	$ms=$a['message'];
	
}
				?>
				<section class="bg-001">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="heading">
									<h2>Updated form</h2>
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
									<form method="post" action="#" class="my-form">
									<div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control"  placeholder="Enter Name" name="fname" value="<?php echo $N;?>">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Enter email" name="old_email" value="<?php echo $eM;?>">
										<input type="email" class="form-control" placeholder="Enter email" name="new_email" value="<?php echo $eM;?>" hidden>
									</div>
									<div class="form-group">
										<input type="text" class="form-control"  placeholder="Enter subject" name="sub" value="<?php echo $sb;?>">
									</div>
									<div class="form-group">
										<input type="text" class="form-control"  placeholder="Enter msg" name="msg" value="<?php echo $ms;?>">
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
</div>
    <?php
	require_once("include/footer.php")
	?>