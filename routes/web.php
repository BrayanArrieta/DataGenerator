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
//Routes
Route::resource('panel','PanelController');
Route::get('montlyProduction','PanelController@montlyProduction');

Route::resource('weather','WeatherStatisticsController');


Route::get('/',function (){
   return view('index');
});