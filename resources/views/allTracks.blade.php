<html>

<head>
  <link rel="shortcut icon" type=image/png href="images/favicon.png">
  <meta name=author content="Musically by Pancho">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>All Tracks</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" type="text/css" media="screen" href="css/music-views.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="js/music-views.js" defer="true"></script>
</head>

<body class="body">
  <header class="header">
    <div class="icon-menu-container">
      <img class="icon-menu" src=images/icon-menu.png>
    </div>
    <div class="title-container">
      <div class="title">
        <span>All Tracks</span>
      </div>
    </div>
    <figure class="profile-image-container">
      <img class="profile-image" src=images/pancho.jpg>
    </figure>
  </header>
  <main class="main">
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
        <div class="song-container" onclick="playAudio(this)" src="{{$song->getAudioUrl()}}" data-song="{{$song->name}}" data-artist="{{$song->artist->name}}">
          <img class=divider src="images/song-divider.png">
          <br>
          <span class="name">{{$song->name}}</span>
          <br>
          <span class="artist">{{$song->artist->name}}</span>
          <span class="song-duration">{{$song->durationToString()}}</span>
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
        <img class="shape" src="images/all-tracks-white.png">
      </div>
      <span class="icon-caption">All Tracks</span>
    </a>
    <a class="anchor" onclick="footerGoTo('/playlists', 'Playlists')">
      <div class="icon">
        <img class="shape" src="images/playlists.png">
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