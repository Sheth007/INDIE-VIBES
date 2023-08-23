<!DOCTYPE html>
<html>
<head>
    <title>Album Management</title>
</head>
<body>
    <?php
    session_start();
    $con=mysqli_connect("localhost","root","");
	
	if(!$con)
	{
		echo mysqli_error();
	}
	$sel_cat=mysqli_select_db($con,"iv");

    if (isset($_SESSION["ad_session"])) {

        if (isset($_REQUEST["artist"])) {
            $artist = $_REQUEST["artist"];
            mysqli_query($con, "DELETE FROM album WHERE artist='$artist'");
            echo "Deleted";
        }
        

        if (isset($_REQUEST["album_upd"])) {
            $artist = $_REQUEST["artist"];
            $album_name = $_REQUEST["album_name"];
            $year = $_REQUEST["year"];
            mysqli_query($con, "UPDATE album SET artist='$artist', album_name='$album_name', year='$year' WHERE artist='$artist'");
            echo "Updated";
        }
        
    } else {
        echo "<script>window.location='Login.php';</script>";
    }
    ?>

    <section class="w3ls-bnrbtm py-5" id="about">
        <div class="container py-xl-5 py-lg-3">
            <div class="row pb-5">
                <div class="col-lg-12">
                    <h1 align="center">Album Management</h1>
                    <br />
                    <!-- Album Table Display -->
                    <center>
                        <?php
                        $result = mysqli_query($con, "SELECT * FROM album");
                        echo "<table border='1'>";
                        echo "<td><a href='addalbum.php'>Add Albums</a></td>";
                        echo "<tr><th>Artist</th><th>Album Name</th><th>Year</th><th>Update</th><th>Delete</th></tr>";

                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['artist'] . "</td>";
                            echo "<td>" . $row['album_name'] . "</td>";
                            echo "<td>" . $row['year'] . "</td>";
                            echo "<td><a href='updatealbum.php?artist=" . $row['artist'] . "'>Update</a></td>";
                            echo "<td><a href='album.php?artist=" . $row['artist'] . "'>Delete</a></td>";
                            echo "</tr>";
                        }

                        echo "</table>";
                        ?>
                    </center>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
