<?php
// Connect to the database
$db = new mysqli("localhost", "root", "", "iv_login");

// Get all the feedback from the database
$query = "SELECT * FROM feedback";
$result = $db->query($query);

// Create an array to store the feedback
$feedback = array();

// Loop through the results and add them to the array
while ($row = $result->fetch_assoc()) {
  $feedback[] = array(
    "id" => $row["id"], // Assuming the primary key field is called "id"
    "name" => $row["name"],
    "email" => $row["email"],
    "feedback" => $row["feedback"],
  );
}

// Close the database connection
$db->close();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Feedback Management</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
  font-family: sans-serif;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  border: 1px solid black;
  padding: 5px;
}

th {
  text-align: left;
}

</style>
<body>
  <h1>Feedback Management</h1>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Feedback</th>
        <th>Delete Feedback</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($feedback as $f) { ?>
        <tr>
          <td><?php echo $f["name"]; ?></td>
          <td><?php echo $f["email"]; ?></td>
          <td><?php echo $f["feedback"]; ?></td>
          <td><?php echo $f["id"]; ?></td>
          <td>
            <button type="button" class="delete-feedback" onclick="deleteFeedback(<?php echo $f["id"]; ?>)">Delete</button>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <script>
    function deleteFeedback(id) {
      console.log("Deleting feedback with ID: " + id);

      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            alert("Feedback deleted successfully!");
            // Remove the row from the table after successful deletion
            var row = document.querySelector(".delete-feedback[data-id='" + id + "']").parentNode.parentNode;
            row.parentNode.removeChild(row);
          } else {
            alert("Error deleting feedback!");
          }
        }
      };

      xhr.open("POST", "delete-feedback.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.send("id=" + id);
    }
  </script>
</body>
</html>
