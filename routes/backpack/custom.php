<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
//Route::get('admin/register','App\Http\Controllers\Auth\RegisterController')
    //->name('backpack.auth.register'),
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::crud('service', 'ServiceCrudController');
    Route::crud('profesional', 'ProfesionalCrudController');
    Route::crud('reservation', 'ReservationCrudController');
    Route::crud('categories', 'CategoriesCrudController');
    Route::crud('avi', 'AviCrudController');
    Route::crud('panier', 'PanierCrudController');
}); // this should be the absolute last line of this file