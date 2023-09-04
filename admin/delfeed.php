<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Connect to the database
  $db = new mysqli("localhost", "root", "", "iv");

  // Check connection
  if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
  }

  // Get the ID parameter from the AJAX request
  $id = $_POST["id"];

  // Prepare and execute the DELETE query
  $query = "DELETE FROM feedback WHERE id = ?";
  $stmt = $db->prepare($query);
  $stmt->bind_param("i", $id);

  if ($stmt->execute()) {
    // Return a success status code
    http_response_code(200);
  } else {
    // Return a server error status code and the error message
    http_response_code(500);
    echo "Error deleting feedback: " . $stmt->error;
  }

  // Close the statement and the database connection
  $stmt->close();
  $db->close();
}

?>