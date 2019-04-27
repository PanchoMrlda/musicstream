<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/music-views.css">
  <script src="main.js"></script>
</head>

<body class="body">
  <header class="header">
    <div class="icon-menu-container">
      <img class="icon-menu" src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb78a0ec5322c000d852696/img/playlist-iconmenu@2x.png>
    </div>
    <div class="title-container">
      <div class="title">
        <span>Playlist</span>
      </div>
    </div>
    <figure class="profile-image-container">
      <img class="profile-image" src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb737fc148f14000d6ec9dd/img/now-playing-profile-image@2x.png>
    </figure>
  </header>
    <main class="main">
      <nav class="main-nav">
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
        <div class="main-nav__item"></div>
      </nav>
      <section class="content">
        <div class="playing">
          <div class="info">
            <span class="song">Inis Mona</span>
            <br>
            <span class="artist">Eluveitie</span>
          </div>
          <div class="button">
            <img class="oval" src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb73862c5322c00090d265e/img/playlist-oval@2x.png>
            <img class="pause-icon" src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cc1b5f9dc4425000aa8c472/img/playlist-combined-shape-1@2x.png>
          </div>
        </div>
        <div class="songs">
          @if(count($songs)> 0)
          @foreach($songs as $song)
          <div class="song-container" onclick="playAudio" src="{{$song->getAudioUrl()}}">
            <img class=divider src=https://anima-uploads.s3.amazonaws.com/projects/5c63fb77bc2e39000dda1cf8/releases/5cb726d4c5322c000a357f28/img/all-tracks-line-4-copy-5.png>
            <br>
            <span class="name">{{$song->name}}</span>
            <br>
            <span class="artist">{{$song->artist->name}}</span>
          </div>
          @endforeach
          @endif
        </div>
        </div>
      </section>
    </main>
    <footer class="footer">Footer</footer>
</body>

</html>