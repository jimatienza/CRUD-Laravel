<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('catalogues','CataloguesController');
Route::get('/','CataloguesController@index');
Route::get('/search','CataloguesController@searchView');
Route::get('/searchdata','CataloguesController@searchData' );
Route::post('/updateborrow','CataloguesController@updateBorrow' );



