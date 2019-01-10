<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
  public function albumsNames(Request $request)
  {
    $albumName = $request->albumNameIncomplete;;
    return Album::whereRaw("UPPER(name) LIKE '%".$albumName."%'")->get()->pluck('name');
  }
}
