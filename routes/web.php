<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', ('BlogController@index'));
Route::get('/blog', ('BlogeController@index'));
Route::get('/blog', ('BlogeController@indexe'));
Route::get('/home', function () {
    return view('admin.pesan.pesan');
});

route::resource('/category','CategoryController');
route::resource('/tag','TagController');

route::get('/pesan/trashed','PesanController@trashed')->name('pesan.trashed');
route::get('/pesan/restore/{id}','PesanController@restore')->name('pesan.restore');
route::delete('/pesan/kill/{id}','PesanController@kill')->name('pesan.kill');
route::resource('/pesan','PesanController');

route::get('/post/trashed','PostController@trashed')->name('post.trashed');
route::get('/post/restore/{id}','PostController@restore')->name('post.restore');
route::delete('/post/kill/{id}','PostController@kill')->name('post.kill');
route::resource('/post','PostController');

route::get('/postm/trashed','PostController@trashed')->name('post.trashed');
route::get('/postm/restore/{id}','PostmController@restore')->name('postm.restore');
route::delete('/postm/kill/{id}','PostmController@kill')->name('postm.kill');
route::resource('/postm','PostmCOntroller');