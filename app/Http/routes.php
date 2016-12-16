<?php

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

// Redirect after login / register
Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController@index');

// Main data
Route::get('/datos/principales', 'DataController@getMain');
Route::post('/datos/principales', 'DataController@postMain');

// Service
Route::get('/servicios', 'ServiceController@index');
Route::get('/servicios/registrar', 'ServiceController@create');
Route::post('/servicios/registrar', 'ServiceController@store');
Route::get('/servicio/{id}/editar', 'ServiceController@edit');
Route::post('/servicio/editar', 'ServiceController@update');
// Projects
Route::get('/proyectos', 'ProjectController@index');
Route::get('/proyectos/registrar', 'ProjectController@create');
Route::post('/proyectos/registrar', 'ProjectController@store');
Route::get('/proyecto/{id}/editar', 'ProjectController@edit');
Route::post('/proyecto/editar', 'ProjectController@update');
// Projects in a specific category
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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/{client_id}/dashboard/', 'AdminController@clientDashboard');

    // Clients data
    Route::get('/{client_id}/datos/principales', 'AdminController@getClientData');
    Route::post('/datos/principales', 'AdminController@postClientData');

    // Client access
    Route::get('/{client_id}/datos/acceso', 'AdminController@getClientAccess');
    Route::post('/datos/acceso', 'AdminController@postClientAccess');
    Route::post('/datos/acceso/editar', 'AdminController@updateClientAccess');
    Route::post('/datos/acceso/eliminar', 'AdminController@deleteClientAccess');
});
