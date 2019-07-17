<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;

class MusicController extends Controller
{
  public function index()
  {
    $songs = Song::all();

    return view('allTracks')->with('songs', $songs);
  }

  public function allTracks()
  {
    $songs = Song::all();
    return view('allTracks')->with('songs', $songs);
  }

  public function playlists()
  {
    $songs = Song::all();
    return view('playlists')->with('songs', $songs);
  }

  public function topHits()
  {
    $songs = Song::orderBy('plays', 'DESC')->take(10)->get();
    return view('topHits')->with('songs', $songs);
  }

  public function topCharts()
  {
    return view('topCharts');
  }
}
