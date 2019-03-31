<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'origin', 'formed', 'description'
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
   * Get the album associated with the artist
   */
  public function albums()
  {
    return $this->belongsToMany('App\Album', 'album_artists');
  }
}
