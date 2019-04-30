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
  $(".side-menu:first").animate({
    marginLeft: '0px'
  });
  $(".volume-slider").animate({
    marginTop: '0px'
  }, 500);
});

$(".side-menu li a, .side-menu .close, .side-menu .btn").click(function () {
  $(".side-menu").animate({
    marginLeft: '-310px'
  });
});

$(".side-menu ul li:first").click(function () {
  $(".side-menu:nth-child(2)").animate({
    marginLeft: '0px'
  });
  $(".volume-slider").animate({
    marginTop: '0px'
  }, 500);
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
  // if (newTrack.tagName != "AUDIO") {
  if (!newTrack) {
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

function getSongs(artistName, mediaKind) {
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  $.ajax({
    url: '/songs/' + mediaKind,
    type: 'POST',
    data: {_token: CSRF_TOKEN, name: artistName},
    dataType: 'JSON',
    success: function (data) { 
      console.log(data);
      if (data.length !== 0) {
        $('.jcarousel ul:first').html(data[0]);
        $('.song-list:first').html(data[1]);
        $(".song").html(getSongName());
        $(".artist").html(getArtistName());
        initCarousel();
      }
    }
  });
}

function initCarousel() {
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
}

$('.search-menu-footer button:last').click(function () {
  var artistName = $('#search-artist')[0].value;
  var albumName = $('#search-album')[0].value;
  if (artistName) {
    getSongs(artistName, 'artist');
  } else {
    getSongs(albumName, 'album');
  }
});

$( function() {
  function log( message ) {
    $("<div>").text(message).prependTo("#log");
    $("#log").scrollTop(0);
  }
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  $("#search-album").autocomplete({
    source: function(request, response) {
      $.ajax( {
        url: "/albums/name",
        type: 'POST',
        data: {_token: CSRF_TOKEN, albumNameIncomplete: request.term},
        dataType: 'JSON',
        success: function (data) { 
          console.log(data);
          response(data);
        }
      });
    },
    minLength: 2,
    select: function(event, ui) {
      log("Selected: " + ui.item.value + " aka " + ui.item.id);
    }
  });
  $('.ui-front:first').css('z-index', 1040);
});

$( function() {
  function log( message ) {
    $("<div>").text(message).prependTo("#log");
    $("#log").scrollTop(0);
  }
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  $("#search-artist").autocomplete({
    source: function(request, response) {
      $.ajax( {
        url: "/artists/name",
        type: 'POST',
        data: {_token: CSRF_TOKEN, artistNameIncomplete: request.term},
        dataType: 'JSON',
        success: function (data) { 
          console.log(data);
          response(data);
        }
      });
    },
    minLength: 2,
    select: function(event, ui) {
      log("Selected: " + ui.item.value + " aka " + ui.item.id);
    }
  });
  $('.ui-front:first').css('z-index', 1040);
});

function serverRequest(url, requestType, params = []) {
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  var requestData = (requestType != 'get') ? {_token: CSRF_TOKEN, params: params} : null;
  $.ajax({
    url: url,
    type: requestType,
    data: requestData,
    dataType: 'JSON',
    success: function (data) { 
      console.log('data:', data);
    }
  });
}

$('.search-menu-body input').click(function(){
  $('.ui-autocomplete-input:first').val('');
  $('.ui-autocomplete-input:last').val('');
});
