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

Route::get('/', 'RegistrationController@index')->name('index');
Route::post('submit', 'RegistrationController@submit')->name('submit');

Route::get('quiz', 'RegistrationController@quiz')->name('quiz');
Route::post('answer', 'RegistrationController@answer')->name('answer');

Route::get('report', 'RegistrationController@report')->name('report');


//Route::match(['get', 'post'], 'quiz', 'RegistrationController@quiz')->name('quiz');
