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
	<link rel="stylesheet" href="admin/admincss/a.css">
</head>
<body>
<?php include 'admin/aheader.php'; ?>
	<div class="ud">
		<h1>Users</h1>
		<?php include 'admin/userdetails.php'; ?>
	</div>
<script src="admin/adminjs/admin.js"></script>
</body>
</html>
<?php
	}	
	else
		echo "<script>window.location='login.php';</script>";
?>