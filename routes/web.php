<?php

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

Auth::routes();

Route::post('/maintenance/storePlace/{place}', 'MaintenanceController@storePlace');
Route::post('/maintenance/storeType/{type}', 'MaintenanceController@storeType');
Route::post('/maintenance/storeSelection/{selection}', 'MaintenanceController@storeSelection');

Route::resources([
  'businesses' => 'BusinessController',
]);

Route::get('/{vue_capture?}', function () {
  // return null;
  return view('home');
})->where('vue_capture', '[\/\w\.-]*');

// Route::get('/home', 'HomeController@index')->name('home');
