<?php
	session_start();
	if(isset($_SESSION["ad_session"]))
	{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Indie Vibes Admin</title>
	<link rel="stylesheet" href="admincss/a.css">
	<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body>
<?php include 'aheader.php'; ?>
	<div class="ud">
		<h1>Users</h1>
		<?php include 'userdetails.php'; ?>
	</div>
<script src="adminjs/admin.js"></script>
</body>
</html>
<?php
	}	
	else
		echo "<script>window.location='login.php';</script>";
?>