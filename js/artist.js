document.addEventListener("DOMContentLoaded", function () {
    const audioPlayer = document.getElementById("audio-player");
    const playBtn = document.getElementById("play-btn");
    const pauseBtn = document.getElementById("pause-btn");
    const prevBtn = document.getElementById("prev-btn");
    const nextBtn = document.getElementById("next-btn");
    const volumeControl = document.getElementById("volume-control");
    const playlistItems = document.querySelectorAll("#playlist-items li");
    const progressBar = document.querySelector(".progress-bar");
    const currentTimeDisplay = document.getElementById("current-time");
    const totalTimeDisplay = document.getElementById("total-time");
    const progressContainer = document.querySelector(".progress-container");

    let currentTrack = 0;

    function loadTrack() {
        audioPlayer.src = playlistItems[currentTrack].getAttribute("data-src");
        audioPlayer.load();
    }

    function playTrack() {
        audioPlayer.play();
    }

    function pauseTrack() {
        audioPlayer.pause();
    }

    function nextTrack() {
        currentTrack++;
        if (currentTrack > playlistItems.length - 1) {
            currentTrack = 0;
        }
        loadTrack();
        playTrack();
        setActiveTrack();
    }

    function prevTrack() {
        currentTrack--;
        if (currentTrack < 0) {
            currentTrack = playlistItems.length - 1;
        }
        loadTrack();
        playTrack();
        setActiveTrack();
    }

    function setVolume() {
        audioPlayer.volume = volumeControl.value;
    }

    function setActiveTrack() {
        playlistItems.forEach((item) => {
            item.classList.remove("active");
        });
        playlistItems[currentTrack].classList.add("active");
    }

    function playNextTrack() {
        if (currentTrack < playlistItems.length - 1) {
            nextTrack();
        } else {
            currentTrack = 0;
            loadTrack();
            playTrack();
            setActiveTrack();
        }
    }

    audioPlayer.addEventListener("ended", playNextTrack);

    loadTrack();

    playBtn.addEventListener("click", playTrack);
    pauseBtn.addEventListener("click", pauseTrack);
    nextBtn.addEventListener("click", nextTrack);
    prevBtn.addEventListener("click", prevTrack);
    volumeControl.addEventListener("input", setVolume);

    playlistItems.forEach((item, index) => {
        item.addEventListener("click", () => {
            currentTrack = index;
            loadTrack();
            playTrack();
            setActiveTrack();
        });
    });

    const repeatBtn = document.getElementById("repeat-btn");
    let isRepeat = false;

    function toggleRepeat() {
        isRepeat = !isRepeat;
        repeatBtn.classList.toggle("active", isRepeat);
    }

    function playNextTrack() {
        if (isRepeat) {
            loadTrack();
            playTrack();
            setActiveTrack();
        } else if (currentTrack < playlistItems.length - 1) {
            nextTrack();
        } else {
            currentTrack = 0;
            loadTrack();
            playTrack();
            setActiveTrack();
        }
    }

    repeatBtn.addEventListener("click", toggleRepeat);
    audioPlayer.addEventListener("ended", playNextTrack);

    // Update progress bar and time display
    audioPlayer.addEventListener("timeupdate", () => {
        const currentTime = audioPlayer.currentTime;
        const duration = audioPlayer.duration;

        const currentTimeMinutes = Math.floor(currentTime / 60);
        const currentTimeSeconds = Math.floor(currentTime % 60);

        const durationMinutes = Math.floor(duration / 60);
        const durationSeconds = Math.floor(duration % 60);

        currentTimeDisplay.textContent = `${currentTimeMinutes}:${currentTimeSeconds < 10 ? '0' : ''}${currentTimeSeconds}`;
        totalTimeDisplay.textContent = `${durationMinutes}:${durationSeconds < 10 ? '0' : ''}${durationSeconds}`;

        // Update the music progress bar
        const progressBarWidth = (currentTime / duration) * 100;
        progressBar.style.width = `${progressBarWidth}%`;
    });

    // Seek to a position in the track when clicking on the progress bar
    progressContainer.addEventListener("click", (e) => {
        const clickX = e.clientX - progressContainer.getBoundingClientRect().left;
        const progressBarWidth = (clickX / progressContainer.offsetWidth) * 100;
        audioPlayer.currentTime = (progressBarWidth / 100) * audioPlayer.duration;
    });
});