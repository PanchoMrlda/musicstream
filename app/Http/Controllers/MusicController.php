<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;

class MusicController extends Controller
{
  public function index()
  {
    $songs = Song::all();

    return view('music')->with('songs', $songs);
  }

  public function topCharts()
  {
    return view('topCharts');
  }
}
