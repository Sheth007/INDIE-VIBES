<?php 
  include '../page/header.php';
  include '../page/sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7 Bantaiz</title>
</head>
<style>
/* Your existing CSS code here */

        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Apply a background color and font styles */
        body {
            background-color: #121212;
            font-family: Arial, sans-serif;
            color: white;
        }

        .container {
            padding: 20px;
        }

        /* Header styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #333;
        }

        header h1 {
            font-size: 24px;
        }

        /* Song list styles */
        .songList {
            margin-top: 20px;
        }

        .songItemContainer {
            display: flex;
            flex-direction: column;
        }

        .songItem {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #333;
        }

        .songItem img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .songName {
            flex: 1;
        }

        /* Bottom player styles */
        .bottom {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #282828;
            display: flex;
            align-items: center;
            padding: 10px;
            border-top: 1px solid #333;
        }

        .icons {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .icons i {
            margin: 0 10px;
            cursor: pointer;
        }

        .songInfo {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .songInfo img {
            width: 30px;
            margin-right: 10px;
        }

        /* Range slider styles */
        input[type="range"] {
            flex: 4;
        }

        input[type="range"]::-webkit-slider-thumb {
            appearance: none;
            width: 12px;
            height: 12px;
            background: white;
            border-radius: 50%;
            cursor: pointer;
        }

        /* Hide default slider styling in Firefox */
        input[type="range"]::-moz-range-thumb {
            display: none;
        }
        .music-controls {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        }

        .music-controls button {
            background-color: transparent;
            border: none;
            color: #1db954;
            font-size: 20px;
            cursor: pointer;
            transition: color 0.3s;
        }

        .music-controls button:hover {
            color: #fff;
        }

        
        /* Style for music name */
        .music-item {
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .music-item:hover {
            background-color: #333;
        }

        /* Style for currently playing music */
        .music-item.playing {
            background-color: #1db954; /* Change to your preferred highlight color */
            color: #fff; /* Text color for highlighted music */
        }

        /* bard skipbar */
        .skip-bar {
        position: relative;
        height: 10px;
        background-color: #333;
        cursor: pointer;
    }

    .progress {
        height: 100%;
        width: 0;
        background-color: #1db954;
    }

    .handle {
        position: absolute;
        width: 12px;
        height: 12px;
        background-color: #fff;
        border-radius: 50%;
        top: -1px;
        transform: translateX(-50%);
    }
    /* Add mobile-responsive styles */
    @media (max-width: 768px) {
            body {
                font-size: 16px;
            }

            .container {
                padding: 10px;
            }

            header {
                padding: 5px 0;
            }

            header h1 {
                font-size: 20px;
            }

            .songItem img {
                width: 40px;
                height: 40px;
                margin-right: 5px;
            }

            .music-item {
                padding: 5px;
            }

            .bottom {
                padding: 5px;
            }

            .music-controls button {
                font-size: 16px;
            }

            .songInfo img {
                width: 20px;
                margin-right: 5px;
            }
        }
</style>
<body>
    <div class="music-player">
        <h1>7 Bantaiz</h1>
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
            $sql = "SELECT * FROM music WHERE artist_name='7 bantaiz'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<li class="music-item" data-src="' . $row["music_path"] . '">' . $row["music_name"] . " - " . $row["time"] . '</li>';
                }
            }
            
            $conn->close();
            ?>
        </ul>
    
<!-- music player bar -->
    <!-- Move the music controls div to the bottom of the page -->
<div class="bottom">
     

    <!-- Music controls from the first HTML -->
    <div class="music-controls">
        <button id="previous">&#9668;</button>
        <button id="masterPlay">&#9654;</button>
        <button id="next">&#9658;</button>
    </div>

    <!-- Add the song info display for the currently playing music -->
    <div class="songInfo">
        <img src="../img/playing.gif" width="42px" alt="" id="gif"> <span id="masterSongName"></span>
 

</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
            const audioPlayer = document.getElementById("audioPlayer");
            const audioSource = document.getElementById("audioSource");
            const playlistItems = document.querySelectorAll(".music-item");
            const masterSongName = document.getElementById("masterSongName");
            const masterPlayButton = document.getElementById("masterPlay");
            let currentlyPlaying = null;
            let isPlaying = false;

            const playMusic = function (musicItem) {
                const musicPath = musicItem.getAttribute("data-src");
                audioSource.setAttribute("src", musicPath);
                audioPlayer.load();
                audioPlayer.play();
                playlistItems.forEach(item => item.classList.remove("playing"));
                musicItem.classList.add("playing");
                masterSongName.textContent = musicItem.textContent;
                currentlyPlaying = musicItem;
                isPlaying = true;
                masterPlayButton.innerHTML = '&#10074;&#10074;'; // Set the button to pause icon
            };

            const pauseMusic = function () {
                audioPlayer.pause();
                isPlaying = false;
                masterPlayButton.innerHTML = '&#9654;'; // Set the button to play icon
            };

            playlistItems.forEach(item => {
                item.addEventListener("click", function () {
                    if (isPlaying) {
                        pauseMusic();
                    } else {
                        playMusic(this);
                    }
                });
            });

            const playNextSong = function () {
                if (currentlyPlaying) {
                    const nextMusicItem = currentlyPlaying.nextElementSibling;
                    if (nextMusicItem) {
                        playMusic(nextMusicItem);
                    }
                }
            };

            const playPreviousSong = function () {
                if (currentlyPlaying) {
                    const previousMusicItem = currentlyPlaying.previousElementSibling;
                    if (previousMusicItem) {
                        playMusic(previousMusicItem);
                    }
                }
            };

            masterPlayButton.addEventListener("click", function () {
                if (isPlaying) {
                    pauseMusic();
                } else {
                    if (currentlyPlaying) {
                        playMusic(currentlyPlaying);
                    } else if (playlistItems.length > 0) {
                        playMusic(playlistItems[0]);
                    }
                }
            });

            const nextButton = document.getElementById("next");
            if (nextButton) {
                nextButton.addEventListener("click", playNextSong);
            }

            const previousButton = document.getElementById("previous");
            if (previousButton) {
                previousButton.addEventListener("click", playPreviousSong);
            }
        });
</script>
</div>
</body>
</html>
