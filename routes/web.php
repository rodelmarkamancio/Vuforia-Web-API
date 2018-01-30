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
//     return view('common.template');
// });

Route::get('/', 'HomeController@index')->name('home');

Route::get('/login', 'SessionController@index')->name('login');
Route::get('/logout', 'SessionController@destroy')->name('logout');
Route::post('/login', 'SessionController@store')->name('store');

Route::group(['prefix' => 'admin', 'as' => 'admin'], function () {
    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'Admin\DashboardController@index']);

    Route::get('upload', ['as' => 'upload', 'uses' => 'Admin\UploadController@index']);
    Route::post('upload', ['as' => 'upload', 'uses' => 'Admin\UploadController@store']);
    Route::get('data', ['as' => 'data', 'uses' => 'Admin\UploadController@create']);
    Route::get('edit/{targetId}', ['as' => 'getData', 'uses' => 'Admin\UploadController@edit']);
    Route::post('edit/{targetId}', ['as' => 'getUpdate', 'uses' => 'Admin\UploadController@update']);
    Route::delete('delete/{targetId}', ['as' => 'getDelete', 'uses' => 'Admin\UploadController@destroy']);
});

Route::group(['prefix' => 'api', 'as' => 'api'], function () {
    Route::get('image/target/list', ['as' => 'imageTargetList', 'uses' => 'APIController@list']);
    Route::get('image/target/{targetId}', ['as' => 'imageTarget', 'uses' => 'APIController@imageTarget']);
});