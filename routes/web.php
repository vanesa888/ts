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


Route::group(['middleware' => ['auth','ceklevel:admin']], function(){
Route::get('/Hasilcopy', 'KuisController@dataa')->name('Hasilcopy');
Route::get('/penghasilan', 'kuisionerController@data')->name('penghasilan');
Route::get('/status', 'kuisionerController@showpilihan')->name('status');


route::get('/Edit/{id}', 'AlumniController@edit')->name('Edit');
Route::post('/update-data/{id}', 'AlumniController@update')->name('update-data');

Route::get('/dataper', 'PertanyaanController@create')->name('dataper');
Route::get('/Tanya', 'PertanyaanController@index')->name('Tanya');
Route::post('/simpan-tanya', 'PertanyaanController@store')->name('simpan-tanya');
Route::get('/Editper/{id}', 'PertanyaanController@edit')->name('Editper');
Route::post('/update-Tanya/{id}', 'PertanyaanController@update')->name('update-Tanya');

Route::get('/datakate', 'KategoriController@create')->name('datakate');
Route::get('/kategori', 'KategoriController@index')->name('kategori');
Route::post('/simpan-kate', 'KategoriController@store')->name('simpan-kate');
route::get('/Edit/{id}', 'KategoriController@edit')->name('Edit');
Route::post('/update-kate/{id}', 'KategoriController@update')->name('update-kate');

Route::get('/jawaban', 'JawabanController@create')->name('jawaban');
Route::get('/formjaw', 'JawabanController@index')->name('formjaw');
Route::post('/simpan-jawab', 'JawabanController@store')->name('simpan-jawab');
route::get('/EditJaw/{id}', 'JawabanController@edit')->name('EditJaw');
Route::post('/update-jaw/{id}', 'JawabanController@update')->name('update-jaw');
});

Route::group(['middleware' => ['auth','ceklevel:user']], function(){
//Route::get('/frkuis', 'KuisController@index')->name('frkuis');
Route::get('/datakuis', 'KuisController@create')->name('datakuis');
Route::post('/simpan-kuis', 'KuisController@store')->name('simpan-kuis');
Route::get('/kuissi', 'KuisionerController@index')->name('kuissi');

Route::post('/simpan-jawk', 'kuisionerController@store')->name('simpan-jawk');
route::get('/dataKus', 'kuisionerController@create')->name('dataKus');
route::get('/EditKuis/{id}', 'kuisionerController@edit')->name('EditKuis');
Route::post('/update-kuis/{id}', 'kuisionerController@update')->name('update-kuis');
Route::get('/delete-jawab/{id}', 'kuisionerController@destroy')->name('delete-jawab');



});



