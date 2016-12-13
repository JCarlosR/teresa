<?php

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

// Redirect after login / register
Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/{id}', 'AdminController@showClient');

// Main data
Route::get('/datos/principales', 'DataController@getMain');
Route::post('/datos/principales', 'DataController@postMain');
Route::get('/datos/acceso', 'DataController@getAccessData');
Route::post('/datos/acceso', 'DataController@postAccessData');

// Service
Route::get('/servicios', 'ServiceController@index');
Route::get('/servicios/registrar', 'ServiceController@create');
Route::post('/servicios/registrar', 'ServiceController@store');
// Projects
Route::get('/proyectos', 'ProjectController@index');
Route::get('/proyectos/registrar', 'ProjectController@create');
Route::post('/proyectos/registrar', 'ProjectController@store');
Route::get('/servicio/{id}/proyectos', 'ProjectController@getByService');
Route::get('/servicio/{id}/proyectos/registrar', 'ProjectController@createByService');

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