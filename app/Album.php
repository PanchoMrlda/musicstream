<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'genre', 'year', 'description'
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
   * Get the artists associated with the album
   */
  public function artists()
  {
    return $this->belongsToMany('App\Artist', 'album_artists');
  }

  /**
   * Get the songs associated with the album
   */
  public function songs()
  {
    return $this->hasMany('App\Song')->orderBy('track');
  }
}
