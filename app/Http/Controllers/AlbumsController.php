<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
  public function albumsNames(Request $request)
  {
    $albumName = $request->albumNameIncomplete;;
    return Album::whereRaw("UPPER(name) LIKE '".$albumName."%'")->get()->pluck('name');
  }



  /**
   * GET /albums
   */
  public function index(Request $request)
  {
    return Album::all();
  }

  /**
   * GET /albums/:id
   */
  public function show($id)
  {
    return Album::find($id);
  }

  /**
   * POST /albums
   */
  public function store(Request $request)
  {
    $paramsToCreate = json_decode($request->getContent(), true);
    $album = Album::create($paramsToCreate);
    return $album;
  }

  /**
   * PUT /albums/:id
   */
  public function update(Request $request, $id)
  {
    $album = Album::find($id);
    $paramsToUpdate = json_decode($request->getContent(), true);
    $album->update($paramsToUpdate);
    return $album;
  }

  /**
   * DELETE /albums/:id
   */
  public function destroy($id)
  {
    $album = Album::find($id);
    $album->delete();
  }
}
