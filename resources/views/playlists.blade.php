<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Musically - Playlists</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/music-views.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>

<body class="body">
  <header class="header">
    <div class="icon-menu-container">
      <img class="icon-menu" src=images/icon-menu.png>
    </div>
    <div class="title-container">
      <div class="title">
        <span>Playlist</span>
      </div>
    </div>
    <figure class="profile-image-container">
      <img class="profile-image" src=images/pancho.jpg>
    </figure>
  </header>
  <main class="main">
    <nav class="main-nav">
      <div class="main-nav__item">
        Favourites
      </div>
      <div class="main-nav__item">
        Rock
      </div>
      <div class="main-nav__item">
        Folk
      </div>
      <div class="main-nav__item">
        Country
      </div>
      <div class="main-nav__item">
        Pop
      </div>
    </nav>
    <section class="content">
      <div class="playing">
        <div class="info">
          <span class="song"></span>
          <br>
          <span class="artist"></span>
        </div>
        <div class="button">        
          <span class="far play">&#xf144;</span>
          <span class="far pause" style="display:none">&#xf28b;</span>
        </div>
      </div>
      <div class="songs">
        @if(count($songs)> 0)
        @foreach($songs as $song)
        <div class="song-container" onclick="playAudio(this)" src="{{$song->getAudioUrl()}}" data-song="{{$song->name}}" data-artist="{{$song->artist->name}}">
          <img class=divider src="images/song-divider.png">
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
  <footer class="footer">
    <a class="anchor" href="topHits">
    <div class="icon">
        <img class="shape" src="images/top-hits.png">
      </div>
      <span class="icon-caption">Top Hits</span>
    </a>
    <a class="anchor" href="allTracks">
      <div class="icon">
        <img class="shape" src="images/all-tracks.png">
      </div>
      <span class="icon-caption">All tracks</span>
    </a>
    <a class="anchor" href="playlists">
      <div class="icon">
        <img class="shape" src="images/playlists-white.png">
      </div>
      <span class="icon-caption">Playlists</span>
    </a>
    <a class="anchor" href="#">
      <div class="icon">
        <img class="shape" src="images/search.png">
      </div>
      <span class="icon-caption">Search</span>
    </a>
  </footer>
  <script src="js/music-views.js" defer="true"></script>
</body>

</html>