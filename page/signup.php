<?php

    if(isset($_POST['submit']))
    {
        $conn = mysqli_connect("localhost","root","","iv");
        $sql = "insert into users values ('$_POST[email]', '$_POST[pass]', '$_POST[repass]')";
        if(mysqli_query($conn, $sql)) 
        {
            echo "";
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
            <form method="post">
            <input type="text" placeholder="Email" name="email">
                  <input type="text" placeholder="Password" name="pass">
                  <input type="text" placeholder="Re-Password" name="repass">
                  <div class="buttons">
                    <a href="../page/login.php" class="register-link">Login</a>
                      <input type="submit" name="submit" class="login-button" value="Register">
                  </div>
            </form>
        </div>
    </div>
</body>
</html>