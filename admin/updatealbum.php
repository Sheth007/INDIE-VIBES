<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Album</title>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
    $con = mysqli_connect("localhost", "root", "");

    if (!$con) {
        echo mysqli_error();
    }
    $sel_cat = mysqli_select_db($con, "iv");

    if (isset($_POST["album_upd"])) {
        $artist = $_POST["artist"];
        $album_name = $_POST["album_name"];
        $year = $_POST["year"];
        
        $update_query = "UPDATE album SET album_name='$album_name', year='$year' WHERE artist='$artist'";
        $update_result = mysqli_query($con, $update_query);
        
        if ($update_result) {
            echo "Album updated successfully.";
        } else {
            echo "Error updating album: " . mysqli_error($con);
        }
    }

    if (isset($_GET["artist"])) {
        $artist = $_GET["artist"];
        $result = mysqli_query($con, "SELECT * FROM album WHERE artist='$artist'");
        $row = mysqli_fetch_array($result);
    }
    ?>

    <section class="w3ls-bnrbtm py-5" id="about">
        <div class="container py-xl-5 py-lg-3">
            <div class="row pb-5">
                <div class="col-lg-12">
                    <h1 align="center">Update Album</h1>
                    <br />

                    <!-- Update Album Form -->
                    <center>
                        <form name="updateForm" method="post">
                            <table border="3">
                                <tr>
                                    <td>Artist:</td>
                                    <td><input type="text" name="artist" value="<?php echo $row['artist']; ?>" readonly /></td>
                                </tr>
                                <tr>
                                    <td>Album Name:</td>
                                    <td><input type="text" name="album_name" value="<?php echo $row['album_name']; ?>" /></td>
                                </tr>
                                <tr>
                                    <td>Year:</td>
                                    <td><input type="text" name="year" value="<?php echo $row['year']; ?>" /></td>
                                </tr>
                                <tr align="center">
                                    <td colspan="2"><input type="submit" name="album_upd" value="Update Album" /></td>
                                </tr>
                            </table>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
