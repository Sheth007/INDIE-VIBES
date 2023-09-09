<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'iv';

$mysqli = new mysqli($servername, $username, $password, $database);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $music_name = $_POST["music_name"];

    // Use prepared statement to delete music by music name
    $delQuery = "DELETE FROM music WHERE music_name=?";
    $stmt = $mysqli->prepare($delQuery);
    $stmt->bind_param("s", $music_name); // "s" represents string type
    
    if ($stmt->execute()) {
        header("Location: ../page/uploadmusic.php"); // Redirect to uploadmusic after deleting
        exit();
    } else {
        echo "Error deleting record: " . $stmt->error;
    }
    
    $stmt->close();
}
?>
