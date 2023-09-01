<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'iv';

$mysqli = new mysqli($servername, $username, $password, $database);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

if (isset($_GET["artist_name"])) {
    $artist_name = $_GET["artist_name"];
    
    // Make sure to escape the artist_name to prevent SQL injection
    $artist_name = $mysqli->real_escape_string($artist_name);
    
    $deleteQuery = "DELETE FROM music WHERE artist_name='$artist_name'";
    
    if ($mysqli->query($deleteQuery)) {
        header("Location: uploadmusic.php"); // Redirect to main uploadmusic after deleting
        exit();
    } else {
        echo "Error deleting record: " . $mysqli->error;
    }
} else {
    echo "Invalid artist_name.";
}

$mysqli->close();
?>

