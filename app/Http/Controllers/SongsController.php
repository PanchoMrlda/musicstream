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
    $album = Album::join('album_artists', 'albums.id', '=', 'album_artists.album_id')
                  ->join('artists', 'album_artists.artist_id', '=', 'artists.id')
                  ->where([
                    ['albums.name', '=', $albumName],
                    ['artists.id', '=', $artist->id]
                  ])
                  ->select('albums.*')
                  ->get()
                  ->first();
    $song = Song::where([
      ['name', '=', $songName],
      ['album_id', '=', $album->id]
    ])->get()->first();
    $song->incPlays();
  }

  public function artistSongs(Request $request)
  {
    $artistName = $request->name;
    if ($artistName) {
      $htmlSongs = "";
      $htmlAlbums = "";
      $artist = Artist::where('name', '=', $artistName)->get()->first();
      $albums = $artist->albums;
      $songs = [];
      foreach ($albums as $album) {
        $songs[] = $album->songs->where('artist_id', '=', $artist->id);
      }
      $songs = array_flatten($songs);
      foreach ($songs as $index => $song) {
        $htmlAlbums .= "<li><img src='".$song->getImageUrl()."' alt='' /></li>";
        if ($index == 0) {
          $htmlSongs .= "<audio class='audio active' artist='".$song->artist->name."' src='".$song->getAudioUrl()."' type='audio/mpeg'>Your browser does not support the audio tag!</audio>";
        } else {
          $htmlSongs .= "<audio class='audio' artist='".$song->artist->name."' src='".$song->getAudioUrl()."' type='audio/mpeg'>Your browser does not support the audio tag!</audio>";
        }
      }
      $result = [$htmlAlbums, $htmlSongs];
    } else {
      $result = [];
    }
    return response()->json($result);
  }

  public function albumSongs(Request $request)
  {
    $albumName = $request->name;
    if ($albumName) {
      $htmlSongs = "";
      $htmlAlbum = "";
      $album = Album::where('name', '=', $albumName)->get()->first();
      $songs = $album->songs;
      $htmlAlbum = "<li><img src='".$songs->first()->getImageUrl()."' alt='' /></li>";
      foreach ($songs as $index => $song) {
        if ($index == 0) {
          $htmlSongs .= "<audio class='audio active' album='".$song->album->name."' src='".$song->getAudioUrl()."' type='audio/mpeg'>Your browser does not support the audio tag!</audio>";
        } else {
          $htmlSongs .= "<audio class='audio' album='".$song->album->name."' src='".$song->getAudioUrl()."' type='audio/mpeg'>Your browser does not support the audio tag!</audio>";
        }
      }
      $result = [$htmlAlbum, $htmlSongs];
    } else {
      $result = [];
    }
    return response()->json($result);
  }
}
