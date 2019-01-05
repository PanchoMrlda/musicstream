$(function () {
  $('.jcarousel').jcarousel({
    wrap: 'circular'
  });

  $('.jcarousel-pagination').jcarouselPagination({
    item: function (page) {
      return '<li id="jcarousel-item' + page + '"><a href="#' + page + '">' + page + '</a></li>';
    }
  });

  $('#jcarousel-item1').addClass('active');

  $('.jcarousel-pagination')
    .on('jcarouselpagination:active', 'li', function () {
      $(this).addClass('active');
    })
    .on('jcarouselpagination:inactive', 'li', function () {
      $(this).removeClass('active');
    });
});

$('.jcarousel-prev').click(function () {
  $('.jcarousel').jcarousel('scroll', '-=1');
  setTrack(this.className.includes("next"));
});

$('.jcarousel-next').click(function () {
  $('.jcarousel').jcarousel('scroll', '+=1');
  setTrack(this.className.includes("next"));
});

$(".options a").click(function () {
  $(this).toggleClass("active");
});

$(".favorite").click(function () {
  if ($(".options .favorite i").hasClass("fa-heart")) {
    $(".options .favorite i").removeClass("fa-heart").addClass("fa-heart-o");
  } else {
    $(".options .favorite i").removeClass("fa-heart-o").addClass("fa-heart");
  }
});

$(".play").click(function () {
  playAudio();
});

$(".volume").click(function () {
  $(".volume").removeClass("active");
  $(".volume-slider").animate({
    marginTop: '-140px'
  }, 500);
});

$(".volume-slider .close").click(function () {
  $(".volume-slider").animate({
    marginTop: '0px'
  }, 500);
})

$(".side-menu-trigger").click(function () {
  $(".side-menu").animate({
    marginLeft: '0px'
  });
  $(".volume-slider").animate({
    marginTop: '0px'
  }, 500);
});

$(".side-menu li a, .side-menu .close").click(function () {
  event.preventDefault();
  $(".side-menu").animate({
    marginLeft: '-310px'
  });
  newpage(this.href);
});

$('.volume-slider input[type="range"]').on('input', function () {
  var percent = Math.ceil(((this.value - this.min) / (this.max - this.min)) * 100);
  console.log(this.min);
  $(this).css('background', '-webkit-linear-gradient(left, #e74c3c 0%, #e74c3c ' + percent + '%, #999 ' + percent + '%)');
});

// $(".volume-slider").slider({
//   min: 0,
//   max: 100,
//   value: 0,
//   range: "min",
//   animate: true,
//   slide: function (event, ui) {
//     setVolume((ui.value) / 100);
//   }
// });

function setVolume(myVolume) {
  var myMedia = document.getElementsByClassName('audio-avalanche');
  myMedia.volume = myVolume;
}

function newpage(newLocation) {
  setTimeout(() => {
    window.location = newLocation;
  }, 500);
}

function getSongName() {
  var songRawName = decodeURI($('.audio.active')[0].src).split('/')[6];
  return songRawName.replace('.mp3', '');
}

function getArtistName() {
  return $('.audio.active')[0].getAttribute('artist');
}

function cleanSongName(songName) {
  var name;
  if(songName.substr(0, 4).match(/^\d{1}-\d{2}$/)) {
    name = songName.substr(5);
  } else {
    name = songName.substr(3);
  }
  return name.replace('.mp3', '');
}

function convertTime(seconds) {
  var date = new Date(null);
  if (seconds == Infinity) {
    date.setSeconds(0);
  } else {
    date.setSeconds(seconds);
  }
  return date.toISOString().substr(14, 5);
}

function setTrack(next) {
  var newTrack;
  var newTrackDefaultIndex;
  var musicPlaying;
  var oldTrack = $(".audio.active")[0];
  musicPlaying = oldTrack.duration > 0 && !oldTrack.paused;
  oldTrack.pause();
  $(".play i").removeClass("fa-pause").addClass("fa-play");
  $(".play").removeClass("active");
  if (next) {
    newTrack = oldTrack.nextElementSibling;
    newTrackDefaultIndex = 0;
  } else {
    newTrack = oldTrack.previousElementSibling;
    newTrackDefaultIndex = $(".audio").length - 1;
  }
  if (newTrack.tagName != "AUDIO") {
    newTrack = $(".audio")[newTrackDefaultIndex];
  }
  newTrack.currentTime = 0;
  $(".audio.active").removeClass("active");
  newTrack.className += " active";
  $(".song").html(getSongName());
  $(".artist").html(getArtistName());
  if (musicPlaying || oldTrack.duration == oldTrack.currentTime) {
    playAudio();
  }
}

function updateSongs(songData) {
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  $.ajax({
    url: '/songs',
    type: 'POST',
    data: {_token: CSRF_TOKEN, songData: songData},
    dataType: 'JSON',
    success: function (data) { 
      console.log(data);
    }
  });
}

function postSongs() {
  var audioData = decodeURI($(".audio.active")[0].src).split("/");
  var artist = getArtistName();
  var cover = audioData[5];
  var title = audioData[6].replace('.mp3', '');
  var songData = artist + '/' + cover + '/' + title;
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  $.ajax({
    url: '/songs',
    type: 'POST',
    data: {_token: CSRF_TOKEN, songData: songData},
    dataType: 'JSON',
    success: function (data) { 
      console.log(data);
    }
  });
}

function playAudio() {
  var audio;
  var audioData = decodeURI($(".audio.active")[0].src).split("/");
  var artist = getArtistName();
  var cover = audioData[5];
  var title = audioData[6].replace('.mp3', '');
  var songData = artist + '/' + cover + '/' + title;
  $(".play").toggleClass("active");
  if ($(".play i").hasClass("fa-play")) {
    $(".play i").removeClass("fa-play").addClass("fa-pause");
  } else {
    $(".play i").removeClass("fa-pause").addClass("fa-play");
  }
  if ($(".play").hasClass("active")) {
    audio = $(".audio.active")[0];
    var playPromise = audio.play();
    if (playPromise !== undefined) {
      playPromise.then(_ => {
        // Automatic playback started!
        // Show playing UI.
        audio.play();
      })
      .catch(error => {
        // Auto-play was prevented
        // Show paused UI.
        console.log('Error when play event');
      });
    }
    audio.ontimeupdate = function () {
      $(".length label")[0].innerHTML = convertTime(audio.currentTime.toFixed());
      $(".length input")[0].value = (audio.currentTime/audio.duration * 100).toFixed();
      $(".length output")[0].innerHTML = convertTime(audio.duration.toFixed());
      if (audio.currentTime >= audio.duration) {
        updateSongs(songData);
        $('.jcarousel').jcarousel('scroll', '+=1');
        setTrack(true);
        // if (!isMobileDevice()) {
        //   $('.jcarousel-next').click();
        // }
      }
    };
  } else {
    audio = $(".audio.active")[0];
    audio.pause();
  }
}
