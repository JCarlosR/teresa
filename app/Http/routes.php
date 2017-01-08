<?php

Route::get('/', 'GuessController@welcome');

Route::auth();

// Redirect after login / register
Route::get('/dashboard', 'Client\DashboardController@index');
Route::get('/admin', 'AdminController@index');

// General data
Route::get('/datos/principales', 'Client\DataController@edit');
Route::post('/datos/principales', 'Client\DataController@update');
// Profile image
Route::post('/user/image', 'Client\DataController@postProfileImage');

// Services
Route::get('/servicios', 'ServiceController@index');
Route::get('/servicios/registrar', 'ServiceController@create');
Route::post('/servicios/registrar', 'ServiceController@store');
Route::get('/servicio/{id}/editar', 'ServiceController@edit');
Route::post('/servicio/editar', 'ServiceController@update');
Route::get('/servicio/{id}/eliminar', 'ServiceController@delete');
// Projects
Route::get('/proyectos', 'ProjectController@index');
Route::get('/proyectos/registrar', 'ProjectController@create');
Route::post('/proyectos/registrar', 'ProjectController@store');
Route::get('/proyecto/{id}/editar', 'ProjectController@edit');
Route::post('/proyecto/editar', 'ProjectController@update');
Route::get('/proyecto/{id}/eliminar', 'ProjectController@delete');

// Payments
Route::get('/pagos', 'Client\PaymentController@index');
// Location
Route::get('/mapa', 'Client\MapController@index');

// Admin management
Route::group(['prefix' => 'admin'], function () {

    Route::get('/cliente/seleccionar/{client_id}', 'AdminController@select');

    // Clients management
    Route::get('/cliente/registrar', 'Admin\ClientController@create');
    Route::post('/cliente/registrar', 'Admin\ClientController@store');

    // Clients data
    Route::get('/dashboard/', 'Admin\DashboardController@index');
    Route::get('/datos/principales', 'Admin\DataController@edit');
    Route::post('/datos/principales', 'Admin\DataController@update');

    // Client access
    Route::get('/datos/acceso', 'Admin\AccessDataController@index');
    Route::post('/datos/acceso', 'Admin\AccessDataController@store');
    Route::post('/datos/acceso/editar', 'Admin\AccessDataController@update');
    Route::post('/datos/acceso/eliminar', 'Admin\AccessDataController@delete');

    // Profiles (social)
    Route::get('/perfiles/sociales', 'Admin\ProfileController@getSocialProfiles');
    Route::post('/perfiles/sociales', 'Admin\ProfileController@postSocialProfile');
    // Profiles (professional)
    Route::get('/perfiles/profesionales', 'Admin\ProfileController@getProfessionalProfiles');
    Route::post('/perfiles/profesionales', 'Admin\ProfileController@postProfessionalProfile');

    // Services
    Route::get('/servicios', 'ServiceController@index');
    Route::get('/servicios/registrar', 'ServiceController@create');
    Route::post('/servicios/registrar', 'ServiceController@store');
    Route::get('/servicio/{id}/editar', 'ServiceController@edit');
    Route::post('/servicio/editar', 'ServiceController@update');
    Route::get('/servicio/{id}/eliminar', 'ServiceController@delete');
    // Projects
    Route::get('/proyectos', 'ProjectController@index');
    Route::get('/proyectos/registrar', 'ProjectController@create');
    Route::post('/proyectos/registrar', 'ProjectController@store');
    Route::get('/proyecto/{id}/editar', 'ProjectController@edit');
    Route::post('/proyecto/editar', 'ProjectController@update');
    Route::get('/proyecto/{id}/eliminar', 'ProjectController@delete');

    // Personal
    Route::get('/personal', 'Admin\PersonalController@index');
    Route::post('/personal', 'Admin\PersonalController@store');
    Route::post('/personal/editar', 'Admin\PersonalController@update');
    Route::post('/personal/eliminar', 'Admin\PersonalController@delete');
});
