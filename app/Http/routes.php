<?php

use App\Http\Controllers\Cms\TemporalController;
use App\User;
use Illuminate\Routing\Router;

Route::group(['domain' => 'www.samuelcardenas.com'], function () {
    Route::get('/', 'Cms\TemporalController@samuel');
});
Route::group(['domain' => 'www.flat.pe'], function () {
    Route::get('/', 'Cms\TemporalController@flat');
});
Route::group(['domain' => 'www.tawa.com.pe'], function () {
    Route::get('/', 'Cms\TemporalController@tawaPe');
});
Route::group(['domain' => 'www.tawa.cl'], function () {
    Route::get('/', 'Cms\TemporalController@tawaCl');
});
Route::group(['domain' => 'www.rom.com.pe'], function () {
    Route::get('/', 'Cms\TemporalController@romPe');
});

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

Route::get('/', 'GuestController@welcome');
Route::get('/privacidad', 'GuestController@privacy');
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
Route::get('/admin', 'Admin\ManagementController@index');
Route::get('/super/client', 'SuperClientController@index');
Route::get('/dashboard', 'Client\DashboardController@index');

// Site map
Route::get('/sitemap', 'Client\SiteMapController@index');

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

// Get code for a specific link
Route::get('/serp/link/{link}/edit', 'SERPController@edit');
Route::post('/serp/link/{link}/edit', 'SERPController@update');
Route::get('/serp/link/{link}', 'SERPController@link'); // should be renamed to download

// Description with format for each page
Route::post('page/{name}/presentation', 'PageDescriptionController@update');

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

// Sliders
Route::get('/sliders', 'SliderController@index');
Route::get('/sliders/registrar', 'SliderController@create');
Route::post('/sliders/registrar', 'SliderController@store');
Route::get('/sliders/{slider}/editar', 'SliderController@edit');
Route::post('/sliders/{slider}/editar', 'SliderController@update');
Route::get('/sliders/{slider}/eliminar', 'SliderController@destroy');

// Slides
Route::get('/sliders/{slider}/slides', 'SlideController@index');
//Route::get('/sliders/{slider}/slides/{id}/ver', 'SlideController@show');
Route::get('/sliders/{slider}/slides/registrar', 'SlideController@create');
Route::post('/sliders/{slider}/slides/registrar', 'SlideController@store');
Route::get('/sliders/{slider}/slides/{slide}/editar', 'SlideController@edit');
Route::post('/sliders/{slider}/slides/{slide}/editar', 'SlideController@update');
Route::get('/sliders/{slider}/slides/{slide}/eliminar', 'SlideController@delete');

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
Route::get('/marcas/{id}/ver', 'BrandController@show');
Route::get('/marcas/{id}/editar', 'BrandController@edit');
Route::post('/marcas/{id}/editar', 'BrandController@update');
Route::get('/marcas/{id}/eliminar', 'BrandController@delete');

// Products
Route::get('/productos', 'ProductController@index');
Route::get('/productos/registrar', 'ProductController@create');
Route::post('/productos/registrar', 'ProductController@store');
Route::get('/productos/{id}/editar', 'ProductController@edit');
Route::post('/productos/{id}/editar', 'ProductController@update');
Route::get('/productos/{id}/eliminar', 'ProductController@delete');

// Articles
Route::get('/articulos', 'ArticleController@index');
Route::get('/articulos/{id}/ver', 'ArticleController@show');
Route::get('/articulos/registrar', 'ArticleController@create');
Route::post('/articulos/registrar', 'ArticleController@store');
Route::get('/articulos/{id}/editar', 'ArticleController@edit');
Route::post('/articulos/{id}/editar', 'ArticleController@update');
Route::get('/articulos/{id}/eliminar', 'ArticleController@delete');
// Article images
Route::get('/articulos/{id}/imagenes', 'ArticleImageController@index');
Route::post('/articulos/{id}/imagenes', 'ArticleImageController@upload');
Route::get('/articulos/imagenes/{id}/eliminar', 'ArticleImageController@delete');
Route::get('/articulos/imagenes/{id}/editar', 'ArticleImageController@edit');
Route::post('/articulos/imagenes/{id}/editar', 'ArticleImageController@update');
// Route::get('/articulos/imagenes/{id}/destacar', 'ArticleImageController@setFeatured');


// Work schedule
Route::get('/cronograma', 'Client\WorkScheduleController@index');

// Payments & Leads
Route::get('/pagos', 'Client\PaymentController@index');
Route::get('/pagos/{id}', 'Client\PaymentController@show');
Route::get('/leads', 'Client\LeadController@index');
Route::get('/leads/{id}', 'Client\LeadController@show');

// Inbox
Route::get('/inbox', 'InboxController@index');
Route::get('/inbox/form', 'InboxTopicController@index');
Route::get('/inbox/messages/{id}', 'InboxController@show');
// Chart for dashboard API
Route::get('/inbox/leads/chart', 'InboxTopicController@chartData');

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
Route::get('/temporal/{client}', 'Cms\TemporalController@index');
Route::get('/ver/{id}', 'Cms\GuestController@index');
Route::get('/ver/{id}/proyectos', 'Cms\GuestController@projects');
Route::get('/ver/{id}/proyecto/{project}', 'Cms\GuestController@showProject');
Route::get('/ver/{id}/servicios', 'Cms\GuestController@services');
Route::get('/ver/{id}/servicio/{service}', 'Cms\GuestController@showService');
Route::get('/ver/{id}/nosotros', 'Cms\GuestController@aboutUs');
Route::get('/ver/{id}/contacto', 'Cms\GuestController@contact');
Route::get('/ver/{id}/articulos/{article}', 'Cms\ArticleController@show');


