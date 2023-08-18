<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Album Management</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
  font-family: sans-serif;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  border: 1px solid black;
  padding: 5px;
}

th {
  text-align: left;
}

button {
  background-color: #008CBA;
  color: white;
  padding: 10px;
  border-radius: 5px;
  cursor: pointer;
}

</style>
<body>
  <h1>Album Management</h1>
  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Artist</th>
        <th>Year</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Connect to the database
      $db = new PDO("mysql:host=localhost;dbname=iv", "root", "");

      // Function to add a new album
      function addAlbum($db) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          // Get the title, artist, and year of the new album
          $title = $_POST['title'];
          $artist = $_POST['artist'];
          $year = $_POST['year'];

          // Insert the new album into the database
          $sql = "INSERT INTO album (title, artist, year) VALUES (?, ?, ?)";
          $stmt = $db->prepare($sql);
          $stmt->execute([$title, $artist, $year]);

          // Redirect the user to the album management page
          header('Location: album.php');
          exit();
        }
      }

      // Function to edit an album
      function editAlbum($db) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          // Get the ID, title, artist, and year of the album
          $id = $_POST['id'];
          $title = $_POST['title'];
          $artist = $_POST['artist'];
          $year = $_POST['year'];

          // Update the album in the database
          $sql = "UPDATE album SET title = ?, artist = ?, year = ? WHERE album_id = ?";
          $stmt = $db->prepare($sql);
          $stmt->execute([$title, $artist, $year, $id]);

          // Redirect the user to the album management page
          header('Location: album.php');
          exit();
        }
      }

      // Function to delete an album
      function deleteAlbum($db) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          // Get the ID of the album to delete
          $id = $_POST['id'];

          // Delete the album from the database
          $sql = "DELETE FROM album WHERE title = ?";
          $stmt = $db->prepare($sql);
          $stmt->execute([$title]);

          // Redirect the user to the album management page
          header('Location: album.php');
          exit();
        }
      }

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['add-album'])) {
          addAlbum($db);
        } elseif (isset($_POST['edit-album'])) {
          editAlbum($db);
        } elseif (isset($_POST['delete-album'])) {
          deleteAlbum($db);
        }
      }

      // Get the album from the database
      $sql = "SELECT * FROM album";
      $results = $db->query($sql);

      foreach ($results as $row) {
        echo "<tr>";
        echo "<td>{$row['title']}</td>";
        echo "<td>{$row['artist']}</td>";
        echo "<td>{$row['year']}</td>";
        echo "<td>";
        echo "<form method='post' action='album.php?action=edit'>
                <input type='hidden' name='id' value='{$row['title']}'>
                <button type='submit'>Edit</button>
              </form>";
        echo "<form method='post' action='album.php?action=delete'>
                <input type='hidden' name='id' value='{$row['title']}'>
                <button type='submit'>Delete</button>
              </form>";
        echo "</td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
  <form method="post">
    <a href="../admin/addalbum.php">Add Album</a>
  </form>
  <?php
  if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action === 'edit' && isset($_POST['title'])) {
      $id = $_POST['id'];

      // Retrieve the album details from the database
      $sql = "SELECT * FROM album WHERE title = ?";
      $stmt = $db->prepare($sql);
      $stmt->execute([$title]);
      $album = $stmt->fetch(PDO::FETCH_ASSOC);
      ?>
      <form method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?php echo $album['title']; ?>" required>

        <label for="artist">Artist:</label>
        <input type="text" name="artist" id="artist" value="<?php echo $album['artist']; ?>" required>

        <label for="year">Year:</label>
        <input type="number" name="year" id="year" value="<?php echo $album['year']; ?>" required>

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" name="edit-album">Save Changes</button>
      </form>
      <?php
    } elseif ($action === 'delete' && isset($_POST['id'])) {
      $id = $_POST['id'];
      ?>
      <form method="post">
        <p>Are you sure you want to delete this album?</p>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="confirm">Type "DELETE" to confirm:</label>
        <input type="text" name="confirm" id="confirm" required>
        <button type="submit" name="delete-album">Delete</button>
      </form>
      <?php
    }
  }
  ?>
</body>
</html>