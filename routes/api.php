<?php

// use App\Http\Controllers\api;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//test

// Route::get('api/test', 'StudentsController@index');
Route::get('testapi', 'api\StudentsController@index');
Route::post('testapi', 'api\StudentsController@store');
Route::put('testapi/{id}', 'api\StudentsController@update');
Route::get('testapi/{id}', 'api\StudentsController@show');
Route::delete('testapi/{id}', 'api\StudentsController@destroy');
