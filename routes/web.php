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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'TugasController@home')->name('home');

Route::prefix('/materi')->name('materi.')->group(function () {
    Route::get('/', 'MateriController@index')->name('index');
    Route::post('/create', 'MateriController@create')->name('create');
    Route::get('/edit/{id}', 'MateriController@edit')->name('edit');
    Route::post('/update/{id}', 'MateriController@update')->name('update');
    Route::get('/delete/{id}', 'MateriController@destroy')->name('delete');
    Route::get('/cetak_pdf', 'MateriController@cetak_pdf');
});


Route::prefix('/regis')->name('register.')->group(function () {
    Route::get('/', 'RegisController@index')->name('index');
    Route::post('/create', 'RegisController@create')->name('create');
    Route::get('/edit/{id}', 'RegisController@edit')->name('edit');
    Route::post('/update/{id}', 'RegisController@update')->name('update');
    Route::get('/delete/{id}', 'RegisController@destroy')->name('delete');
});

Route::prefix('/tugas')->name('tugas.')->group(function(){
    Route::get('/dashboard/rombel/{rombel}','TugasController@dashboard')->name('dashboard');
    Route::get('/dashboard/rayon/{rayon}','TugasController@dashboard2')->name('dashboard2');

    Route::get('/laporan/{id}', 'TugasController@show2')->name('show2');
    Route::get('/rombel/{rombel}','TugasController@rombel')->name('rombel');

    Route::get('/', 'TugasController@index')->name('index');
    Route::post('/create', 'TugasController@create')->name('create');
    Route::get('/edit/{id}', 'TugasController@edit')->name('edit');
    Route::post('/update/{id}', 'TugasController@update')->name('update');
    Route::get('/delete/{id}', 'TugasController@destroy')->name('delete');
    Route::get('//{id}', 'TugasController@show')->name('show');
  
});

