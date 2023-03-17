<!DOCTYPE html>
<html lang="en">
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
<section class="abt-01">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="seting">
					<h3>REGISTER</h3>
					<ol>
						<li>Home <i class="fas fa-chevron-double-right"></i></li>
						<li>REGISTER</li>
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
	$fN=$_POST['fname'];
	$lN=$_POST['lname'];
	$pN=$_POST['phone'];
	$eM=$_POST['email'];
	$pwd=$_POST['pswd'];
	//echo $fN;
	if($fN==""|| $lN=="" || $eM=="" || $pwd==""|| $pN=="")
	{
		if($fN=="")
		{
		$msg="<b class='text-danger'>enter Your FName</b>";	
		}
		else if($lN=="")
		{
		$msg="<b class='text-danger'>enter Your LName</b>";	
		}
		
		else if($pN=="")
		{
		$msg="<b class='text-danger'>enter Your Phone Number</b>";	
		}
		else if($eM=="")
		{
		$msg="<b class='text-danger'>enter Your Email</b>";	
		}
		else
		{
		$msg="<b class='text-danger'>enter Your password</b>";	
		}
	}
	else
	{
	//$msg="<b class='text-success'>SUCCESS</b>";
	include("include/db.php");
	
	#duplicate data inset case how to disply error message
	$query_select='select * from student where phone="'.$pN.'" or email="'.$eM.'"';
	
	$run_search_query=mysqli_query($conn,$query_select) or die(mysqli_error($conn));
	
	$count=mysqli_num_rows($run_search_query);
	
	//echo $count;
	
	if($count==0){
		$myQuery='INSERT INTO student (fname, lname, phone,email, password) VALUES ( "'.$fN.'", "'.$lN.'", "'.$pN.'", "'.$eM.'", "'.$pwd.'")';
		
		#run Query
		$run_insert_query=mysqli_query($conn,$myQuery) or die (mysqli_error($conn));
		
		if($run_insert_query)
		{
		$msg="<div class='text-success font-weight-bold'>successfully inserted</div>";
		}
		else
		{
		$msg="Not insrted";	
		}
	}
	else{
	$msg="<div class='text-danger font-weight-bold'>Dublicate Data Entry</div>";	
		
	}
	
	}
}

?>
<div class="container my-5">
  <h2 class="text-center text-primary">Register form</h2>
  <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Name" name="fname" value="<?php if(isset($_POST['submit'])){ echo $_POST['fname'];}?>">
	  
    </div>
	
	<div class="form-group">
      <label>LName:</label>
      <input type="text" class="form-control"  value="<?php if(isset($_POST['submit'])){ echo $_POST['lname'];}?>" placeholder="Enter Last Name" name="lname">
	  
    </div>
	
	
	 <div class="form-group">
		<div class="phone">Phone Number</div>
		<div class="text"><input type="text" name="phone" class="form-control" placeholder="Enter Phone Number"/ value="<?php if(isset($_POST['submit'])){ echo $_POST['phone'];}?>"></div>
		 
	</div>
	
	
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Enter email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];}?>">
	  
    </div>
	
	
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="pswd" value="<?php if(isset($_POST['submit'])){ echo $_POST['pswd'];}?>">
	 
    </div>
	
	
	<input type="submit" name="submit" class="btn btn-primary">
	<p><?php echo $msg; ?></p>
  </form>
       
</div>

<?php
require_once("include/footer.php")
?>