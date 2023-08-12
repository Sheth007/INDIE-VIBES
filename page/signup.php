<?php
ini_set('display_errors',"1");
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iv";

    $conn = new mysqli($server, $username, $password, $dbname) or die();

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];
        $sql = "INSERT INTO signup ('email', 'pass', 'repass') VALUES ('$email', '$pass', '$repass')";
        $result = mysqli_query($conn, $sql);
        if($result) 
        {
            echo "Registered successfully";
        } 
        else 
        {
            echo "Error in registrarion";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Register - IV</title>
     <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Indie Vibes - SignUp</h1> 
        <div class="card">
            <form action ="../page/signup.php" method="post">
            <input type="email" placeholder="Email" name="email">
                  <input type="password" placeholder="Password" name="pass">
                  <input type="password" placeholder="Re-Password" name="repass">
                  <div class="buttons">
                    <a href="../page/login.php" class="register-link">Login</a>
                      <input type="submit" class="login-button" value="Register">
                  </div>
            </form>
        </div>
    </div>
</body>
</html>