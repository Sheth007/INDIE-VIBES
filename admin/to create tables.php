<?php
$user = 'root';
$password = '';
$database = 'iv_login';
$servername = 'localhost';
$mysqli = new mysqli($servername, $user, $password, $database);

if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}



$cre="CREATE TABLE albums (
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    artist VARCHAR(255) NOT NULL,
    year INT NOT NULL,
    PRIMARY KEY (id)
  )";
  
  if ($mysqli->query($cre) === true) {
    echo "Table 'albums' created successfully.";
} else {
    echo "Error creating table: " . $mysqli->error;
}
$mysqli->close();
?>
