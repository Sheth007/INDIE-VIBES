<?php
    if (session_status() == "ad_session") {
        session_start();
    }
?>
<?php

$user = 'root';
$password = '';
$database = 'iv';
$servername='localhost';
$mysqli = new mysqli($servername, $user, $password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}
// Check if the delete button is clicked
if (isset($_POST['delete'])) {
    $music_name = $_POST['music_name'];
    $sqlDelete = "DELETE FROM music WHERE music_name = '$music_name'";
    $resultDelete = $mysqli->query($sqlDelete);
}

$sql = " SELECT * FROM music";
$result = $mysqli->query($sql);
	
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Indie Vibes muisc Details</title>
	<link rel="icon" type="image/x-icon" href="../img/favicon.ico">
</head>
<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			/* background-color: #f5f5f5; */
			background: #f8f8f8 url('../img/back.jpg') no-repeat center center fixed;
		}
		h1 {
			text-align: center;
			color: #006600;
			font-size: 24px;
			margin-top: 20px;
		}
		table {
			width: 80%;
			margin: 20px auto;
			border-collapse: collapse;
			background-color: #fff;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			opacity : 1;
		}
		th, td {
			padding: 10px;
			text-align: center;
		}
		th {
			background-color: #006600;
			color: white;
		}
		td {
			border-bottom: 1px solid #ddd;
		}
		tr:hover {
			background-color: #f2f2f2;
		}
		button {
			background-color: #cc0000;
			color: white;
			border: none;
			padding: 5px 10px;
			border-radius: 3px;
			cursor: pointer;
		}
		button:hover {
			background-color: #990000;
		}
		.add-user-button {
			text-align: center;
			margin-top: 10px;
		}
		.add-user-button input[type="submit"] {
			background-color: #006600;
			color: white;
			border: none;
			padding: 5px 10px;
			border-radius: 3px;
			cursor: pointer;
		}
	</style>
<body>
	<section>
		<table>
			<tr>
				<th>id</th>
				<th>artist name</th>
				<th>music name</th>
                <th>time</th>
				<th><a href="../admin/addmusic.php"><input type="Submit" value="Add music"></a></th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['id'];?></td>
				<td><?php echo $rows['artist_name'];?></td>
                <td><?php echo $rows['music_name'];?></td>
				<td><?php echo $rows['time'];?></td>
				<td>
                    <form method="post">
                    	<input type="hidden" name="music_name" value="<?php echo $rows['music_name']; ?>">
                        	<button type="submit" name="delete">Delete</button>
					</form>
                </td>
				<td>
    				<a href="../admin/edit_music.php?id=<?php echo $rows['id']; ?>">Edit</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
		&nbsp;&nbsp;&nbsp;&nbsp;
</body>

</html>