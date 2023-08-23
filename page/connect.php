<?php
   $con = mysqli_connect("loaclhost","root","","iv_login") or die();
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repasssword = $_POST['repassword'];
        $sql="INSERT INTO `registration`(`email`, `password`, `repassword`) VALUES ('$email', '$password', '$repasssword');";
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