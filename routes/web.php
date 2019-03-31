<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     // return view('welcome');
//     return view('home');
// });

// Route::get('/home', function () {
//   return view('home');
// });

// Route::get('/music', function () {
//   return view('music');
// });

// Route::get('/about', function () {
//   return view('about');
// });

// Route::get('/contact', function () {
//   return view('contact');
// });

// Route::get('/users/{id}', function ($id) {
//   return 'This is user ' . $id;
// });

// // Route::get('/', 'PagesController@index');

// Route::post('/contact/submit', 'MessagesController@submit');

Route::get('/', 'MusicController@index');

// Route::get('/topCharts', 'MusicController@topCharts');

// Route::get('/topCharts', 'SongsController@index');

// Route::get('/songs', 'SongsController@index');

// Route::get('/songs/{id}', 'SongsController@getSong');

// Route::post('/songs/played', 'SongsController@updateSong');

// Route::post('/songs/artist', 'SongsController@artistSongs');

// Route::post('/songs/album', 'SongsController@albumSongs');

// Route::post('/songs/topCharts', 'SongsController@topCharts');

// Route::post('/artists/name', 'ArtistsController@artistsNames');

// Route::post('/albums/name', 'AlbumsController@albumsNames');

// Route::get('postman', 'SongsController@postman');

Route::resource('artists', 'ArtistsController');
Route::resource('albums', 'AlbumsController');
Route::resource('songs', 'SongsController');
