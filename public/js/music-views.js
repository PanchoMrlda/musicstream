var audio = new Audio();

function playAudio(element) {
  audio.pause();
  document.getElementsByClassName("far play")[0].style.display = "block";
  document.getElementsByClassName("far pause")[0].style.display = "none";
  audio.src = element.getAttribute("src");
  audio.song = element.getAttribute("data-song");
  audio.artist = element.getAttribute("data-artist");
  document.getElementsByClassName("song")[0].innerHTML = audio.song;
  document.getElementsByClassName("artist")[0].innerHTML = audio.artist;
  audio.play();
}

Array.prototype.map.call(document.getElementsByClassName("far"), function (element) {
  element.addEventListener("click", function () {
    if (audio.paused && audio.src) {
      document.getElementsByClassName("far play")[0].style.display = "none";
      document.getElementsByClassName("far pause")[0].style.display = "block";
      audio.play();
    } else if (!audio.paused && audio.src) {
      document.getElementsByClassName("far play")[0].style.display = "block";
      document.getElementsByClassName("far pause")[0].style.display = "none";
      audio.pause();
    }
  });
});

audio.addEventListener("play", function () {
  if (audio.paused) {
    document.getElementsByClassName("far play")[0].style.display = "block";
    document.getElementsByClassName("far pause")[0].style.display = "none";
  } else {
    document.getElementsByClassName("far play")[0].style.display = "none";
    document.getElementsByClassName("far pause")[0].style.display = "block";
  }
});

function footerGoTo(url) {
  var xmlHttp;
  var urlIsDifferent;
  if ((window.location.hash === "" && window.location.pathname !== url) ||
      (window.location.hash !== "" && !window.location.hash.includes(url))) {
    urlIsDifferent = true;
  }
  if (urlIsDifferent) {
    xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", url, false );
    xmlHttp.send( null );
    window.location.hash = url;
    document.getElementsByTagName("html")[0].innerHTML = xmlHttp.responseText;
  }
}
