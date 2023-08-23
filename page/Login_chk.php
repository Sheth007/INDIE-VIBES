<?php
session_start();
	$con=mysqli_connect("localhost","root","");
	
	if(!$con)
	{
		echo mysqli_error();
	}
	$sel_cat=mysqli_select_db($con,"iv");

if(isset($_REQUEST["log"]))
{
	$getuser=mysqli_query($con,"select * from users where email='".$_REQUEST["email"]."' AND pass='".$_REQUEST["pass"]."'");
	$res=mysqli_fetch_row($getuser);
	$nores=mysqli_num_rows($getuser);
	if($nores>0)
	{
		$_SESSION["ad_session"]=$res[1];
		echo "<script>window.location='index.php';</script>";
	}	
	else
		echo "<script>window.location='Login.php';</script>";
}
else
	echo "<script>window.location='Login.php';</script>";
?>