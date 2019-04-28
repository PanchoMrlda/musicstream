<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'plays', 'track', 'description', 'duration', 'album_id', 'artist_id'
  ];

  /**
   * The attributes that are not shown.
   *
   * @var array
   */
  protected $hidden = [
    'created_at', 'updated_at'
  ];

  /**
   * Get the album associated with the song
   */
  public function album()
  {
    return $this->belongsTo('App\Album');
  }

  /**
   * Get the artist associated with the song
   */
  public function artist()
  {
    return $this->belongsTo('App\Artist');
  }

  /**
   * Get the song's audio url
   */
  public function getAudioUrl()
  {
    if (count($this->album->artists) > 1) {
      $artistName = "Various Artists";
    } else {
      $artistName = $this->artist->name;
    }
    $artistName = str_replace("'", "&#39;", $artistName);
    $albumName = str_replace("'", "&#39;", $this->album->name);
    $songName = str_replace("'", "&#39;", $this->name);
    return ('audio/' . $artistName . '/' . $albumName . '/' . $songName . '.mp3');
  }

  /**
   * Get the album's image url
   */
  public function getImageUrl()
  {
    return urldecode('images/covers/' . $this->album->name . '.jpg');
  }

  /**
   * Increment plays
   */
  public function incPlays()
  {
    $this->plays = $this->plays + 1;
    $this->save();
  }

  /**
   * Get the song's duration in mm:ss format
   */
  public function durationToString()
  {
    $minutes = intval($this->duration / 60);
    $seconds = $this->duration % 60;
    return $minutes . ':' . sprintf('%02d', $seconds);
  }
}
