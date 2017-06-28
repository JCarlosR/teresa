<?php

use Illuminate\Routing\Router;

Route::group([
    'domain' => 'teresa.seo-arquitectos.com'
], function () {
    Route::get('/', function () {
        return redirect('http://theressa.net', 301);
    });
});
Route::group([
    'domain' => 'www.seoproser.com'
], function () {
    Route::get('/', function () {
       return redirect('http://seoproser.com', 301);
    });
});
Route::group([
    'domain' => 'seoproser.com'
], function () {
    Route::get('/', 'Cms\HomeController@index');
    Route::get('/proyectos', 'Cms\HomeController@projects');
    Route::get('/proyecto/{project}', 'Cms\HomeController@showProject');
    Route::get('/servicios', 'Cms\HomeController@services');
    Route::get('/servicio/{service}', 'Cms\HomeController@showService');
    Route::get('/nosotros', 'Cms\HomeController@aboutUs');
    Route::get('/contacto', 'Cms\HomeController@contact');
});

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


// SERP Summary
Route::get('/serp/resumen', 'SERPController@index');
Route::post('/servicios/descripcion', 'SERPController@descriptionServices');
Route::post('/proyectos/descripcion', 'SERPController@descriptionProjects');
Route::post('/citas/descripcion', 'SERPController@descriptionQuotes');

// About us
Route::get('/nosotros', 'AboutUsController@show');
Route::get('/nosotros/editar', 'AboutUsController@edit');
Route::post('/nosotros', 'AboutUsController@update');
// About us images
Route::get('/nosotros/imagenes', 'AboutUsImageController@index');
Route::post('/nosotros/imagenes', 'AboutUsImageController@upload');
Route::get('/nosotros/imagenes/{id}/eliminar', 'AboutUsImageController@delete');
Route::get('/nosotros/imagenes/{id}/editar', 'AboutUsImageController@edit');
Route::post('/nosotros/imagenes/{id}/editar', 'AboutUsImageController@update');

// Slider (slides)
Route::get('/slides', 'SlideController@index');
//Route::get('/slides/{id}/ver', 'SlideController@show');
Route::get('/slides/registrar', 'SlideController@create');
Route::post('/slides/registrar', 'SlideController@store');
Route::get('/slides/{id}/editar', 'SlideController@edit');
Route::post('/slides/{id}/editar', 'SlideController@update');
Route::get('/slides/{id}/eliminar', 'SlideController@delete');

// Services
Route::get('/servicios', 'ServiceController@index');
Route::get('/servicio/{id}/ver', 'ServiceController@show');
Route::get('/servicios/registrar', 'ServiceController@create');
Route::post('/servicios/registrar', 'ServiceController@store');
Route::get('/servicio/{id}/editar', 'ServiceController@edit');
Route::post('/servicio/editar', 'ServiceController@update');
Route::get('/servicio/{id}/eliminar', 'ServiceController@delete');
// Service images
Route::get('/servicio/{id}/imagenes', 'ServiceImageController@index');
Route::post('/servicio/{id}/imagenes', 'ServiceImageController@upload');
Route::get('/servicio/imagenes/{id}/eliminar', 'ServiceImageController@delete');
Route::get('/servicio/imagenes/{id}/editar', 'ServiceImageController@edit');
Route::post('/servicio/imagenes/{id}/editar', 'ServiceImageController@update');
Route::get('/servicio/imagenes/{id}/destacar', 'ServiceImageController@setFeatured');

// Projects
Route::get('/proyectos', 'ProjectController@index');
Route::get('/proyecto/{id}/ver', 'ProjectController@show');
Route::get('/proyectos/registrar', 'ProjectController@create');
Route::post('/proyectos/registrar', 'ProjectController@store');
Route::get('/proyecto/{id}/editar', 'ProjectController@edit');
Route::post('/proyecto/editar', 'ProjectController@update');
Route::get('/proyecto/{id}/eliminar', 'ProjectController@delete');
// Project images
Route::get('/proyecto/{id}/imagenes', 'ProjectImageController@index');
Route::post('/proyecto/{id}/imagenes', 'ProjectImageController@upload');
Route::get('/proyecto/imagenes/{id}/eliminar', 'ProjectImageController@delete');
Route::get('/proyecto/imagenes/{id}/editar', 'ProjectImageController@edit');
Route::post('/proyecto/imagenes/{id}/editar', 'ProjectImageController@update');
Route::get('/proyecto/imagenes/{id}/destacar', 'ProjectImageController@setFeatured');

// Customers
Route::get('/clientes', 'CustomerController@index');
Route::get('/clientes/registrar', 'CustomerController@create');
Route::post('/clientes/registrar', 'CustomerController@store');
Route::get('/clientes/{id}/editar', 'CustomerController@edit');
Route::post('/clientes/editar', 'CustomerController@update');
Route::get('/clientes/{id}/eliminar', 'CustomerController@delete');

// Quotes
Route::get('/citas', 'QuoteController@index');
Route::get('/citas/registrar', 'QuoteController@create');
Route::post('/citas/registrar', 'QuoteController@store');
Route::get('/citas/{id}/editar', 'QuoteController@edit');
Route::post('/citas/{id}/editar', 'QuoteController@update');
Route::get('/citas/{id}/eliminar', 'QuoteController@delete');

// Courses
Route::get('/cursos', 'CourseController@index');
Route::get('/cursos/registrar', 'CourseController@create');
Route::post('/cursos/registrar', 'CourseController@store');
Route::get('/cursos/{id}/editar', 'CourseController@edit');
Route::post('/cursos/{id}/editar', 'CourseController@update');
Route::get('/cursos/{id}/eliminar', 'CourseController@delete');

// Brands
Route::get('/marcas', 'BrandController@index');
Route::get('/marcas/registrar', 'BrandController@create');
Route::post('/marcas/registrar', 'BrandController@store');
Route::get('/marcas/{id}/editar', 'BrandController@edit');
Route::post('/marcas/{id}/editar', 'BrandController@update');
Route::get('/marcas/{id}/eliminar', 'BrandController@delete');


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

// Teresa CMS
Route::get('/ver/{id}', 'Cms\GuessController@index');
Route::get('/ver/{id}/proyectos', 'Cms\GuessController@projects');
Route::get('/ver/{id}/proyecto/{project}', 'Cms\GuessController@showProject');
Route::get('/ver/{id}/servicios', 'Cms\GuessController@services');
Route::get('/ver/{id}/servicio/{service}', 'Cms\GuessController@showService');
Route::get('/ver/{id}/nosotros', 'Cms\GuessController@aboutUs');
Route::get('/ver/{id}/contacto', 'Cms\GuessController@contact');

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

    // Client sections
    Route::get('/sections', 'Admin\SectionController@index');
    Route::get('/sections/{id}/{action}', 'Admin\SectionController@status');

    // Client data
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
    // Professional media
    Route::get('/medios/profesionales', 'Admin\ProfileController@getProfessionalMedia');
    Route::post('/medios/profesionales', 'Admin\ProfileController@postProfessionalMedia');

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
    Route::get('/cronograma/{id}/detalle', 'Admin\WorkScheduleDetailController@updateByActivityAndOffset');
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
