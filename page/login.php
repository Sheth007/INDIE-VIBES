<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login -IV</title>
     <link rel="stylesheet" href="../css/login.css">
</head>
<body>
     <div class="container">
          <h1 class="title">Indie Vibes</h1>
          <div class="card">
              <form action="Login_chk.php" method="POST">
                  <input type="text" placeholder="Email" name="email">
                  <input type="password" placeholder="Password" name="pass">
                  <div class="buttons">
                    <a href="../page/signup.php" class="register-link">Register</a>
                      <button type="submit" class="login-button" name="log">Login</button>
                  </div>
              </form>
          </div>
      </div>
      <script type="text/javascript" language="javascript"> 
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</body>
</html>