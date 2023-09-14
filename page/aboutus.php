<?php
	session_start();
	if(isset($_SESSION["ad_session"]))
	{
    include 'header.php';
    include 'sidebar.php';
?>
<link rel="stylesheet" href="../css/topbar.css">
  <link rel="stylesheet" href="../css/sidebar.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About Us</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #222;
      color: #fff;
    }

    .about-us {
      max-width: 800px;
      margin: 30px auto;
      padding: 20px;
      background-color: #333;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    h1 {
      text-align: center;
      color: #ff6f61;
    }

    p {
      line-height: 1.6;
    }
  </style>
</head>
<body>
  <div class="about-us">
    <h1>About Us</h1>
    <p>
      Indie Vibes is a music website dedicated to promoting independent music. We believe that independent music is the future of music, and we are committed to providing a platform for independent artists to share their music with the world.
    </p>
    <p>
      We are a team of music lovers who are passionate about independent music. We believe that indie music is more than just music; it's a culture. It's a way of life. It's a community.
    </p>
    <p>
      We are here to help you discover new indie music, connect with other indie music fans, and support independent artists. We hope you enjoy our website!
    </p>
  </div>
</body>
</html>
<?php
	include "../page/footer.php";
	}	
	else
		echo "<script>window.location='Login.php';</script>";
?> 