<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumArtists extends Model
{
  /**
   * Get the artist associated
   */
  public function artist()
  {
    return $this->belongsTo('App\Artist');
  }

  /**
   * Get the album associated
   */
  public function album()
  {
    return $this->belongsTo('App\Album');
  }
}
