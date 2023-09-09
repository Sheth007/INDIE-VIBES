<?php 
    include '../page/header.php';
    include '../page/sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="../css/artist.css">
    <link rel="stylesheet" href="../css/topbar.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="player">
        <div class="audio-container">
            <center>
                <form method="GET" action="search.php">
                    <input type="text" name="query" id="search-input" placeholder="Search for music..." autocomplete="off">
                    <button type="submit">Search</button>
                </form>
            </center>
            <audio id="audio-player"></audio>
        </div>
        <div class="controls">
            <button id="play-btn">Play<i class="fa fa-play"></i></button>
            <button id="pause-btn">Pause<i class="fa fa-pause"></i></button>
            <button id="prev-btn">Backward<i class="fa fa-step-backward"></i></button>
            <button id="next-btn">Next<i class="fa fa-step-forward"></i></button>
            <button id="repeat-btn">Repeat<i class="fa fa-repeat"></i></button>
        <div class="time">
            <ul>
                <li><div class="progress-time" id="current-time" style="color: white;">0:00</div></li>
                <li><div class="progress-time" id="total-time" style="color: white;">0:00</div></li>
            </ul>
        </div>
            <!-- New music progress bar -->
            <div class="progress-container">
                <div class="progress-bar">
                    <div class="progress-bar-inner"></div>
                </div>
            </div>
            <!-- Volume control -->
            <div id="volume-label">🔊</div>
            <input id="volume-control" type="range" min="0" max="1" step="0.1" value="1">
        </div>
        <div class="playlist">
            <ul id="playlist-items">
            <?php
            // Connect to your database
            $conn = new mysqli("localhost", "root", "", "iv");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Check if a search query is provided
            if (isset($_GET['query'])) {
                $searchQuery = $_GET['query'];
                // Fetch music from the database based on the search query
                $sql = "SELECT * FROM music WHERE artist_name LIKE '%$searchQuery%' OR music_name LIKE '%$searchQuery%'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<li class="music" data-src="' . $row["music_path"] . '">' . $row["music_name"] . '</li>';
                    }
                }
            }
            $conn->close();
        ?>
            </ul>
        </div>
    </div>
</body>
<script src="../js/artist.js"></script>
<?php '../page/footer.php'; ?>
</html>