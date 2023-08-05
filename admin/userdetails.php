<?php

$user = 'root';
$password = '';
$database = 'iv_login';
$servername='localhost';
$mysqli = new mysqli($servername, $user, $password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}
// Check if the delete button is clicked
if (isset($_POST['delete'])) {
    $emailToDelete = $_POST['emailToDelete'];
    $sqlDelete = "DELETE FROM login WHERE email = '$emailToDelete'";
    $resultDelete = $mysqli->query($sqlDelete);
}

$sql = " SELECT * FROM login";
$result = $mysqli->query($sql);
	
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Indie Vibes User Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>Indie Vibes</h1>
		
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>email</th>
				<th>password</th>
				<th>Delete</th> <!-- New column for the "Delete User" button -->
				<th><a href="../admin/addusr.php"><input type="Submit" value="Add User"></a></th>
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
				<td><?php echo $rows['email'];?></td>
				<td><?php echo $rows['password'];?></td>
				<td>
                        <!-- Delete button with a form to pass the email to be deleted -->
                        <form method="post">
                            <input type="hidden" name="emailToDelete" value="<?php echo $rows['email']; ?>">
                            <button type="submit" name="delete">Delete</button>
                        </form>
                    </td>
			</tr>
			<?php
				}
			?>
		</table>
		&nbsp;&nbsp;&nbsp;&nbsp;
</body>

</html>