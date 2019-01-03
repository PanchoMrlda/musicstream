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
  var audio;
  var audioData = decodeURI($(".audio.active")[0].src).split("/");
  var cover = audioData[5];
  var artist = audioData[4];
  var title = cleanSongName(audioData[5]);
  var songData = artist + '/' + cover + '/' + title;
  $(".play").toggleClass("active");
  if ($(".play i").hasClass("fa-play")) {
    $(".play i").removeClass("fa-play").addClass("fa-pause");
  } else {
    $(".play i").removeClass("fa-pause").addClass("fa-play");
  }
  if ($(".play").hasClass("active")) {
    audio = $(".audio.active")[0];
    audio.play();
    audio.ontimeupdate = function () {
      $(".length label")[0].innerHTML = convertTime(audio.currentTime.toFixed());
      $(".length input")[0].value = (audio.currentTime/audio.duration * 100).toFixed();
      $(".length output")[0].innerHTML = convertTime(audio.duration.toFixed());
      if (audio.currentTime >= audio.duration - 1) {
        updateSongs(songData);
        // if (!isMobileDevice()) {
          $('.jcarousel-next').click();
        // }
      }
    };
  } else {
    audio = $(".audio.active")[0];
    audio.pause();
  }
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
  return cleanSongName(songRawName);
}

function getArtistName() {
  return decodeURI($('.audio.active')[0].src).split('/')[4];
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
  if (musicPlaying) {
    $(".play")[0].click();
  }
}

function updateSongs(songData) {
  // var xmlhttp = new XMLHttpRequest();
  // // var pattern = /_\w*_/;
  // // song = cleanStringSymbols(song.replace("'", "_").replace(':', '_'));
  // // if (pattern.test(song)) {
  // //   song = song.replace(/_/g, '"');
  // // }
  // xmlhttp.onreadystatechange = function() {
  //   if (this.readyState == 4 && this.status == 200) {
  //   }
  // };
  // // xmlhttp.open('GET', '/controllers/songs_controller.php?song=' + song, true);
  // xmlhttp.open('POST', '/songs', true);
  // xmlhttp.send(songData);
  $.post( '/songs', { songData: songData } );
}
