@if(count($songs) > 0)
  @foreach($songs as $index => $song)
  <?php
  if ($index == 0) {
    $active = ' active';
  } else {
    $active = '';
  }
  
  ?>
  <audio class="audio{{$active}}" src="{{$song->getAudioUrl()}}" type="audio/mpeg"> 
    Your browser does not support the audio tag!
  </audio>
  @endforeach
@endif
