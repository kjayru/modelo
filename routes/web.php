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

Route::get('/','Front\HomeController@index')->name('front.admin');

Auth::routes();

Route::group(['prefix' => 'admin'],function(){
    Route::get('/', 'Admin\HomeController@index')->name('home');

    //Roles
    Route::post('roles/store','admin\RoleController@store')->name('roles.store')
    ->middleware('permission:roles.create');

    Route::get('roles','admin\RoleController@index')->name('roles.index')
    ->middleware('permission:roles.index');

    Route::get('roles/create','admin\RoleController@create')->name('roles.create')
    ->middleware('permission:roles.create');

    Route::put('roles/{role}','admin\RoleController@update')->name('roles.update')
    ->middleware('permission:roles.edit');

    Route::get('roles/{role}','admin\RoleController@show')->name('roles.show')
    ->middleware('permission:roles.show');

    Route::delete('roles/{role}','admin\RoleController@destroy')->name('roles.destroy')
    ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit','admin\RoleController@edit')->name('roles.edit')
    ->middleware('permission:roles.edit');

    //users
    Route::post('users/store','admin\UserController@store')->name('users.store')
    ->middleware('permission:users.create');

    Route::get('users','admin\UserController@index')->name('users.index')
    ->middleware('permission:users.index');

    Route::get('users/create','admin\UserController@create')->name('users.create')
    ->middleware('permission:users.create');

    Route::get('users/{user}/edit','admin\UserController@edit')->name('users.edit')
    ->middleware('permission:users.edit');

    Route::put('users/{user}','admin\UserController@update')->name('users.update')
    ->middleware('permission:users.edit');

    Route::get('users/{user}','admin\UserController@show')->name('users.show')
    ->middleware('permission:users.show');

    Route::delete('users/{user}','admin\UserController@destroy')->name('users.destroy')
    ->middleware('permission:users.destroy');





});
