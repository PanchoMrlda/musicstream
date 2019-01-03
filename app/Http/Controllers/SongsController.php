<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
use App\Album;
use App\Artist;

class SongsController extends Controller
{
  public function index()
  {
    $songs = Song::orderBy('plays', 'desc')->get();

    return view('topCharts')->with('songs', $songs);
  }

  public function getSong($id)
  {
    return Song::find($id);
  }

  public function updateSong($songData)
  {
    $songName = explode("/", $songData)[2];
    $albumName = explode("/", $songData)[1];
    $artistName = explode("/", $songData)[0];
    $artist = Artist::where('name', '=', $artistName);
    $album = Album::where([
      'name', '=', $albumName,
      'artist_id', '=', $artist->id
    ])-get()->first();
    $song = Song::where([
      'name', '=', $songName,
      'album_id', '=', $album->id
    ])-get()->first();
    $song->incPlays();
    return $song;
  }
}
