<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PanchosMusic</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/app.css"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
  @include('inc.navbar')

  <div class="container">
    @if(Request::is('/'))
      @include('inc.showcase')
    @endif
    <div class="row">
      <div class="col-md-8">
        @include('inc.messages')
        @yield('content')
      </div>
      <div class="col-md-4">
        @include('inc.sidebar')
      </div>
    </div>
  </div>
  <footer id="footer" class="text-center">
    <p>Copyright 2018 &copy; PanchosMusic</p>
  </footer>
</body>
</html>
