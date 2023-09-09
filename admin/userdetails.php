<!-- <?php
	session_start();
	if(isset($_SESSION["ad_session"]))
	{
?> -->
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
if (isset($_POST['delete'])) {
    $emailToDelete = $_POST['emailToDelete'];
    $sqlDelete = "DELETE FROM users WHERE email = '$emailToDelete'";
    $resultDelete = $mysqli->query($sqlDelete);
}

$sql = " SELECT * FROM users";
$result = $mysqli->query($sql);
	
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/x-icon" href="../img/favicon.ico">
</head>
<style>
   body {
        font-family: Arial, sans-serif;
        background: #f8f8f8 url('../img/back.jpg') no-repeat center center fixed; 
        background-size: cover;
        margin: 0;
        padding: 0;
    }

    section {
        background-color: rgba(255, 255, 255, 0.9); 
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        margin: 20px auto;
        max-width: 800px;
    }

    h1 {
        color: #333;
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 12px; 
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f5f5f5;
    }

    tr:hover {
        background-color: #e0e0e0;
    }

    a {
        text-decoration: none;
        color: #007bff; 
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        text-transform: uppercase;
        font-weight: bold;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    button[type="submit"] {
        background-color: #ff3333;
        color: #fff;
        padding: 8px 16px; 
        border: none;
        border-radius: 5px;
        text-transform: uppercase;
        font-weight: bold;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #ff0000;
    }
</style>

<body>
	<section>
		<table>
			<tr>
				<th>email</th>
				<th>password</th>
				<th>re-password</th>
				<th>Delete</th>
                <th>
                    <form action="addusr.php" method="get">
                        <input type="submit" value="Add User">
                    </form>
                </th>
			</tr>
	
			<?php
			
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				
				<td><?php echo $rows['email'];?></td>
				<td><?php echo $rows['pass'];?></td>
				<td><?php echo $rows['repass'];?></td>
				<td>
                
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
<?php
	}	
	else
		echo "<script>window.location='Login.php';</script>";
?> 