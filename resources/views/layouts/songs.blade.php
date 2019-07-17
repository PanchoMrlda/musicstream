<div class="songs">
  @if(count($songs)> 0)
  @foreach($songs as $song)
  <div class="song-container" onclick="initAudio(this)" src="{{$song->getAudioUrl()}}" data-song="{{$song->name}}" data-artist="{{$song->artist->name}}" data-id="{{$song->id}}">
    <div>
      <p class="name">{{$song->name}}</p>
      <p class="artist">{{$song->artist->name}}</p>
    </div>
    <p class="song-duration">{{$song->durationToString()}}</p>
  </div>
  @endforeach
  @endif
</div>