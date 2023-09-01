<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indie Vibes</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
</head>
<style>
    /* Reset and global styles */
    body, h1, h2, h3, p, a, img {
    margin: 0;
    padding: 0;
    border: 0;
    font-family: 'Helvetica Neue', sans-serif;
}

body {
    background-color: #0f0f0f;
    color: #fff;
}

/* Playlist section styles */
.playlist-section {
    text-align: center;
    margin-bottom: 30px;
}

.playlist-section h1 {
    font-size: 28px;
    margin-bottom: 10px;
    color: #fff;
}

.playlist-image {
    height: 190px;
    width: auto;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.playlist {
    margin: 10px;
    text-align: center;
    transition: transform 0.2s;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    cursor: pointer;
}

.playlist-image:hover {
    transform: scale(1.05);
}

/* Gallery styles */
.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 20px;
}

.gallery {
    margin: 10px;
    text-align: center;
    transition: transform 0.2s;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    cursor: pointer;
}

.gallery:hover {
    transform: scale(1.05);
}

.gallery img {
    max-width: 100%;
    height: auto;
    border-radius: 10px 10px 0 0;
}

.desc {
    margin-top: 10px;
    font-size: 18px;
    color: #fff;
}


</style>
<body>
  <!-- header included -->
  <?php include "header.php" ?> <br>
    <div class="container">
        <div class="playlist-section">
            <h1>Suggested Playlist</h1><br>
            <a href="suggested.php">
                <img src="../img/playlist.jpeg" alt="c_playlist" class="playlist-image" placeholder="C playlist">
            </a>
        </div>

    <center><h1>Artist</h1></center>
  <div class="row">
      <div class="gallery">
        <a target="_blank" href="../page/7bantaiz.php">
          <img src="../img/7bantaiz.jpeg" alt="7bantaiz" width="180px" height="120px">
        </a>
        <div class="desc">7bantaiz</div>
    </div>
    <div class="gallery">
      <a target="_blank" href="../page/mc.php">
        <img src="../img/mc.jpeg" alt="7bantaiz" width="180px" height="120px">
      </a>
      <div class="desc">Mc Stan</div>
    </div>
    <div class="gallery">
      <a target="_blank" href="../page/raftaar.php">
        <img src="../img/raftaar.jpeg" alt="7bantaiz" width="180px" height="120px">
      </a>
      <div class="desc">Raftaar</div>
    </div>
    <div class="gallery">
      <a target="_blank" href="../page/badshah.php">
        <img src="../img/badshah.jpeg" alt="badshah" width="180px" height="120px">
      </a>
      <div class="desc">badshah</div>
    </div>
    <div class="gallery">
      <a target="_blank" href="../artists/brodhav.php">
        <img src="../img/brodha v.jpeg" alt="brodhav" width="180px" height="120px">
      </a>
      <div class="desc">Brodhav</div>
    </div>
    <div class="gallery">
      <a target="_blank" href="../page/brodhav.php">
        <img src="../img/dino.jpeg" alt="dino" width="180px" height="120px">
      </a>
      <div class="desc">Dino James</div>
    </div>
    <div class="gallery">
      <a target="_blank" href="../page/brodhav.php">
        <img src="../img/emiway.jpeg" alt="emiway" width="180px" height="120px">
      </a>
      <div class="desc">Emiway</div>
    </div>
    <div class="gallery">
      <a target="_blank" href="../page/brodhav.php">
        <img src="../img/ap.jpeg" alt="ap" width="180px" height="120px">
      </a>
      <div class="desc">Ap Dhillion</div>
    </div>
    <div class="gallery">
      <a target="_blank" href="../page/brodhav.php">
        <img src="../img/honey.jpeg" alt="honey" width="180px" height="120px">
      </a>
      <div class="desc">Honey Singh</div>
    </div>
    <div class="gallery">
      <a target="_blank" href="../page/brodhav.php">
        <img src="../img/karshna.jpeg" alt="karshna" width="180px" height="120px">
      </a>
      <div class="desc">Krsna</div>
    </div>
  </div>
    
  <!-- footer included -->
  <?php include "footer.php" ?>
</body>
</html>
