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
    // $songs = Song::orderBy('plays', 'desc')->get();

    // return view('topCharts')->with('songs', $songs);
    return Song::all();
  }

  public function getSong($id)
  {
    return Song::find($id);
  }

  public function examplePost(Request $request)
  {
    $response = array(
      "status" => "success",
      "content" => $request->content
    );
    return response()->json($response);
  }

  public function updateSong(Request $request)
  {
    $songData = $request->songData;
    $songName = explode("/", $songData)[2];
    $albumName = explode("/", $songData)[1];
    $artistName = explode("/", $songData)[0];
    $artist = Artist::where('name', '=', $artistName)->get()->first();
    Album::join('album_artists', 'albums.id', '=', 'album_artists.album_id')
         ->where([
          ['name', '=', $albumName],
          ['artist_id', '=', $artist->id]
         ])
         ->get()
         ->first();
    $album = Album::where([
      ['name', '=', $albumName],
      ['artist_id', '=', $artist->id]
    ])->get()->first();
    $song = Song::where([
      ['name', '=', $songName],
      ['album_id', '=', $album->id]
    ])->get()->first();
    $song->incPlays();
  }
}
