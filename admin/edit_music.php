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
    $artist_name = $_POST["artist_name"];
    $music_name = $_POST["music_name"];
    
    $updateQuery = "UPDATE music SET music_name='$music_name' WHERE artist_name='$artist_name'";
    if ($mysqli->query($updateQuery)) {
        header("Location: uploadmusic.php"); // Redirect to uploadmusic after updating
        exit();
    } else {
        echo "Error updating record: " . $mysqli->error;
    }
}

if (isset($_GET["artist_name"])) {
    $artist_name = $_GET["artist_name"];
    $selectQuery = "SELECT artist_name, music_name FROM music WHERE artist_name='$artist_name'";
    $result = $mysqli->query($selectQuery);
    $row = $result->fetch_assoc();
} else {
    echo "Invalid artist name.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Music Details</title>
</head>
<body>
    <h1>Edit Music Details</h1>
    <form method="post">
        <input type="hidden" name="artist_name" value="<?php echo $artist_name; ?>">
        <label for="music_name">Music Name:</label>
        <input type="text" name="music_name" value="<?php echo $row['music_name']; ?>">
        <br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
<?php
$mysqli->close();
?>
