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
					<h3>EDIT STUDENT</h3>
					<ol>
						<li>Home <i class="fas fa-chevron-double-right"></i></li>
						<li>EDIT STUDENT</li>
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
include("include/db.php");
$query_select='select * from student where  id='.$_GET['id'].'';
$run_search_query=mysqli_query($conn,$query_select) or die (mysqli_error());

while($a=mysqli_fetch_array($run_search_query))
{
  $fname=$a['fname'];
  $lname=$a['lname'];
  $ph=$a['phone'];
  $email=$a['email'];
  $pass=$a['password'];
}



if(isset($_POST['submit']))
{
	$fN=$_POST['fname'];
	$lN=$_POST['lname'];
	$pN=$_POST['new_phone'];
	$oldpN=$_POST['old_phone'];
	$eM=$_POST['new_email'];
	$oldeM=$_POST['old_email'];
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
		if($oldpN==$pN)
		  {
			  $count=0;
			  
		  }
		else{
			#duplicate data inset case how to disply error message
			$query_select='select * from student where phone="'.$pN.'"';
	
			$run_search_query=mysqli_query($conn,$query_select) or die(mysqli_error($conn));
	
			$count=mysqli_num_rows($run_search_query);
			
		}
	
	
	//echo $count;
	
		if($count==0){
			$query_update='update student set fname="'.$fN.'",lname="'.$lN.'",phone="'.$pN.'",email="'.$eM.'",password="'.$pwd.'"  where id='.$id.'';
			
			$run_update_query=mysqli_query($conn,$query_update) or die (mysqli_error());
			
			$msg='<div class="alert alert-success">Sucessfully Updated</div>';
			echo '<script>window.location.assign("register.php");</script>';
			//header('location:register.php');
		}
		else{
			$msg='<div class="alert alert-error alert-danger">Phone Number Already Exists </div>';	
			
		}
	
	}
}
?>
<div class="container my-5">
  <h2 class="text-center text-primary">UPDATED form</h2>
  <form  method="post" action="#">
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Name" name="fname" value="<?php echo $fname; ?>">
	  
    </div>
	
	<div class="form-group">
      <label>LName:</label>
      <input type="text" class="form-control"  value="<?php echo $lname;?>" placeholder="Enter Last Name" name="lname">
	  
    </div>
	
	
	 <div class="form-group">
		<div class="phone">Phone Number</div>
		<div class="text"><input type="text" name="new_phone" class="form-control" placeholder="Enter Phone Number" value="<?php echo $ph; ?>"></div>
		
		<div class="text"><input type="text" name="old_phone" class="form-control" placeholder="Enter Phone Number" value="<?php echo $ph; ?>" hidden></div>
		 
	</div>
	
	
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Enter email" name="new_email" value="<?php echo $email; ?>">
	  
      <input type="email" class="form-control" placeholder="Enter email" name="old_email" value="<?php echo $email; ?>" hidden> 
	  
    </div>
	
	
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="pswd" value="<?php echo $pass;?>">
	 
    </div>
	
	
	<input type="submit" name="submit" class="btn btn-primary" value="update">
	<p><?php echo $msg; ?></p>
  </form>
       
</div>




</div>
<?php
require_once("include/footer.php")
?>