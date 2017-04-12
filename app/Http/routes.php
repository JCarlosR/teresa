<?php

use Illuminate\Routing\Router;

Route::get('/', 'GuessController@welcome');
Route::get('/privacidad', 'GuessController@privacy');
Route::get('/twitter/counter', 'Vendor\TwitterController@counter');

// Authentication Routes
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');
// Password Reset Routes
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');

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
Route::get('/servicio/{id}/ver', 'ServiceController@show');
Route::get('/servicios/registrar', 'ServiceController@create');
Route::post('/servicios/registrar', 'ServiceController@store');
Route::get('/servicio/{id}/editar', 'ServiceController@edit');
Route::post('/servicio/editar', 'ServiceController@update');
Route::get('/servicio/{id}/eliminar', 'ServiceController@delete');
// Projects
Route::get('/proyectos', 'ProjectController@index');
Route::get('/proyecto/{id}/ver', 'ProjectController@show');
Route::get('/proyectos/registrar', 'ProjectController@create');
Route::post('/proyectos/registrar', 'ProjectController@store');
Route::get('/proyecto/{id}/editar', 'ProjectController@edit');
Route::post('/proyecto/editar', 'ProjectController@update');
Route::get('/proyecto/{id}/eliminar', 'ProjectController@delete');
// About us
Route::get('/nosotros', 'AboutUsController@show');
Route::get('/nosotros/editar', 'AboutUsController@edit');
Route::post('/nosotros', 'AboutUsController@update');

// Work schedule
Route::get('/cronograma', 'Client\WorkScheduleController@index');

// Payments & Leads
Route::get('/pagos', 'Client\PaymentController@index');
Route::get('/pagos/{id}', 'Client\PaymentController@show');
Route::get('/leads', 'Client\LeadController@index');
Route::get('/leads/{id}', 'Client\LeadController@show');

// Inbox
Route::get('/inbox', 'InboxController@index');

// Location
Route::get('/mapa', 'Client\MapController@index');

// Google Analytics
Route::post('/analytics', 'Client\GoogleAnalyticsController@index');
Route::post('/analytics/channels', 'Client\GoogleAnalyticsController@byChannelGrouping');

Route::group(['middleware' => 'cors'], function(Router $router){
    // External contact forms
    $router->get('/formulario/contacto', 'External\ContactController@index');
});

// Admin management
Route::group(['prefix' => 'admin'], function () {

    // Go to client dashboard
    Route::get('/cliente/seleccionar/{client_id}', 'AdminController@select');
    // Star switching
    Route::get('/cliente/{client_id}/destacar/{state}', 'AdminController@star');
    // Impersonate (login as client)
    Route::get('/cliente/{client_id}/impersonate', 'AdminController@impersonate');

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

    // Personal
    Route::get('/personal', 'Admin\PersonalController@index');
    Route::post('/personal', 'Admin\PersonalController@store');
    Route::post('/personal/editar', 'Admin\PersonalController@update');
    Route::post('/personal/eliminar', 'Admin\PersonalController@delete');

    // Work schedule
    Route::get('/cronograma', 'Admin\WorkScheduleController@index');
    Route::post('/cronograma', 'Admin\WorkScheduleController@store');
    Route::get('/cronograma/{id}', 'Admin\WorkScheduleController@show');
    Route::get('/cronograma/{id}/editar', 'Admin\WorkScheduleController@edit');
    Route::put('/cronograma/{id}/editar', 'Admin\WorkScheduleController@update');
    // Details
    Route::post('/cronograma/{id}/editar', 'Admin\WorkScheduleDetailController@store');
    Route::get('/cronograma/detalle/{detail_id}', 'Admin\WorkScheduleDetailController@update');

    // Leads
    Route::get('/leads', 'Admin\LeadController@index');
    Route::get('/leads/{id}', 'Admin\LeadController@edit');
    Route::post('/leads/update', 'Admin\LeadController@update');
    // Inbox
    Route::get('/inbox/config', 'InboxController@config');

    // Payments
    Route::get('/pagos', 'Admin\PaymentController@index');
    Route::get('/pagos/registrar', 'Admin\PaymentController@create');
    Route::post('/pagos/registrar', 'Admin\PaymentController@store');
    Route::get('/pagos/{id}', 'Admin\PaymentController@edit');
    Route::post('/pagos/detalles', 'Admin\PaymentController@detailPayment'); // update payment_date
    Route::post('/pagos/{id}/titulo', 'Admin\PaymentController@updateTitle');
    Route::post('/pagos/eliminar', 'Admin\PaymentController@delete');

});
