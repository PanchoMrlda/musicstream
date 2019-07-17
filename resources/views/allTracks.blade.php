<html>

<head>
  <link rel="shortcut icon" type=image/png href="images/favicon.png">
  <meta name=author content="Musically by Pancho">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>All Tracks</title>
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
        <span>All Tracks</span>
      </div>
    </div>
    <figure class="profile-image-container">
      <img class="profile-image" src=images/pancho.jpg>
    </figure>
  </header>
  <main class="main">
    <section class="content">
      @include('layouts.playing')
      @include('layouts.songs')
    </section>
  </main>
  @include('layouts.footer')
</body>
</html>