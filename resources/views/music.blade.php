@extends('layouts.musicStyles')

@section('content')
  <div class="container">
    @include('layouts.sideMenu')
    <div class="center">
      @include('layouts.navbar')
      <div class="cover">
        <div class="jcarousel">
          <ul>
            @include('layouts.albums')
          </ul>
        </div>
      </div>
      <ul class="jcarousel-pagination"></ul>
      <div class="info">
        <div class="name">
          @if(count($songs) > 0)
            <h3 class="song">{{$songs[0]->name}}</h3>
            <p class="artist">{{$songs[0]->artist->name}}</p>
          @endif
        </div>
      </div>
    </div>
    <div class="bottom">
      <div class="action">
        <a href="#" class="previous jcarousel-prev"><i class="fa fa-step-backward"></i></a>
        <a href="#" class="play"><i class="fa fa-play fa-fw"></i></a>
        <a href="#" class="next jcarousel-next"><i class="fa fa-step-forward"></i></a>
      </div>
      <div class="length">
        <label for="fader">00:00</label>
        <input type="range" min="0" max="100" value="0" id="fader" step="1">
        <output for="fader" class="duration"></output>
      </div>
      <div class="options">
        <a href="#" class="shuffle"><i class="fa fa-random"></i></a>
        <a href="#" class="replay"><i class="fa fa-refresh"></i></a>
        <!-- <a href="#" class="volume"><i class="fa fa-volume-up"></i></a> -->
        <a href="#" class="favorite"><i class="fa fa-heart-o"></i></a>
      </div>
      @include('layouts.footer')
      <div class="volume-slider">
        <a href="#" class="close"><i class="fa fa-chevron-down"></i></a>
        <div class="volume-slider-inner">
          <i class="fa fa-volume-down"></i>
          <input class="volume-slider" type=range min=0 max=100 value=0 id=fader step=1 oninput="outputUpdate(value)">
          <i class="fa fa-volume-up"></i>
        </div>
      </div>
    </div>
    @if(count($songs) > 0)
      @foreach($songs as $song)
      <div class="overlay-image" style="background-image: url('{{$song->getImageUrl()}}');"></div>
      @endforeach
    @endif
    <div class="overlay"></div>
  </div>
  @include('layouts.songs')
@endsection
