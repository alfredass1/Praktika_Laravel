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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/holidays', 'HolidayController@showHolidays'); //psl
Route::get('/warning-holiday/{holiday}', 'HolidayController@warningHoliday');
Route::get('/delete-holiday/{holiday}', 'HolidayController@deleteHoliday');


Route::get('/logout', 'HomeController@atsijungti');
