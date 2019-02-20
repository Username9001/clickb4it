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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Under construction temporary
// Route::get('/', function() {
//     return view('construction');
// });

// Route::get('/shop', function() {
//     return view('construction');
// });

Route::get('/', function() {
	return view('welcome');
});

Route::get('/shop', array(

    'as' => 'aimeos_catalog_list',

    'uses' => '\Aimeos\Shop\Controller\CatalogController@listAction'

));
