<html>

<head>
  <link rel="shortcut icon" type=image/png href="images/favicon.png">
  <meta name=author content="Musically by Pancho">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Top Hits</title>
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
        <span>Top Hits</span>
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
      <div class="search">
        <img class="header-search-icon" src="images/search.png">
        <input class="search-in-store" type="text" placeholder="Search in Store">
      </div>
      <div class="top-of-the-month">
        <div class="top-title">
          <span class="title">Top of the month</span>
          <span class="see-all">SEE ALL</span>
        </div>
        @if(count($songs)> 0)
        @foreach($songs as $song)
        <div class="track">
          <div class="track-image-container">
            <img class="song-image" src="{{$song->getImageUrl()}}">
          </div>
          <div class="song-info">
            <p class="song-name">{{$song->name}}</p>
            <p class="song-artist">{{$song->artist->name}}</p>
          </div>
          <div class="track-button">
            <span>GET</span>
          </div>
        </div>
        @endforeach
        @endif
      </div>
    </section>
  </main>
  @include('layouts.footer')
</body>

</html>