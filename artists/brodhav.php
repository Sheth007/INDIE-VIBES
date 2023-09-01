<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>
</head>
<style>
/* Reset default styles */
body, ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

/* General styles */
body {
    font-family: 'Helvetica Neue', sans-serif;
    background-color: #121212;
    color: #fff;
}

/* Header styles */
.header {
    background-color: #040404;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 24px;
    font-weight: bold;
}

.user-info {
    display: flex;
    align-items: center;
    gap: 10px;
}

.user-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #1db954;
}

/* Music player styles */
.music-player {
    background-color: #121212;
    padding: 20px;
    border-top: 1px solid #282828;
}

/* Audio controls styles */
.audio-controls {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    margin-bottom: 20px;
}

.audio-controls button {
    background-color: transparent;
    border: none;
    color: #1db954;
    font-size: 20px;
    cursor: pointer;
    transition: color 0.3s;
}

.audio-controls button:hover {
    color: #fff;
}

/* Playlist styles */
#playlist {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.music-item {
    display: flex;
    align-items: center;
    padding: 10px;
    background-color: #282828;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.music-item:hover {
    background-color: #333;
}

.music-item img {
    width: 60px;
    height: 60px;
    border-radius: 5px;
    object-fit: cover;
    margin-right: 10px;
}

.music-details {
    flex-grow: 1;
}

.music-name {
    font-weight: bold;
}

.artist-name {
    color: #888;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .audio-controls {
        flex-direction: column;
        gap: 10px;
    }
}
.skip-bar {
    width: 100%;
    height: 10px;
    background-color: #ddd;
    position: relative;
    cursor: pointer;
}

.progress {
    height: 100%;
    width: 50%; /* Initial progress */
    background-color: #1db954;
}

.handle {
    width: 10px;
    height: 20px;
    background-color: #1db954;
    position: absolute;
    top: -5px;
    left: 50%; /* Initial position */
    transform: translateX(-50%);
    border-radius: 50%;
    cursor: pointer;
}

</style>
<body>
    <div class="music-player">
        <audio id="audioPlayer">
            <source id="audioSource" src="" type="audio/mpeg">
        </audio>
        <ul id="playlist">
            <?php
            // Connect to your database
            $conn = new mysqli("localhost", "root", "", "iv");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // Fetch music from the database
            $sql = "SELECT * FROM music";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<li class="music-item" data-src="' . $row["music_path"] . '">' . $row["music_name"] . ' - ' . $row["artist_name"] . '</li>';
                }
            }
            
            $conn->close();
            ?>
        </ul>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const audioPlayer = document.getElementById("audioPlayer");
    const audioSource = document.getElementById("audioSource");
    const progressBar = document.querySelector(".progress");
    const handle = document.querySelector(".handle");
    const playlistItems = document.querySelectorAll(".music-item");

    playlistItems.forEach(item => {
        item.addEventListener("click", function () {
            const musicPath = this.getAttribute("data-src");
            audioSource.setAttribute("src", musicPath);
            audioPlayer.load();
            audioPlayer.play();
        });
    });

    audioPlayer.addEventListener("timeupdate", function () {
        const progressPercentage = (audioPlayer.currentTime / audioPlayer.duration) * 100;
        progressBar.style.width = `${progressPercentage}%`;
        handle.style.left = `${progressPercentage}%`;
    });

    const updateProgressBar = function (event) {
        const clickX = event.clientX - progressBar.getBoundingClientRect().left;
        const progressBarWidth = progressBar.offsetWidth;
        const clickPercentage = (clickX / progressBarWidth) * 100;

        const newTime = (clickPercentage / 100) * audioPlayer.duration;
        audioPlayer.currentTime = newTime;
    };

    progressBar.addEventListener("click", updateProgressBar);
    handle.addEventListener("mousedown", function () {
        document.addEventListener("mousemove", updateProgressBar);
        document.addEventListener("mouseup", function () {
            document.removeEventListener("mousemove", updateProgressBar);
        });
    });
});

    </script>
    <div class="skip-bar">
    <div class="progress"></div>
    <div class="handle"></div>
</div>
</body>
</html>
