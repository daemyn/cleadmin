<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('licences', function(Request $request){
    $data = $request->only(['enseigne', 'siret', 'nombre_postes', 'num_magasin', 'duree_utilisation']);
    $data['licence'] = str_random(8);
    while(\App\Licence::where('licence', $data['licence'])->count() > 0){
        $data['licence'] = str_random(8);
    }
    $data['duree_utilisation'] = (empty($data['duree_utilisation'])) ? NULL : $data['duree_utilisation'];
    $data['code_licence'] = str_random(32);
    $licence = \App\Licence::create($data);
    return response()->json($licence);
});

