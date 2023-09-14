<?php
    if(isset($_POST['submit']))
    {
        $conn = mysqli_connect("localhost","root","","iv");
        $sql = "INSERT INTO users (email, pass, repass) VALUES ('$_POST[email]', '$_POST[pass]', '$_POST[repass]')";
        if(mysqli_query($conn, $sql)) 
        {
            header ('Location: userdetails.php');
            exit();
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body>
<button id="addUserButton" onclick="showAddUserForm()">Add User</button>
<div id="addUserForm" >
    <form method="post">
    	<label for="newEmail">Email:</label>
    	<input type="text" name="email" id="newEmail" required><br>
    	<label for="newPassword">Password:</label>
    	<input type="text" name="pass" id="newPassword" required><br>
        <label for="newPassword">Re-Password:</label>
    	<input type="text" name="repass" id="newPassword" required><br>
    	<input type="submit" name="submit" value="done">
    </form>
</div>
</body>
</html>