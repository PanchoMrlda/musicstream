<html>

<head>
  <link rel="shortcut icon" type=image/png href="images/favicon.png">
  <meta name=author content="Musically by Pancho">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Playlists</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" type="text/css" media="screen" href="css/music-views.css">
  <link href="css/fonts/fontawesome/all.css" rel="stylesheet">
  <script src="js/music-views.js" defer="true"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
      <div class="main-nav__item-add">
        +
      </div>
      <div class="main-nav__item-active">
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
          <span class="song">Not Playing</span>
          <br>
          <span class="artist">Not Playing</span>
        </div>
        <div class="button">        
          <span class="far play">&#xf144;</span>
          <span class="far pause" style="display:none">&#xf28b;</span>
        </div>
      </div>
      <div class="songs">
        @if(count($songs)> 0)
        @foreach($songs as $song)
        <div class="song-container" onclick="initAudio(this)" src="{{$song->getAudioUrl()}}" data-song="{{$song->name}}" data-artist="{{$song->artist->name}}" data-id="{{$song->id}}">
          <div>
            <p class="name">{{$song->name}}</p>
            <p class="artist">{{$song->artist->name}}</p>
          </div>
        </div>
        @endforeach
        @endif
      </div>
    </section>
  </main>
  <footer class="footer">
    <a class="anchor" onclick="footerGoTo('/topHits', 'Top Hits')">
      <div class="icon">
        <img class="shape" src="images/top-hits.png">
      </div>
      <span class="icon-caption">Top Hits</span>
    </a>
    <a class="anchor" onclick="footerGoTo('/allTracks', 'All Tracks')">
      <div class="icon">
        <img class="shape" src="images/all-tracks.png">
      </div>
      <span class="icon-caption">All Tracks</span>
    </a>
    <a class="anchor" onclick="footerGoTo('/playlists', 'Playlists')">
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
</body>

</html>