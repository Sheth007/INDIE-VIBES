<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iv";

    $conn = new mysqli($server, $username, $password, $dbname) or die();

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];

    if(isset($_POST['submit']))
    {
        $sql = "INSERT INTO signup (`email`, `pass`, `repass`) VALUES ($email, $pass, $repass)";
        if($conn->query($sql)) 
        {
            echo "Registered successfully";
        } 
        else 
        {
            echo "Error in registrarion";
        }
        
    }
?>