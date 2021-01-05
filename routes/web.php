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

use App\Http\Controllers\MovieController;


Route::get('/', function () {
    return view('main');
});

Auth::routes();

// admin
Route::get('/dashboard', 'AdminController@index')->name('dashboard');
Route::get('/comments', 'CommentsController@index')->name('comments');

//movies admin
Route::get('/movies', 'admins\MoviesController@index')->name('movies');
Route::get('/movies/tambah', 'admins\MoviesController@create')->name('tambahMovies');
Route::post('/movies/store', 'admins\MoviesController@store');
Route::get('/movies/edit/{movies}', 'admins\MoviesController@edit')->name('editMovies');
Route::put('/movies/update/{movies}', 'admins\MoviesController@update')->name('updateMovies');
Route::get('/movies/delete/{movies}', 'admins\MoviesController@destroy')->name('hapusMovies');
Route::get('/movies/cetak', 'admins\MoviesController@print')->name('printMovies');
Route::post('/movies/comments', 'CommentsController@store')->name('comment.add');
Route::post('/movies/reply/store', 'CommentsController@replyStore')->name('reply.add');
//movies producers
Route::get('/producers', 'admins\ProducersController@index')->name('producers');
Route::get('/producers/tambah', 'admins\ProducersController@create')->name('tambahProducers');
Route::post('/producers/store', 'admins\ProducersController@store');
Route::get('/producers/edit/{producer}', 'admins\ProducersController@edit')->name('editProducers');
Route::put('/producers/update/{producer}', 'admins\ProducersController@update')->name('updateProducers');
Route::get('/producers/delete/{producer}', 'admins\ProducersController@destroy')->name('hapusProducers');
Route::get('/producers/cetak', 'admins\ProducersController@printPDF')->name('printProducers');
Route::get('/producers/cetakDoc', 'admins\ProducersController@printDOC')->name('printDocProducers');
Route::get('/producers/cari', 'admins\ProducersController@cari')->name('cariProducers');
//user admin
Route::get('/users', 'admins\UsersController@index')->name('users');
Route::get('/users/tambah', 'admins\UsersController@create')->name('tambahusers');
Route::post('/users/store', 'admins\UsersController@store');
Route::get('/users/edit/{user}', 'admins\UsersController@edit')->name('editusers');
Route::put('/users/update/{user}', 'admins\UsersController@update')->name('updateusers');
Route::get('/users/delete/{user}', 'admins\UsersController@destroy')->name('hapususers');
Route::get('/users/cetak', 'admins\UsersController@print')->name('printusers');

// user

Route::get('/home', 'MovieController@index')->name('home');
Route::get('/tambah', 'MovieController@tambah');
Route::post('/setor', 'MovieController@setor');
Route::get('/detail/{movies}', 'MovieController@show');
Route::get('/edit/{movies}', 'MovieController@edit');
Route::put('/update/{movies}', 'MovieController@update');
Route::get('/hapus/{movies}', 'MovieController@destroy');
