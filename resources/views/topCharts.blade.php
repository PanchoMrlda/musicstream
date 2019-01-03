@extends('layouts.musicStyles')

@section('content')
  <div class="container">
    @include('layouts.sideMenu')
    <div class="center">
      @include('layouts.navbar')
      <ul id="songs-header" class="list-group songs-container">
        <li class="list-group-item">Song:</li>
        <li class="list-group-item">Album:</li>
        <li class="list-group-item">Artist:</li>
      </ul>
      @if(count($songs) > 0)
        @foreach($songs as $song)
          <ul class="songs-container">
            <li class="list-group-item">{{$song->name}}</li>
            <li class="list-group-item">{{$song->album->name}}</li>
            <li class="list-group-item">{{$song->album->artist->name}}</li>
          </ul>
        @endforeach
      @endif
    </div>
  </div>
@endsection
