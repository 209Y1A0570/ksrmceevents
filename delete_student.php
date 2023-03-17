<?php
$id=$_GET["id"];
include("include/db.php");

$sql="DELETE from student where id='$id'";
$run_search_query=mysqli_query($conn,$sql) or die (mysqli_error($conn));

if($run_search_query>0)
{
	echo	'Deleted Successfully';
	header('location:register.php');
}
?>