<?php
	session_start();
	if(isset($_SESSION["ad_session"]))
	{
    include 'header.php';
    include 'sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Indie Vibes</title>
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/topbar.css">
  <link rel="stylesheet" href="../css/sidebar.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body>

  <div class="iv-playlists">
    <h2>Indie Vibes Playlists</h2>
    <div class="list">
      <div class="item">
      <a href="../artists/ap.php"><img src="https://static.toiimg.com/thumb/msid-88489671,width-400,resizemode-4/88489671.jpg" /></a>
        <div class="play">
          <a href="../artists/ap.php"><span class="fa fa-play"></span></a>
        </div>
        <h4>Ap Dhillion</h4> 
        <p>Lorem ipsum dolor sit amet.</p>
      </div>

      <div class="item">
      <a href="../artists/badshah.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7HOeipiLE9ejJB3nwVWPjaM58x6ngkNRJyQ&usqp=CAU" /></a>
        <div class="play">
        <a href="../artists/badshah.php"><span class="fa fa-play"></span></a>
        </div>
        <h4>badshah</h4>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
      </div>

      <div class="item">
      <a href="../artists/brodhav.php"><img src="https://pbs.twimg.com/profile_images/1401043472144945156/yryHskxi_400x400.jpg" /></a>
        <div class="play">
        <a href="../artists/brodhav.php"><span class="fa fa-play"></span></a>
        </div>
        <h4>brodha v</h4>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
      </div>

      <div class="item">
      <a href="../artists/dino.php"><img src="https://starsunfolded.com/wp-content/uploads/2022/12/Dino-James.jpg" /></a>
        <div class="play">
        <a href="../artists/dino.php"><span class="fa fa-play"></span></a>
        </div>
        <h4>dino</h4>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
      </div>

      <div class="item">
      <a href="../artists/7bantaiz.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYQhxz8Qmkcjd8k8HYIVwaGbMYlD1TUemk1A&usqp=CAU" /></a>
        <div class="play">
        <a href="../artists/7bantaiz.php"><span class="fa fa-play"></span></a>
        </div>
        <h4>7 bantaiz</h4>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
      </div>
    </div>
  </div>

  <div class="iv-playlists">
    <div class="list">
      <div class="item">
      <a href="../artists/mcstan.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQG8wN_xDymQ_fiLqPPUNpIRI-fVaWn--9YqA&usqp=CAU" /></a>
        <div class="play">
        <a href="../artists/mcstan.php"><span class="fa fa-play"></span></a>
        </div>
        <h4>Mc Stan</h4>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>

      <div class="item">
      <a href="../artists/krishna.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVPUPpN3PF_hhrcNmJ2im4WNCk-2_UDdFsupWyHHNG9APQTlYFieRerWvnvANUZmCeEZY&usqp=CAU" /></a>
        <div class="play">
        <a href="../artists/krishna.php"><span class="fa fa-play"></span></a>
        </div>
        <h4>Kr$na</h4>
        <p>amet consectetur adipisicing elit. Laborum, culpa!</p>
      </div>

      <div class="item">
      <a href="../artists/raftaar.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIINit27wEQnHJPaa_3aZ8OvH9jKd9_I6lk3xcCKP2QocB9RgraF-KTXdQgLZzI24H6sA&usqp=CAU" /></a>
        <div class="play">
          <a href="../artists/raftaar.php"><span class="fa fa-play"></span></a>
        </div>
        <h4>Raftaar</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
      </div>

      <div class="item">
      <a href="../artists/shubh.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQx9mjjyFiwLQOCNau3RnBk4pfZhTkN9wHF6aho2ui0Npm2BPgvSu-87ImWPE4G-_c-YIc&usqp=CAU" /></a>
        <div class="play">
        <a href="../artists/shubh.php"><span class="fa fa-play"></span></a>
        </div>
        <h4>Shubh</h4>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
      </div>

      <div class="item">
      <a href="../artists/honey.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGcxbbGOhrFpWg8sxojcSb9ekcOsucdGDnXbIz_ipZJ1Dq6w3YTLn0TRLF0JVEl2MjvBY&usqp=CAU" /></a>
        <div class="play">
        <a href="../artists/honey.php"><span class="fa fa-play"></span></a>
        </div>
        <h4>Honey Singh</h4>
        <p>consectetur adipisicing elit. Necessitatibus, harum!</p>
      </div>
      
      
    </div>
  </div>
</div>

<script
  src="https://kit.fontawesome.com/23cecef777.js"
  crossorigin="anonymous"></script>
</body>
</html>
<?php
	include "../page/footer.php";
	}	
	else
		echo "<script>window.location='Login.php';</script>";
?> 