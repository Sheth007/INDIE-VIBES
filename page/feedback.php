<?php include 'header.php' ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Feedback Form</title>
</head>
<style>
body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
  background-color: black;
}

form {
  width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: black;
  /* border: 1px dashed red; */
}

input[type="text"], input[type="email"], textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 40px;
  resize: vertical;
  color: white;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color: white;
}

input[type="submit"] {
  background-color: #375674;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}
</style>
<body>
<form action="submit.php" method="post">
  <h1 style="color: white">Feedback Form</h1>
  <label for="name">Name:</label>
  <input type="text" name="name" placeholder="Enter Name" required>
  <label for="email">Email:</label>
  <input type="email" name="email" placeholder="Enter Email" required>
  <label for="message">Message:</label>
  <textarea name="message" rows="5" placeholder="Write Something" required></textarea> &nbsp;<br>
  <input type="submit" value="Submit Feedback">
</form>
</body>
</html>
<?php include 'footer.php' ?>