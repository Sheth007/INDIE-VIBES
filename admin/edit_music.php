<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'iv';

$mysqli = new mysqli($servername, $username, $password, $database);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST["id"];
    $music_name = $_POST["music_name"];
    $time = $_POST["time"];

    // Use prepared statement to update the music record based on ID
    $updateQuery = "UPDATE music SET music_name = ?, time = ? WHERE id = ?";
    $stmt = $mysqli->prepare($updateQuery);
    $stmt->bind_param("ssi", $music_name, $time, $id); // "ssi" represents string, string, integer
    if ($stmt->execute()) {
        header("Location: uploadmusic.php"); // Redirect to uploadmusic after updating
        exit();
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Use prepared statement to select the music record based on ID
    $selectQuery = "SELECT * FROM music WHERE id = ?";
    $stmt = $mysqli->prepare($selectQuery);
    $stmt->bind_param("i", $id); // "i" represents integer type
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Invalid music ID.";
        exit();
    }

    $stmt->close();
} else {
    echo "No music ID provided.";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Music Details</title>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body>
    <h1>Edit Music Details</h1>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="music_name">Music Name:</label>
        <input type="text" name="music_name" value="<?php echo $row['music_name']; ?>">
        <br>
        <label for="time">Time:</label>
        <input type="text" name="time" value="<?php echo $row['time']; ?>">
        <br>
        <input type="submit" value="Update" name="update">
    </form>
</body>
</html>

<?php
$mysqli->close();
?>