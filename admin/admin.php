<?php
	session_start();
	if(isset($_SESSION["ad_session"]))
	{
	include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
	<link rel="icon" type="image/x-icon" href="../img/favicon.ico">
</head>
<style>
/* Apply a background color and font styles */
body {
  font-family: 'Varela Round', sans-serif;
  background: black;

}
</style>
<body> 
<center><img src="https://wallpapercave.com/wp/wp10599453.jpg" alt="admin" 
  style="position: relative;
    width: 600px;
    height: 390px;
    opacity: 0.4;"></center>
</body>
</html> 
<?php
	include "../page/footer.php";
	}	
	else
		echo "<script>window.location='Login.php';</script>";
?> 