<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;

class ArtistsController extends Controller
{
  public function artistsNames(Request $request)
  {
    $artistName = $request->artistNameIncomplete;
    return Artist::whereRaw("UPPER(name) LIKE '".$artistName."%'")->get()->pluck('name');
  }

  /**
   * GET /artists
   */
  public function index(Request $request)
  {
    return Artist::all();
  }

  /**
   * GET /artists/:id
   */
  public function show($id)
  {
    return Artist::find($id);
  }

  /**
   * POST /artists
   */
  public function store(Request $request)
  {
    $paramsToCreate = json_decode($request->getContent(), true);
    $artist = Artist::create($paramsToCreate);
    return $artist;
  }

  /**
   * PUT /artists/:id
   */
  public function update(Request $request, $id)
  {
    $artist = Artist::find($id);
    $paramsToUpdate = json_decode($request->getContent(), true);
    $artist->update($paramsToUpdate);
    return $artist;
  }

  /**
   * DELETE /artists/:id
   */
  public function destroy($id)
  {
    $artist = Artist::find($id);
    $artist->delete();
  }
}