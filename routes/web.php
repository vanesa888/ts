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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', function () {
  return view('pengguna.login');
});

Route::get('/formdt', function () {
  return view('Biodata.formdt');
});

Route::post('/postlogin', 'loginController@postlogin')->name('postlogin');
Route::get('/logout', 'loginController@logout')->name('logout');
//Route::get('/formdata/cari','AlumniController@cari');

route::get('/home', 'homeController@index')->name('home');

route::get('/formdata', 'AlumniController@index')->name('formdata');
route::get('/detail/{id}', 'AlumniController@indexx')->name('detail');
Route::post('/simpan-data', 'AlumniController@store')->name('simpan-data');
Route::get('/data', 'AlumniController@create')->name('data');
route::get('/Edit/{id}', 'AlumniController@edit')->name('Edit');
Route::post('/update-data/{id}', 'AlumniController@update')->name('update-data');

Route::group(['middleware' => ['auth','ceklevel:admin']], function(){
Route::get('/Hasilcopy', 'KuisController@dataa')->name('Hasilcopy');
route::get('/penilaian', 'JawabanController@index')->name('penilaian');
Route::post('/simpan-jawab', 'JawabanController@store')->name('simpan-jawab');

Route::get('/dataper', 'PertanyaanController@create')->name('dataper');
Route::get('/Tanya', 'PertanyaanController@index')->name('Tanya');
Route::post('/simpan-tanya', 'PertanyaanController@store')->name('simpan-tanya');

Route::get('/datakate', 'KategoriController@create')->name('datakate');
Route::get('/kategori', 'KategoriController@index')->name('kategori');
Route::post('/simpan-kate', 'KategoriController@store')->name('simpan-kate');
});

Route::group(['middleware' => ['auth','ceklevel:user']], function(){
Route::get('/frkuis', 'KuisController@index')->name('frkuis');
Route::get('/datakuis', 'KuisController@create')->name('datakuis');
Route::post('/simpan-kuis', 'KuisController@store')->name('simpan-kuis');

});






