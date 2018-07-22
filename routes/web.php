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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('shops.index');
});
Route::get('/simpan/{id}',[
  'uses' => 'ListMerekController@getSimpanMerek',
  'as' => 'merek.SimpanMerek'
]);

Route::get('Merek', 'ListMerekController@index');
Route::get('merek', 'ListMerekController@index');
Route::get('/tipe/{id}', 'ListModelController@cari');
// Route::get('Tipe', 'ListModelController@index');
// Route::get('tipe', 'ListModelController@index');
// Route::get('Masalah', 'MasalahController@index');
// Route::get('masalah', 'MasalahController@index');
// Route::get('Summary','SummaryController@index');
// Route::get('summary','SummaryController@index');

Route::get('profil','ProfileController@index');
Route::post('profil','ProfileController@simpanAlamat');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Merek', function () {
    if(Auth::check()){
      if($user = Auth::user()){
          return redirect('merek');
      }
    }
    return redirect('login')->with('info', 'Anda Harus Login Terlebih Dahulu !');
});

Route::get('/tipe/{id}', 'ListMerekController@pilih');
Route::get('/tipe/{id}','ListModelController@simpan');
Route::get('/Masalah/{id}','ListModelController@simpan');
Route::get('/Masalah/{id}','MasalahController@pilih');
Route::get('/Summary/{id}','SummaryController@index');
Route::get('/Summary/{id}','SummaryController@simpan');
Route::get('/Summary/{id}','SummaryController@getSession');
Route::get('/Summary','SummaryController@SimpanTransaksi');
