<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Indie Vibes - Login Admin</title>
     <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
     <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<div class="container">
          <div class="card">
              <form action="Login_chk.php" method="POST">
                  <input type="text" placeholder="id" name="id"><br>
                  <input type="text" placeholder="pass" name="pass">
                  <div class="buttons">
                      <button type="submit" name="ad_login" class="login-button">Login</button>
                  </div>
              </form>
          </div>
          <?php include '../page/footer.php' ?>
      </div>
      <script type="text/javascript" language="javascript"> 
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</body>
</html>