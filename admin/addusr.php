<?php
$user = 'root';
$password = '';
$database = 'iv_login';
$servername='localhost';
$mysqli = new mysqli($servername, $user, $password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sqlAddUser = "INSERT INTO login (email, password) VALUES ('$email', '$password')";
        $resultAddUser = $mysqli->query($sqlAddUser);
        echo "Data Inserted";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
</head>
<body>
<button id="addUserButton" onclick="showAddUserForm()">Add User</button>
<div id="addUserForm" >
    <form method="post">
    	<label for="newEmail">Email:</label>
    	<input type="email" name="email" id="newEmail" required><br>
    	<label for="newPassword">Password:</label>
    	<input type="password" name="password" id="newPassword" required><br>
    	<button type="submit" name="addUser">Add User</button>
    </form>
</div>
</body>
</html>