<?php 
  include '../page/header.php';
  include '../page/sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Indie Vibes - Badshah</title>
        <link rel="stylesheet" href="../css/bad.css">
        <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
</head>
<body>
    <div class="container">
        <div class="songList">
            <p style="font-size: 20px;">Badshah</p>
            <div class="songItemContainer">
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">1</span>
                    <span class="songlistplay"><span class="timestamp">03:50 <i id="0" ></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="2">
                    <span class="songName">2</span>
                    <span class="songlistplay"><span class="timestamp">02:33 <i id="1" ></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="3">
                    <span class="songName">3</span>
                    <span class="songlistplay"><span class="timestamp">05:34 <i id="2" ></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="4">
                    <span class="songName">4</span>
                    <span class="songlistplay"><span class="timestamp">05:34 <i id="3" ></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="5">
                    <span class="songName">5</span>
                    <span class="songlistplay"><span class="timestamp">05:34 <i id="4" ></i> </span></span>
                </div>
            </div>
        </div>
        <div class="songBanner"></div>
    </div>

    <div class="bottom">
        <input type="range" name="range" id="myProgressBar" min="0" value="0" max="100">
        <div class="icons">
            <!-- fontawesome icons -->
            <i class="fas fa-3x fa-step-backward" id="previous"></i>
            <i class="far fa-3x fa-play-circle" id="masterPlay"></i>
            <i class="fas fa-3x fa-step-forward" id="next"></i> 
        </div>
        <div class="songInfo">
            <img src="../img/playing.gif" width="42px" alt="" id="gif"> <span id="masterSongName"></span>
        </div>
    </div>
    <script src="../js/bad.js"></script>
    <script src="https://kit.fontawesome.com/26504e4a1f.js" crossorigin="anonymous"></script>
</body>
</html>