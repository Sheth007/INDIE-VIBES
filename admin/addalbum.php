<?php
$server = "localhost";
$username = "root";
$pass = "";
$dbname = "iv";

$con = new mysqli($server, $username, $pass, $dbname) or die("Connection failed: " . $con->connect_error);

$title = "abc";
$artist = "ums";
$year = 2023;

// Prepare the SQL query using prepared statements
$sql = "INSERT INTO `album` (`title`, `artist`, `year`) VALUES (?, ?, ?)";
$stmt = $con->prepare($sql);
$stmt->bind_param("ssi", $title, $artist, $year);

if ($stmt->execute()) {
    echo "Inserted";
} else {
    echo "Not Inserted: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$con->close();
?>

