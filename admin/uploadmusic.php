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
?>
<?php
// File upload handling
if (isset($_POST['upload'])) {
    $targetDirectory = 'uploads/'; // Change this directory to your desired location
    $uploadedFileName = $_FILES['fileToUpload']['name'];
    $targetFile = $targetDirectory . basename($uploadedFileName);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "File already exists. Please rename the file and try again.";
        $uploadOk = 0;
    }

    // Check file size (optional)
    // Here, we set a limit of 2MB (you can adjust the limit as needed)
    $maxFileSize = 2 * 1024 * 1024 * 1024; // 2 MB in bytes
    if ($_FILES['fileToUpload']['size'] > $maxFileSize) {
        echo "File is too large. Please upload a smaller file.";
        $uploadOk = 0;
    }

    // Allow only specific file formats (optional)
    // Here, we allow only image files (you can add or remove file extensions as needed)
    $allowedFileTypes = array('jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc', 'docx', 'mp3');
    if (!in_array($imageFileType, $allowedFileTypes)) {
        echo "Only JPG, JPEG, PNG, GIF, PDF, DOC, DOCX, MP3 files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk === 0) {
        echo "File was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES['fileToUpload']['name'])) . " has been uploaded.";
        } else {
            echo "An error occurred while uploading your file.";
        }
    }
}

// File remove handling
if (isset($_POST['remove'])) {
    $fileToRemove = $_POST['fileToRemove'];
    $filePathToRemove = 'uploads/' . $fileToRemove;

    if (file_exists($filePathToRemove)) {
        unlink($filePathToRemove);
        echo "The file " . htmlspecialchars($fileToRemove) . " has been removed.";
    } else {
        echo "File not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>File Upload and Remove</title>
</head>

<body>
    <h1>File Upload</h1>
    <!-- File Upload Form -->
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="upload">
    </form>

    <h1>File Remove</h1>
    <!-- File Remove Form -->
    <form method="post">
        <label for="fileToRemove">Enter the file name to remove (including the extension):</label>
        <input type="text" name="fileToRemove" id="fileToRemove">
        <input type="submit" value="Remove File" name="remove">
    </form>

    <?php
$uploadDir = 'uploads/'; // Change this directory to your desired location

// Get the list of files in the uploads folder
$files = scandir($uploadDir);

// Filter out "." and ".." directories from the list
$files = array_diff($files, array('.', '..'));

// Display the list of files
if (count($files) > 0) {
    echo "<h1>List of Files in Uploads Folder:</h1>";
    echo "<ul>";
    foreach ($files as $file) {
        echo "<li>$file</li>";
    }
    echo "</ul>";
} else {
    echo "<h1>No files found in Uploads Folder.</h1>";
}
?>

</body>

</html>
