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
</head>
<body>

  <div class="iv-playlists">
    <h2>Indie Vibes Playlists</h2>
    <div class="list">
      <div class="item">
        <img src="https://static.toiimg.com/thumb/msid-88489671,width-400,resizemode-4/88489671.jpg" />
        <div class="play">
          <a href="../artists/ap.php"><span class="fa fa-play"></span></a>
        </div>
        <h4>Ap Dhillion</h4> 
        <p>Lorem ipsum dolor sit amet.</p>
      </div>

      <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7HOeipiLE9ejJB3nwVWPjaM58x6ngkNRJyQ&usqp=CAU" />
        <div class="play">
        <a href="../artists/badshah.php"><span class="fa fa-play"></span></a>
        </div>
        <h4>badshah</h4>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
      </div>

      <div class="item">
        <img src="https://pbs.twimg.com/profile_images/1401043472144945156/yryHskxi_400x400.jpg" />
        <div class="play">
        <a href="../artists/brodhav.php"><span class="fa fa-play"></span></a>
        </div>
        <h4>brodha v</h4>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
      </div>

      <div class="item">
        <img src="https://starsunfolded.com/wp-content/uploads/2022/12/Dino-James.jpg" />
        <div class="play">
        <a href="../artists/dino.php"><span class="fa fa-play"></span></a>
        </div>
        <h4>dino</h4>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
      </div>

      <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYQhxz8Qmkcjd8k8HYIVwaGbMYlD1TUemk1A&usqp=CAU" />
        <div class="play">
        <a href="../artists/7bantaiz.php"><span class="fa fa-play"></span></a>
        </div>
        <h4>7 bantaiz</h4>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
      </div>
    </div>
  </div>

  <div class="iv-playlists">
    <!-- <h2>Focus</h2> -->
    <div class="list">
      <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQG8wN_xDymQ_fiLqPPUNpIRI-fVaWn--9YqA&usqp=CAU" />
        <div class="play">
        <a href="../artists/mcstan.php"><span class="fa fa-play"></span></a>
        </div>
        <h4>Mc Stan</h4>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>

      <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVPUPpN3PF_hhrcNmJ2im4WNCk-2_UDdFsupWyHHNG9APQTlYFieRerWvnvANUZmCeEZY&usqp=CAU" />
        <div class="play">
        <a href="../artists/krishna.php"><span class="fa fa-play"></span></a>
        </div>
        <h4>Kr$na</h4>
        <p>amet consectetur adipisicing elit. Laborum, culpa!</p>
      </div>

      <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIINit27wEQnHJPaa_3aZ8OvH9jKd9_I6lk3xcCKP2QocB9RgraF-KTXdQgLZzI24H6sA&usqp=CAU" />
        <div class="play">
          <span class="fa fa-play"></span>
        </div>
        <h4>Raftaar</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
      </div>

      <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQx9mjjyFiwLQOCNau3RnBk4pfZhTkN9wHF6aho2ui0Npm2BPgvSu-87ImWPE4G-_c-YIc&usqp=CAU" />
        <div class="play">
          <span class="fa fa-play"></span>
        </div>
        <h4>Shubh</h4>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
      </div>

      <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGcxbbGOhrFpWg8sxojcSb9ekcOsucdGDnXbIz_ipZJ1Dq6w3YTLn0TRLF0JVEl2MjvBY&usqp=CAU" />
        <div class="play">
          <span class="fa fa-play"></span>
        </div>
        <h4>Honey Singh</h4>
        <p>consectetur adipisicing elit. Necessitatibus, harum!</p>
      </div>
      
      
    </div>
  </div>

  <!-- <div class="iv-playlists">
    <h2>Mood</h2>
    <div class="list">
      <div class="item">
        <img src="" />
        <div class="play">
          <span class="fa fa-play"></span>
        </div>
        <h4>Mood Booster</h4>
        <p>Get happy with today's dose of feel-good...</p>
      </div>

      <div class="item">
        <img src="" />
        <div class="play">
          <span class="fa fa-play"></span>
        </div>
        <h4>Feelin' Good</h4>
        <p>Feel good with this positively timeless...</p>
      </div>

      <div class="item">
        <img src="" />
        <div class="play">
          <span class="fa fa-play"></span>
        </div>
        <h4>Dark & Stormy</h4>
        <p>Beautifully dark, dramatic tracks.</p>
      </div>

      <div class="item">
        <img src="" />
        <div class="play">
          <span class="fa fa-play"></span>
        </div>
        <h4>Feel Good Piano</h4>
        <p>Happy vibes for an upbeat morning.</p>
      </div>

      <div class="item">
        <img src="" />
        <div class="play">
          <span class="fa fa-play"></span>
        </div>
        <h4>Feelin' Myself</h4>
        <p>The hip-hop playlist that's a whole mood...</p>
      </div>

      <div class="item">
        <img src="" />
        <div class="play">
          <span class="fa fa-play"></span>
        </div>
        <h4>Chill Tracks</h4>
        <p>Softer kinda dance</p>
      </div>

      <div class="item">
        <img src="" />
        <div class="play">
          <span class="fa fa-play"></span>
        </div>
        <h4>Feel-Good Indie Rock</h4>
        <p>The best indie rock vibes - classic and...</p>
      </div>

      <div class="item">
        <img src="" />
        <div class="play">
          <span class="fa fa-play"></span>
        </div>
        <h4>idk.</h4>
        <p>idk.</p>
      </div>
    </div>

    <hr>
  </div> -->
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