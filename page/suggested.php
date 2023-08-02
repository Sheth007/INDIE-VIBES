<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Indie Vibes - Badshah</title>
        <link rel="stylesheet" href="../css/suggest.css">
        <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    </head>
        <?php include 'header.php'; ?>
<body>
    <div class="container">
        <div class="songList">
            <p style="font-size: 20px;">Sugegsted Playlist 🎯</p>
            <div class="songItemContainer">
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">1</span>
                    <span class="songlistplay"><span class="timestamp"> 🏁 <i id="0" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="2">
                    <span class="songName">2</span>
                    <span class="songlistplay"><span class="timestamp"> 🤑 <i id="1" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="3">
                    <span class="songName">3</span>
                    <span class="songlistplay"><span class="timestamp"> 🤟 <i id="2" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="4">
                    <span class="songName">4</span>
                    <span class="songlistplay"><span class="timestamp"> 🍻 <i id="3" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="5">
                    <span class="songName">5</span>
                    <span class="songlistplay"><span class="timestamp"> 😎 <i id="4" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="6">
                    <span class="songName">6</span>
                    <span class="songlistplay"><span class="timestamp"> 👑 <i id="4" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="7">
                    <span class="songName">7</span>
                    <span class="songlistplay"><span class="timestamp"> 🎏 <i id="4" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="8">
                    <span class="songName">8</span>
                    <span class="songlistplay"><span class="timestamp"> 🚂 <i id="4" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="9">
                    <span class="songName">9</span>
                    <span class="songlistplay"><span class="timestamp"> 🍾 <i id="4" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="10">
                    <span class="songName">10</span>
                    <span class="songlistplay"><span class="timestamp"> 🗿 <i id="4" class="far songItemPlay fa-play-circle"></i> </span></span>
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
            <img src="../img/playing.gif" width="42px" alt="" id="gif"> <span id="masterSongName">Excuses</span>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <!-- <script src="../js/bad.js"></script> -->
    <script src="https://kit.fontawesome.com/26504e4a1f.js" crossorigin="anonymous"></script>
    <script>
        console.log("Welcome to Indie Vibes");

// Initialize the Variables
let songIndex = 0;
let audioElement = new Audio('playlist/1.mp3');
let masterPlay = document.getElementById('masterPlay');
let myProgressBar = document.getElementById('myProgressBar');
let gif = document.getElementById('gif');
let masterSongName = document.getElementById('masterSongName');
let songItems = Array.from(document.getElementsByClassName('songItem'));

let playlist = [
    {songName: "Cheques", filePath: "1.mp3", coverPath: "../covers/1.jpg"},
    {songName: "PAISA HAI TOH", filePath: "2.mp3", coverPath: "../covers/2.jpg"},
    {songName: "pyaar ki pungi", filePath: "3.mp3", coverPath: "../covers/3.jpg"},
    {songName: "Daru Badnaam", filePath: "4.mp3", coverPath: "../covers/4.jpg"},
    {songName: "Lil Nas X, Jack Harlow - INDUSTRY BABY", filePath: "5.mp3", coverPath: "../covers/5.jpg"},
    {songName: "Badshah O Badshah", filePath: "6.mp3", coverPath: "../covers/6.jpg"},
    {songName: "Mere Sapno ki Rani x THe Box", filePath: "7.mp3", coverPath: "../covers/1.jpg"},
    {songName: "Raftaare", filePath: "8.mp3", coverPath: "../covers/2.jpg"},
    {songName: "Yadav Brand 2", filePath: "9.mp3", coverPath: "../covers/3.jpg"},
    {songName: "GigaChade Theme", filePath: "10.mp3", coverPath: "../covers/4.jpg"},
]

songItems.forEach((element, i)=>{ 
    element.getElementsByTagName("img")[0].src = playlist[i].coverPath; 
    element.getElementsByClassName("songName")[0].innerText = playlist[i].songName; 
})
 

// Handle play/pause click
masterPlay.addEventListener('click', ()=>{
    if(audioElement.paused || audioElement.currentTime<=0){
        audioElement.play();
        masterPlay.classList.remove('fa-play-circle');
        masterPlay.classList.add('fa-pause-circle');
        gif.style.opacity = 1;
    }
    else{
        audioElement.pause();
        masterPlay.classList.remove('fa-pause-circle');
        masterPlay.classList.add('fa-play-circle');
        gif.style.opacity = 0;
    }
})
// Listen to Events
audioElement.addEventListener('timeupdate', ()=>{ 
    // Update Seekbar
    progress = parseInt((audioElement.currentTime/audioElement.duration)* 100); 
    myProgressBar.value = progress;
})

myProgressBar.addEventListener('change', ()=>{
    audioElement.currentTime = myProgressBar.value * audioElement.duration/100;
})

const makeAllPlays = ()=>{
    Array.from(document.getElementsByClassName('songItemPlay')).forEach((element)=>{
        element.classList.remove('fa-pause-circle');
        element.classList.add('fa-play-circle');
    })
}

Array.from(document.getElementsByClassName('songItemPlay')).forEach((element)=>{
    element.addEventListener('click', (e)=>{ 
        makeAllPlays();
        songIndex = parseInt(e.target.id);
        e.target.classList.remove('fa-play-circle');
        e.target.classList.add('fa-pause-circle');
        audioElement.src = `playlist/${songIndex+1}.mp3`;
        masterSongName.innerText = playlist[songIndex].songName;
        audioElement.currentTime = 0;
        audioElement.play();
        gif.style.opacity = 1;
        masterPlay.classList.remove('fa-play-circle');
        masterPlay.classList.add('fa-pause-circle');
    })
})

document.getElementById('next').addEventListener('click', ()=>{
    if(songIndex>=9){
        songIndex = 0
    }
    else{
        songIndex += 1;
    }
    audioElement.src = `../playlist/${songIndex+1}.mp3`;
    masterSongName.innerText = playlist[songIndex].songName;
    audioElement.currentTime = 0;
    audioElement.play();
    masterPlay.classList.remove('fa-play-circle');
    masterPlay.classList.add('fa-pause-circle');

})

document.getElementById('previous').addEventListener('click', ()=>{
    if(songIndex<=0){
        songIndex = 0
    }
    else{
        songIndex -= 1;
    }
    audioElement.src = `../playlist/${songIndex+1}.mp3`;
    masterSongName.innerText = playlist[songIndex].songName;
    audioElement.currentTime = 0;
    audioElement.play();
    masterPlay.classList.remove('fa-play-circle');
    masterPlay.classList.add('fa-pause-circle');
})
    </script>
</body>
</html>