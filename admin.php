<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets-admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets-admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets-admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets-admin/css/style.css" rel="stylesheet">
</head>

<body>
	<?php
	#errors disply in bellow field,take errors variable empty
	$msg="";

	if(isset($_POST['submit']))
	{
		
		$eM=$_POST['email'];
		$pwd=$_POST['pswd'];
		//echo $fN;
		if($eM=="" || $pwd=="")
		{
			 if($eM=="")
			{
			$msg='<b class="text-danger">enter Your Email</b>';	
			}
			else
			{
			$msg='<b class="text-danger">enter Your password</b>';	
			}
		}
		else{
			include("include/db.php");
			
			$select_query='select * from admin where username ="'.$eM.'" and password="'.$pwd.'"';
			
			$run_query=mysqli_query($conn,$select_query) or die (mysqli_error($conn));
			
			$count=mysqli_num_rows($run_query);
			if($count==1)
			{
			$msg='<b class="text-success">SUCCESS:Please wait to re direct to dashboard</b>';
			header('location:admin/dashboard.php');
			
			session_start();	
			$_SESSION['username']=$_POST['email'];
			
			}
			else{
			$msg='<b class="text-danger">DETAILS WRONG</b>';	
				
			}
			
			
		}
		
	}
	
	?>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
					<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
						<div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
							<div class="d-flex align-items-center justify-content-between mb-3">
								<a href="index.html" class="">
									<h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>ADMIN</h3>
								</a>
								<h3>Sign In</h3>
							</div>
							<div class="form-floating mb-3">
								<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"name="email" value="<?php if(isset($_POST['submit'])){ echo $eM;}?>">
								<label for="floatingInput" >Email address</label>
							</div>
							<div class="form-floating mb-4">
								<input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pswd"  value="<?php if(isset($_POST['submit'])){ echo $pwd;}?>">
								<label for="floatingPassword" >Password</label>
							</div>
							
							<button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="submit">Sign In</button>
						   <p><b><?php echo $msg; ?></b></p>
						</div>
						
					</form>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets-admin/lib/chart/chart.min.js"></script>
    <script src="assets-admin/lib/easing/easing.min.js"></script>
    <script src="assets-admin/lib/waypoints/waypoints.min.js"></script>
    <script src="assets-admin/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets-admin/lib/tempusdominus/js/moment.min.js"></script>
    <script src="assets-admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="assets-admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets-admin/js/main.js"></script>
</body>

</html>