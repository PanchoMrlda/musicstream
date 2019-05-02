var audio = new Audio();
var trackList = [];
var trackNumber = 0;

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

function initAudio(element) {
  trackList = Array.prototype.slice.call(document.getElementsByClassName("song-container"));
  trackNumber = trackList.indexOf(element);
  audio.pause();
  audio.src = element.getAttribute("src");
  audio.song = element.getAttribute("data-song");
  audio.artist = element.getAttribute("data-artist");
  audio.id = element.getAttribute("data-id");
  setPlayPauseButton();
  playAudio();
}

function playAudio() {
  setAudioInfo(audio.song, audio.artist);
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

function nextTrack() {
  var element;
  trackNumber++;
  if (trackNumber >= trackList.length) {
    trackNumber = 0;
  }
  element = trackList[trackNumber];
  audio.src = element.getAttribute("src");
  audio.song = element.getAttribute("data-song");
  audio.artist = element.getAttribute("data-artist");
  playAudio();
}

function getSong() {
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open("GET", "songs/" + audio.id, false);
  xmlHttp.send();
  return JSON.parse(xmlHttp.responseText);
}

function updatePlays() {
  var xmlHttp;
  var CSRF_TOKEN = document.getElementsByName("csrf-token")[0].getAttribute('content');
  var song = getSong();
  var plays = song.plays + 1;
  xmlHttp = new XMLHttpRequest();
  xmlHttp.open("PUT", "/songs/" + audio.id, true);
  xmlHttp.setRequestHeader("Content-type", "application/json");
  xmlHttp.send(JSON.stringify({_token: CSRF_TOKEN, plays: plays}));
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

  audio.addEventListener("ended", function () {
    updatePlays();
    nextTrack();
  });

  document.getElementsByClassName('icon-menu')[0].addEventListener("click", function () {
    
  });
}

initEvents();
setFooterIcon(document.title);
