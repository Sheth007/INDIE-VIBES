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
    $emailToDelete = $_POST['emailToDelete'];
    $sqlDelete = "DELETE FROM feedback WHERE email = '$emailToDelete'";
    $resultDelete = $mysqli->query($sqlDelete);
}

$sql = " SELECT * FROM feedback";
$result = $mysqli->query($sql);
	
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Feedback Details</title>
	<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f5f5f5;
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
	</style>
<body>
	<section>
		<h1>Feedback Details</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Feedback</th>
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
				<td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['feedback'];?></td>
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