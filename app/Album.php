<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
  /**
   * Get the artist associated with the album
   */
  public function artist()
  {
    return $this->belongsTo('App\Artist');
  }
}
