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

Route::get('/', function () {
    return view('index');
});

Route::get('team', function () {
    return view('team');
});




Route::get('user/kost', 'KostUserController@create')->name('user.kost.create');
Route::post('user/kost/create', 'KostUserController@store')->name('user.kost.store');
Route::get('user/kost/{id}/edit', 'KostUserController@edit')->name('user.kost.edit');
Route::put('user/kost/{id}','KostUserController@update')->name('user.kost.update');
Route::delete('user/kost/{id}', 'KostUserController@destroy')->name('user.kost.destroy');

Route::prefix('user')->middleware('auth')->group(function () {
Route::get('user/kost/{name}/{id}','KostUserController@show')->name('user.kost.show');

Route::get('dashboard/', 'CriteriaUserController@index')->name('dashboarduser');
Route::get('{id}/edit','CriteriaUserController@editUser')->name('edit.user.user');
Route::put('{id}','CriteriaUserController@updateUser')->name('update.user.user');

Route::get('prosesKriteria', 'ProsesKriteriaUserController@formKriteria')->name('user.form.kriteria');
Route::post('prosesKriteria/proses', 'ProsesKriteriaUserController@proses')->name('user.form.proses');
Route::get('prosesAlternatif/{id}', 'ProsesAlternatifUserController@formAlternatif')->name('user.form.alternatif');
Route::post('prosesAlternatif/proses/{id}','ProsesAlternatifUserController@proses')->name('user.form.prosesAlternatif');
Route::get('hasilakhir','ProsesAlternatifUserController@hasil')->name('user.hasil');
});
Route::prefix('admin')->middleware('auth')->group(function () {

Route::get('dashboard', 'CriteriaController@countadmin')->name('dashboard');
Route::resource('criteria', 'CriteriaController');
Route::resource('kost', 'KostController');
Route::resource('user', 'UserController');
Route::get('prosesKriteria', 'ProsesKriteriaController@formKriteria')->name('form.kriteria');
Route::post('prosesKriteria/proses', 'ProsesKriteriaController@proses')->name('form.proses');
Route::get('prosesAlternatif/{id}', 'ProsesAlternatifController@formAlternatif')->name('form.alternatif');
Route::post('prosesAlternatif/proses/{id}','ProsesAlternatifController@proses')->name('form.prosesAlternatif');
Route::get('hasilakhir','ProsesAlternatifController@hasil')->name('hasil');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
