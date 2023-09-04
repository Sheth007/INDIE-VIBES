<?php
    if(isset($_POST['submit']))
    {
        $conn = mysqli_connect("localhost","root","","iv");
        $sql = "INSERT INTO users VALUES('$_POST[email]', '$_POST[pass]', '$_POST[repass]')";
        if(mysqli_query($conn, $sql)) 
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
</head>
<body>
<button id="addUserButton" onclick="showAddUserForm()">Add User</button>
<div id="addUserForm" >
    <form method="post">
    	<label for="newEmail">Email:</label>
    	<input type="text" name="email" required><br>

    	<label for="newPassword">Password:</label>
    	<input type="text" name="pass" required><br>

        <label for="newPassword">Re-Password:</label>
    	<input type="text" name="repass" required><br>

    	<input type="submit" name="submit" value="done">
    </form>
</div>
</body>
</html>