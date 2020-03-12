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
Route::get('/test', function () {
    return view('test');
});

Route::prefix(env('ADMIN_PRE'))->name('admin.')->namespace('Admin')->middleware('auth:admin')->group(function () {
    Route::get('/', 'AdminController@index');
    Route::post('/uploadimage', 'UploadController@index');
    Route::resource('product', 'ProductController');
    Route::resource('step', 'StepController');
});

Route::prefix(env('ADMIN_PRE'))->name('admin.')->namespace('Admin')->group(function () {
    Route::get('/login', 'LoginController@showLoginForm');
    Route::post('/login', 'LoginController@login')->name('login');
    Route::post('/logout', 'LoginController@logout')->name('logout');
});

Route::any('{all}', function () {
    return view('layouts.master');
})->where(['all' => '.*']);


