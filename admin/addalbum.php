<?php
	session_start();
	if(isset($_SESSION["ad_session"]))
	{
?>
<?php
  $con=mysqli_connect("localhost","root","");
	
  if(!$con)
  {
      echo mysqli_error();
  }
  $sel_cat=mysqli_select_db($con,"iv");
    if (isset($_POST["sub"])) {
        $artist = $_POST["artist"];
        $album_name = $_POST["album_name"];
        $year = $_POST["year"];
        mysqli_query($con, "INSERT INTO album (artist, album_name, year) VALUES ('$artist', '$album_name', '$year')");
        echo "Added";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body>
          <center>
                        <form name="form1" method="post">
                            <h2>Add New Album</h2>
                            <table border="3">
                                <tr>
                                    <td>Artist:</td>
                                    <td><input type="text" name="artist" /></td>
                                </tr>
                                <tr>
                                    <td>Album Name:</td>
                                    <td><input type="text" name="album_name" /></td>
                                </tr>
                                <tr>
                                    <td>Year:</td>
                                    <td><input type="text" name="year" /></td>
                                </tr>
                                <tr align="center">
                                    <td colspan="2"><input type="submit" name="sub" value="Add Album" /></td>
                                </tr>
                            </table>
                        </form>
                    </center>
</body>
</html>
<?php
	}	
	else
		echo "<script>window.location='Login.php';</script>";
?> 