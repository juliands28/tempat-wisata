<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/details/{id}', 'DetailController@index')->name('detail');

Route::prefix('admin')
->namespace('Admin')//admin\dashboardcontroller
->middleware(['auth'])
->group(function() {
    Route::get('/', 'AdminController@index')->name('admin-dashboard');
    Route::resource('travel', 'TravelPackageController');    
    Route::resource('gallery', 'GalleryController');    
    Route::get('change-password', 'ChangePasswordController@index');
    Route::post('change-password', 'ChangePasswordController@store')->name('change.password');
});


Auth::routes();