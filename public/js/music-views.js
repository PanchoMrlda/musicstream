var audio = new Audio();

/**
 * METHODS
 */
function setFooterIcon(title) {
  var icons = document.getElementsByClassName("anchor");
  var targetIcon = Array.prototype.find.call(icons, function (element) {
    return element.innerHTML.includes(title);
  });
  targetIcon.style.opacity = 1;
  targetIcon.children[1].style.color = "white";
}

function setAudioInfo(song, artist) {
  song = song || "Not playing";
  artist = artist || "Not playing";
  document.getElementsByClassName("song")[0].innerHTML = song;
  document.getElementsByClassName("artist")[0].innerHTML = artist;
}

function setPlayPauseButton() {
  var playButton = document.getElementsByClassName("far play")[0];
  var pauseButton = document.getElementsByClassName("far pause")[0];
  if (!audio.paused && audio.src) {
    playButton.style.display = "none";
    pauseButton.style.display = "block";
  } else if (audio.paused && audio.src) {
    playButton.style.display = "block";
    pauseButton.style.display = "none";
  }
}

function playAudio(element) {
  audio.pause();
  audio.src = element.getAttribute("src");
  audio.song = element.getAttribute("data-song");
  audio.artist = element.getAttribute("data-artist");
  try {
    setAudioInfo(audio.song, audio.artist);
    setPlayPauseButton();
  } catch (error) {
    console.log(error);
  }
  audio.play();
}

function footerGoTo(url, title) {
  var indexTagBegin;
  var indexTagEnd;
  var xmlHttp;
  var response;
  var tag = "body";
  var urlIsDifferent = false;
  if ((window.location.hash === "" && window.location.pathname !== url) ||
      (window.location.hash !== "" && !window.location.hash.includes(url))) {
    urlIsDifferent = true;
  }
  if (urlIsDifferent) {
    xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        response = xmlHttp.responseText;
        indexTagBegin = response.indexOf("<" + tag);
        indexTagEnd = response.indexOf("</" + tag);
        response = response.substring(indexTagBegin, indexTagEnd);
        document.getElementsByTagName(tag)[0].innerHTML = response;
        setPlayPauseButton();
        setAudioInfo(audio.song, audio.artist);
        initEvents();
        setFooterIcon(title);
      }
    };
    xmlHttp.open("GET", url, true);
    xmlHttp.send();
    window.history.replaceState({} , title, url);
    document.title = title;
  }
}

/**
 * EVENTS
 */
function initEvents() {
  Array.prototype.map.call(document.getElementsByClassName("far"), function (element) {
    element.addEventListener("click", function () {
      if (audio.paused && audio.src) {
        audio.play();
      } else if (!audio.paused && audio.src) {
        audio.pause();
      }
      setPlayPauseButton();
    });
  });
  
  audio.addEventListener("play", function () {
    setPlayPauseButton();
  });  
}

initEvents();
setFooterIcon(document.title);
