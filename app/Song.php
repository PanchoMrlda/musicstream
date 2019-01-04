<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
  /**
   * Get the album associated with the song
   */
  public function album()
  {
    return $this->belongsTo('App\Album');
  }

  /**
   * Get the song's audio url
   */
  public function getAudioUrl()
  {
    return ('audio/' . $this->album->artist->name . '/' . $this->album->name . '/' . $this->track . ' ' . $this->name . '.mp3');
  }

  /**
   * Get the album's image url
   */
  public function getImageUrl()
  {
    return urldecode('images/' . $this->album->artist->name . '/' . $this->album->name . '.jpg');
  }

  /**
   * Increment plays
   */
  public function incPlays()
  {
    $this->plays = $this->plays + 1;
    $this->save();
  }
}
