@if(count($songs) > 0)
  @foreach($songs as $song)
    <li><img src="{{$song->getImageUrl()}}" alt="" /></li>
  @endforeach
@endif
