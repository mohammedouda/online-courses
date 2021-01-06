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

Route::get('export','Trainers@exportData');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin']], function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/role-register','Admin\DashboardController@registered');
    Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
    Route::put('/role-register-update/{id}', 'Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');
    Route::get('/abouts','Admin\AboutusController@index' );
    Route::post('/save-aboutus','Admin\AboutusController@store');
    Route::post('/save-register','Admin\DashboardController@store');
    Route::get('/about-us/{id}','Admin\AboutusController@edit');
    Route::put('aboutus-update/{id}','Admin\AboutusController@update');
    Route::delete('about-us-delete/{id}','Admin\AboutusController@delete');

    Route::get('/service-category', 'Admin\ServicesController@index');
    Route::get('/service-create', 'Admin\ServicesController@create');
    Route::post('/category-store','Admin\ServicesController@store' ) ;
    Route::get('/service-cate-edit/{id}','Admin\ServicesController@edit');
    Route::put('/category-update/{id}','Admin\ServicesController@update');
    Route::delete('/service-cate-delete/{id}', 'Admin\ServicesController@delete');

    Route::get('/service-list','Admin\ServicelistController@index');

});
