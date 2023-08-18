<?php
   $server = "localhost";
   $user = "root";
   $password = "";
   $databse = "iv_login";

   $conn = new mysqli($server, $user, $password, $databse);
    if(isset($_GET['submit']))
    {
        $email = $_GET['email'];
        $password = $_GET['password'];
        $repasssword = $_GET['repassword'];
        $sql="INSERT INTO `registration`(`email`, `password`, `repassword`) VALUES ('UMS@UMS.COM', 'UMS', 'UMS')";
        $result=mysqli_query($conn, $sql);
        if($result)
        {
           echo $email;
           echo $password;
           echo $repasssword;
        }
        else
        {
           echo "Data not inserted";
        }
    }
?>
<html>
    <body>
        <form action="try.php" method="GET">
            Enter Email:
            <input type="text" name="email" id=""><br>
            Enter Password :
            <input type="text" name="password" id=""><br>
            retype password:
            <input type="text" name="repassword" id=""><br>
            <input type="submit">
        </form>
    </body>
</html>