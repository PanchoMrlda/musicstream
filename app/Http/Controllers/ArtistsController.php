<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;

class ArtistsController extends Controller
{
  public function artistsNames(Request $request)
  {
    $artistName = $request->artistNameIncomplete;
    return Artist::whereRaw("UPPER(name) LIKE '%".$artistName."%'")->get()->pluck('name');
  }
}