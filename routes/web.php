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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function(){
    Route::get('licences/{id}/confirmer', 'LicenceController@confirmer')->name('licences.confirmer');
    Route::resource('licences', 'LicenceController');
    Route::get('revendeurs/licences', ['as' => 'revendeurs.licences', 'uses' => 'RevendeursController@licences']);
    Route::resource('revendeurs', 'RevendeursController');
});
