<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
  /**
   * Get the album associated with the artist
   */
  public function albums()
  {
    return $this->belongsToMany('App\Album', 'album_artists');
  }
}
