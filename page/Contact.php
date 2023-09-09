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
<?php
    if(isset($_POST['submit']))
    {
        $conn = mysqli_connect("localhost","root","","iv");
        $sql = "INSERT INTO contact VALUES ('$_POST[name]', '$_POST[email]', '$_POST[msg]')";
        if(mysqli_query($conn, $sql)) 
        {
            echo "Submitted";
        } 
        else 
        {
            echo "Error in registrarion";
        }
        
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us</title>
  <style>
   body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      color: black;
    }

    .contact-container {
      max-width: 800px;
      margin: 50px auto;
      padding: 20px;
      background-color: #ecf0f1;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      background-image: none;
      display: flex;
      justify-content: space-between;
    }

    .contact-info {
      flex: 1;
      padding: 20px;
      background-color: #3498db;
      color: #fff;
      border-radius: 5px;
    }

    .contact-info h1 {
      font-size: 24px;
    }

    .contact-info ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    .contact-info li {
      margin-bottom: 15px;
      font-size: 16px;
    }

    .contact-info span {
      font-weight: bold;
    }

    .contact-form {
      flex: 1;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
    }

    .contact-form h1 {
      font-size: 24px;
      color: #333;
    }

    .contact-form form {
      display: flex;
      flex-direction: column;
    }

    .contact-form label {
      font-weight: bold;
      margin-bottom: 10px;
      color: #333;
    }

    .contact-form input,
    .contact-form textarea {
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }

    .contact-form button {
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 4px;
      padding: 10px;
      font-size: 16px;
      cursor: pointer;
    }

    .contact-form button:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>
  <div class="contact-container">
    <div class="contact-info">
      <h1>Contact Us</h1><br>
      <ul>
        <li><span>Name:</span> Sheth Uday</li>
        <li><span>Email:</span> shethuday505@gmail.com</li>
        <li><span>Phone:</span> +91 9408753008</li>
      </ul>
    </div>
    <div class="contact-form">
      <h1>Contact Form</h1><br>
      <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>

        <label for="message">Message:</label>
        <input type="text" name="msg" id="msg" required>
        <!-- <textarea id="message" name="msg" rows="4" required></textarea> -->

        <input type="submit" value="Submit" name="submit">
      </form>
    </div>
  </div>
</body>
</html>
<?php
	include "../page/footer.php";
	}	
	else
		echo "<script>window.location='Login.php';</script>";
?> 