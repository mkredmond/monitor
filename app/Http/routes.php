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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/servers', 'ServerController@index');
Route::post('admin/servers', 'ServerController@create');
Route::delete('admin/servers/{server}', 'ServerController@remove');

Route::get('admin/applications', 'ApplicationController@index');
Route::post('admin/applications', 'ApplicationController@create');
Route::delete('admin/applications/{application}', 'ApplicationController@remove');

Route::get('show/{env}', 'ViewController@index');

Route::get('search', 'SearchController@index');
