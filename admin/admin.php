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
    <link rel="stylesheet" href="../css/alogin.css">
	<link rel="icon" type="image/x-icon" href="../img/favicon.ico">
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Varela+Round');
body{
    background: black;
}
.img{
	height: 100px;
	width: auto;
}
</style>
<body>
	<img src="adback.jpg">
</body>
</html>

<?php
	include("footer.php");
	}	
	else
		echo "<script>window.location='Login.php';</script>";
?>