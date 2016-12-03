<?php

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

// Main data
Route::get('/datos/principales', 'DataController@getMain');
Route::post('/datos/principales', 'DataController@postMain');
Route::get('/datos/acceso', 'DataController@getAccessData');
Route::post('/datos/acceso', 'DataController@postAccessData');

// Profiles (social media)
Route::get('/perfiles/sociales', 'ProfileController@getSocialProfiles');
Route::get('/perfiles/profesionales', 'ProfileController@getProfessionalProfiles');

// Personal
Route::get('/personal', 'PersonalController@getPersonal');
Route::post('/personal', 'PersonalController@postPersonal');

// Payments
Route::get('/pagos', 'PaymentController@index');

// Location
Route::get('/mapa', 'MapController@index');