<?php

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

// Clients area
Route::get('/datos/principales', 'DataController@getMain');
Route::post('/datos/principales', 'DataController@postMain');
