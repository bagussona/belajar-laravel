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

//Default Laravel
Route::get('/serve', function () {
    return view('welcome');
});


//--> Pak Shandika
// make this control for root tab

// Route::get('/', function () {
//     return view('index');
// });

// index

// Route::get('/about', function () {
//     $nama = 'Bagus Sonarangga';
//     return view('about', ['nama' => $nama]);
// });


Route::get('/', 'PagesController@home');



//Students

// --> midleware group

Route::middleware('auth')->group(function () {
    
    //AboutWebSession
    Route::get('/about', 'PagesController@about');

    //MahasiswaWebSession
    Route::get('/mahasiswa', 'MahasiswaController@index');

    //StudentsWebSession
    Route::get('/student', 'StudentsController@index');
    Route::post('/student', 'StudentsController@store');
    Route::put('/student/{id}', 'StudentsController@update');
    Route::get('/student/{id}', 'StudentsController@show');
    Route::delete('/student/{id}', 'StudentsController@destroy');
    
    //
});


//tutor di pondok it ->>

Route::get('/hello', 'HelloController@index');


Route::get('/santri', 'SantriController@index')->name('index-santri');
Route::get('/santri/create', 'SantriController@create');
Route::post('/santri', 'SantriController@store')->name('create-santri');
Route::get('/santri/{id}', 'SantriController@show')->name('show-santri');
Route::get('/santri/edit/{id}', 'SantriController@edit')->name('edit-santri');
Route::put('/santri/update-data/{id}', 'SantriController@update')->name('update-santri');
Route::delete('/santri/delete/{id}', 'SantriController@destroy')->name('del-santri');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
