<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'iv';
// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// File upload handling
if (isset($_POST['upload'])) {
    $targetDirectory = '../admin/upload/'; // Change this directory to your desired location
    $artistName = $_POST['artist_name'];
    $musicName = $_POST['music_name'];
    $time = $_POST['time'];
    $uploadedFileName = $_FILES['fileToUpload']['name'];
    $targetFile = $targetDirectory . basename($uploadedFileName);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Allow only specific file formats (adjust as needed)
    $allowedFileTypes = array('mp3');
    if (!in_array($fileType, $allowedFileTypes)) {
        echo "Only MP3 files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk === 0) {
        echo "File was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetFile)) {
            // Use prepared statement
            $insertQuery = "INSERT INTO music (artist_name, music_name, time, music_path) VALUES (?, ?, ?, ?)";
            $stmt = $mysqli->prepare($insertQuery);
            $stmt->bind_param("ssss", $artistName, $musicName, $time, $targetFile);
            
            if ($stmt->execute()) {
                echo "The file " . htmlspecialchars(basename($uploadedFileName)) . " has been uploaded and inserted into the database.";
            } else {
                echo "An error occurred while inserting into the database: " . $stmt->error;
            }
            
            $stmt->close();
        } else {
            echo "An error occurred while uploading your file.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music File Upload</title>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        h1 {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        form, table {
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: inline-block;
            width: 120px;
            font-weight: bold;
        }
        input[type="text"], input[type="file"] {
            display: block;
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        a {
            color: #333;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
<body>
    <h1>Music File Upload</h1>
    <!-- Music File Upload Form -->
    <form method="post" enctype="multipart/form-data">
        <label for="artist_name">Artist Name:</label>
        <input type="text" name="artist_name" id="artist_name">
        <br>
        <label for="music_name">Music Name:</label>
        <input type="text" name="music_name" id="music_name">
        <br>
        <label for="time">Music Time</label>
        <input type="text" name="time" id="time">
        <br>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <input type="submit" value="Upload Music" name="upload">
        <a href="../admin/uploadmusic.php">Return To Music Details</a>
    </form>