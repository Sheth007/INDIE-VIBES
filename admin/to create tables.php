<?php
$user = 'root';
$password = '';
$database = 'iv_login';
$servername = 'localhost';
$mysqli = mysqli_connect($servername, $user, $password, $database);
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// SQL query to create the 'registration' table
$sql = "CREATE TABLE IF NOT EXISTS registration (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    repassword VARCHAR(255) NOT NULL
)";

if ($mysqli->query($sql) === true) {
    echo "Table 'registration' created successfully!";
} else {
    echo "Error creating table: " . $mysqli->error;
}

$mysqli->close();
?>
