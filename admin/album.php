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
        <th>ID</th>
        <th>Title</th>
        <th>Artist</th>
        <th>Year</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Connect to the database
      $db = new PDO("mysql:host=localhost;dbname=iv_login", "root", "");

      // Function to add a new album
      function addAlbum($db) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          // Get the title, artist, and year of the new album
          $title = $_POST['title'];
          $artist = $_POST['artist'];
          $year = $_POST['year'];

          // Insert the new album into the database
          $sql = "INSERT INTO albums (title, artist, year) VALUES (NULL, 'Best of Ap Dhillion', 'Ap Dhillion', '2023')";
          $stmt = $db->prepare($sql);
          $stmt->execute([$title, $artist, $year]);

          // Redirect the user to the album management page
          header('Location: album.php');
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
          $sql = "UPDATE albums SET title = ?, artist = ?, year = ? WHERE id = ?";
          $stmt = $db->prepare($sql);
          $stmt->execute([$title, $artist, $year, $id]);

          // Redirect the user to the album management page
          header('Location: index.php');
        }
      }

      // Function to delete an album
      function deleteAlbum($db) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          // Get the ID of the album to delete
          $id = $_POST['id'];

          // Delete the album from the database
          $sql = "DELETE FROM albums WHERE id = ?";
          $stmt = $db->prepare($sql);
          $stmt->execute([$id]);

          // Redirect the user to the album management page
          header('Location: index.php');
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

      // Get the albums from the database
      $sql = "SELECT * FROM albums";
      $results = $db->query($sql);

      foreach ($results as $row) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['title']}</td>";
        echo "<td>{$row['artist']}</td>";
        echo "<td>{$row['year']}</td>";
        echo "<td>";
        echo "<a href='?action=edit&id={$row['id']}'>Edit</a>";
        echo " | ";
        echo "<a href='?action=delete&id={$row['id']}'>Delete</a>";
        echo "</td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
  <form method="post">
    <button type="submit" name="add-album">Add Album</button>
  </form>
  <?php
  if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action === 'edit' && isset($_GET['id'])) {
      $id = $_GET['id'];

      // Retrieve the album details from the database
      $sql = "SELECT * FROM albums";
      $stmt = $db->prepare($sql);
      $stmt->execute([$id]);
      $album = $stmt->fetch(PDO::FETCH_ASSOC);
      ?>
      <form method="post">
        <input type="hidden" name="id" value="<?php echo $album['id']; ?>">

        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?php echo $album['title']; ?>" required>

        <label for="artist">Artist:</label>
        <input type="text" name="artist" id="artist" value="<?php echo $album['artist']; ?>" required>

        <label for="year">Year:</label>
        <input type="number" name="year" id="year" value="<?php echo $album['year']; ?>" required>

        <button type="submit" name="edit-album">Save Changes</button>
      </form>
      <?php
    } elseif ($action === 'delete' && isset($_GET['id'])) {
      $id = $_GET['id'];
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
