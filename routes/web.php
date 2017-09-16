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
    return redirect()->route('login');
});

Route::get('/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('/login', ['as' => 'attempt', 'uses' => 'Auth\LoginController@login']);
Route::post('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);


Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('revendeurs/licences', ['as' => 'revendeurs.licences', 'uses' => 'RevendeursController@licences']);
    Route::get('licences/{id}/confirmer', 'LicenceController@confirmer')->name('licences.confirmer');
    Route::get('licences/{id}/restore', 'LicenceController@restore')->name('licences.restore');
    Route::resource('licences', 'LicenceController');
    Route::get('revendeurs/{id}/restore', 'RevendeursController@restore')->name('revendeurs.restore');
    Route::resource('revendeurs', 'RevendeursController');

});
