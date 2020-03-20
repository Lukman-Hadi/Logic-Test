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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('student','StudentController');
Route::resource('school','SchoolController');
Route::get('/getstudent', 'StudentController@GetStudent');
Route::get('/logic','LogicController@index');
Route::post('/logicre','LogicController@Logic');