// Admin management
Route::group([
    'prefix' => 'admin',
    'middleware' => [
        'auth', 'admin'
    ],
    'namespace' => 'Admin'
], function () {

    // Navigate to client dashboard
    Route::get('/cliente/seleccionar/{client_id}', 'ManagementController@select');
    // Star switching
    Route::get('/cliente/{client_id}/destacar/{state}', 'ManagementController@star');
    // Impersonate (login as client)
    Route::get('/cliente/{client_id}/impersonate', 'ManagementController@impersonate');
    // Display mode
    Route::get('/cliente/display', 'ManagementController@displayMode');
    // Super panel
    Route::get('/super', 'SuperPanelController@index');

    // Clients management
    Route::get('/cliente/registrar', 'ClientController@create');
    Route::post('/cliente/registrar', 'ClientController@store');

    // Client sections
    Route::get('/sections', 'SectionController@index');
    Route::get('/sections/{id}/{action}', 'SectionController@status');
    // Client sitemap
    Route::get('/sitemap', 'SiteMapController@index');
    Route::post('/sitemap', 'SiteMapController@store');
    Route::post('/sitemap/secondary', 'SiteMapController@secondary');
    Route::put('/sitemap', 'SiteMapController@update');

    // Client data
    Route::get('/dashboard/', 'DashboardController@index');
    Route::get('/datos/principales', 'DataController@edit');
    Route::post('/datos/principales', 'DataController@update');

    // Client access
    Route::get('/datos/acceso', 'AccessDataController@index');
    Route::post('/datos/acceso', 'AccessDataController@store');
    Route::post('/datos/acceso/editar', 'AccessDataController@update');
    Route::post('/datos/acceso/eliminar', 'AccessDataController@delete');

    // Profiles (social)
    Route::get('/perfiles/sociales', 'ProfileController@getSocialProfiles');
    Route::post('/perfiles/sociales', 'ProfileController@postSocialProfile');
    // Profiles (professional)
    Route::get('/perfiles/profesionales', 'ProfileController@getProfessionalProfiles');
    Route::post('/perfiles/profesionales', 'ProfileController@postProfessionalProfile');
    // Professional media
    Route::get('/medios/profesionales', 'ProfileController@getProfessionalMedia');
    Route::post('/medios/profesionales', 'ProfileController@postProfessionalMedia');

    // Personal
    Route::get('/personal', 'PersonalController@index');
    Route::post('/personal', 'PersonalController@store');
    Route::post('/personal/editar', 'PersonalController@update');
    Route::post('/personal/eliminar', 'PersonalController@delete');

    // Work schedule
    Route::get('/cronograma', 'WorkScheduleController@index');
    Route::post('/cronograma', 'WorkScheduleController@store');
    Route::get('/cronograma/{id}', 'WorkScheduleController@show');
    Route::get('/cronograma/{id}/editar', 'WorkScheduleController@edit');
    Route::put('/cronograma/{id}/editar', 'WorkScheduleController@update');
    // Details
    Route::post('/cronograma/{id}/editar', 'WorkScheduleDetailController@store');
    Route::get('/cronograma/{id}/detalle', 'WorkScheduleDetailController@updateByActivityAndOffset');
    Route::get('/cronograma/detalle/{detail_id}', 'WorkScheduleDetailController@update');

    // Leads
    Route::get('/leads', 'LeadController@index');
    Route::get('/leads/{id}', 'LeadController@edit');
    Route::post('/leads/update', 'LeadController@update');
    // Inbox
    Route::get('/inbox/config', 'InboxController@config');
    Route::get('/inbox/form', 'InboxTopicController@index');
    Route::post('/inbox/topics', 'InboxTopicController@store');

    // Payments
    Route::get('/pagos', 'PaymentController@index');
    Route::get('/pagos/registrar', 'PaymentController@create');
    Route::post('/pagos/registrar', 'PaymentController@store');
    Route::get('/pagos/{id}', 'PaymentController@edit');
    Route::post('/pagos/detalles', 'PaymentController@detailPayment'); // update payment_date
    Route::post('/pagos/{id}/titulo', 'PaymentController@updateTitle');
    Route::post('/pagos/eliminar', 'PaymentController@delete');

});

// Super client management
Route::group(['prefix' => 'super/client'], function () {

    // Go to client dashboard
    Route::get('/seleccionar/{client_id}', 'SuperClientController@select');
    // Star switching
    // Route::get('/cliente/{client_id}/destacar/{state}', 'SuperClientController@star');
    // Impersonate (login as client)
    Route::get('/impersonate/{client_id}', 'SuperClientController@impersonate');

    Route::get('/dashboard', 'SuperClient\DashboardController@index');
});
