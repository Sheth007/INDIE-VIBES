<?php
    if(isset($_POST['submit']))
    {
        $conn = mysqli_connect("localhost","root","","iv");
        $sql = "insert into feedback values ('$_POST[name]', '$_POST[email]', '$_POST[feedback]')";
        if(mysqli_query($conn, $sql)) 
        {
          echo "";
        }
        else 
        {
            echo "Error";
        }
    }
?>

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
  color: black;

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

input[type="submit"]{
  background-color: #45a049;
  position: relative;
  top: 27px;
}
input[type="submit"]:hover{
  background-image: linear-gradient(to right, red, green);
}
</style>
<body>
<form method="post">
    	<label for="newname">Name:</label>
    	<input type="text" name="name" id="newname" required><br>

    	<label for="newemail">Email:</label>
    	<input type="text" name="email" id="newemail" required><br>

      <label for="newmessage">Message:</label>
    	<input type="text" name="feedback" id="newmessage" required><br>

    	<center><input type="submit" name="submit"></center>
    </form>
</body>
</html>
<?php include 'footer.php' ?>