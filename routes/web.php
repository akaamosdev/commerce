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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/accueil','HomeController@accueil')->name('accueil');
Route::get('/dasboard','AdminController@index')->name('admin.dashboard');
Route::get('/dasboard1','AdminController@dasboard1')->name('admin.dashboard1');
Route::get('/inscription','AdminController@inscription')->name('admin.inscription');
Route::post('/save','AdminController@save')->name('admin.save');

