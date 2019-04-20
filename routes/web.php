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


    //configuracion
    Route::post('configurations/store','admin\ConfigurationController@store')->name('configurations.store')
    ->middleware('permission:configurations.create');

    Route::get('configurations','admin\ConfigurationController@index')->name('configurations.index')
    ->middleware('permission:configurations.index');

    Route::get('configurations/create','admin\ConfigurationController@create')->name('configurations.create')
    ->middleware('permission:configurations.create');

    Route::get('configurations/{config}/edit','admin\ConfigurationController@edit')->name('configurations.edit')
    ->middleware('permission:configurations.edit');

    Route::put('configurations/{config}','admin\ConfigurationController@update')->name('configurations.update')
    ->middleware('permission:configurations.edit');

    Route::get('configurations/{config}','admin\ConfigurationController@show')->name('configurations.show')
    ->middleware('permission:configurations.show');

    Route::delete('configurations/{config}','admin\ConfigurationController@destroy')->name('configurations.destroy')
    ->middleware('permission:configurations.destroy');

    //updateRegion
    Route::put('configurations/updateRegion/{config}','admin\ConfigurationController@updateRegion')->name('configurations.updateregion')
    ->middleware('permission:configurations.edit');
    //updateCaracter
    Route::put('configurations/updateCaracter/{config}','admin\ConfigurationController@updateCaracter')->name('configurations.updatercaracter')
    ->middleware('permission:configurations.edit');

    Route::put('configurations/updateServicio/{config}','admin\ConfigurationController@updateServicio')->name('configurations.updateservice')
    ->middleware('permission:configurations.edit');


    Route::get('configurations/region/{config}','admin\ConfigurationController@showregion')->name('configurations.showregion')
    ->middleware('permission:configurations.show');

    Route::put('configurations/region/{config}','admin\ConfigurationController@regionUpdate')->name('configurations.regionupdate')
    ->middleware('permission:configurations.edit');
    
    
    //scorts
    Route::post('scorts/store','admin\ScortController@store')->name('scorts.store')
    ->middleware('permission:scorts.create');

    Route::get('scorts','admin\ScortController@index')->name('scorts.index')
    ->middleware('permission:scorts.index');

    Route::get('scorts/create','admin\ScortController@create')->name('scorts.create')
    ->middleware('permission:scorts.create');

    Route::get('scorts/{scort}/edit','admin\ScortController@edit')->name('scorts.edit')
    ->middleware('permission:scorts.edit');

    Route::put('scorts/{scort}','admin\ScortController@update')->name('scorts.update')
    ->middleware('permission:scorts.edit');

    Route::get('scorts/{scort}','admin\ScortController@show')->name('scorts.show')
    ->middleware('permission:scorts.show');

    Route::delete('scorts/{scort}','admin\ScortController@destroy')->name('scorts.destroy')
    ->middleware('permission:scorts.destroy');


     //paquetes
     Route::post('packages/store','admin\PackageController@store')->name('packages.store')
     ->middleware('permission:packages.create');
 
     Route::get('packages','admin\PackageController@index')->name('packages.index')
     ->middleware('permission:packages.index');
 
     Route::get('packages/create','admin\PackageController@create')->name('packages.create')
     ->middleware('permission:packages.create');
 
     Route::get('packages/{package}/edit','admin\PackageController@edit')->name('packages.edit')
     ->middleware('permission:packages.edit');
 
     Route::put('packages/{package}','admin\PackageController@update')->name('packages.update')
     ->middleware('permission:packages.edit');
 
     Route::get('packages/{package}','admin\PackageController@show')->name('packages.show')
     ->middleware('permission:packages.show');
 
     Route::delete('packages/{package}','admin\PackageController@destroy')->name('packages.destroy')
     ->middleware('permission:packages.destroy');

     //comentarios
     Route::post('comments/store','admin\CommentController@store')->name('comments.store')
     ->middleware('permission:comments.create');
 
     Route::get('comments','admin\CommentController@index')->name('comments.index')
     ->middleware('permission:comments.index');
 
     Route::get('comments/create','admin\CommentController@create')->name('comments.create')
     ->middleware('permission:comments.create');
 
     Route::get('comments/{coment}/edit','admin\CommentController@edit')->name('comments.edit')
     ->middleware('permission:comments.edit');
 
     Route::put('comments/{coment}','admin\CommentController@update')->name('comments.update')
     ->middleware('permission:comments.edit');
 
     Route::get('comments/{coment}','admin\CommentController@show')->name('comments.show')
     ->middleware('permission:comments.show');
 
     Route::delete('comments/{coment}','admin\CommentController@destroy')->name('comments.destroy')
     ->middleware('permission:comments.destroy');


     //galerias
     Route::post('galleries/store','admin\GalleryController@store')->name('galleries.store')
     ->middleware('permission:galleries.create');
 
     Route::get('galleries','admin\GalleryController@index')->name('galleries.index')
     ->middleware('permission:galleries.index');
 
     Route::get('galleries/create','admin\GalleryController@create')->name('galleries.create')
     ->middleware('permission:galleries.create');
 
     Route::get('galleries/{coment}/edit','admin\GalleryController@edit')->name('galleries.edit')
     ->middleware('permission:galleries.edit');
 
     Route::put('galleries/{coment}','admin\GalleryController@update')->name('galleries.update')
     ->middleware('permission:galleries.edit');
 
     Route::get('galleries/{coment}','admin\GalleryController@show')->name('galleries.show')
     ->middleware('permission:galleries.show');
 
     Route::delete('galleries/{coment}','admin\GalleryController@destroy')->name('galleries.destroy')
     ->middleware('permission:galleries.destroy');

     Route::get('galleries/getalldata/{coment}','admin\GalleryController@getalldata')->name('galleries.getalldata')
     ->middleware('permission:galleries.edit');

     
     //videos
     Route::post('videos/store','admin\VideoController@store')->name('videos.store')
     ->middleware('permission:videos.create');
 
     Route::get('videos','admin\VideoController@index')->name('videos.index')
     ->middleware('permission:videos.index');
 
     Route::get('videos/create','admin\VideoController@create')->name('videos.create')
     ->middleware('permission:videos.create');
 
     Route::get('videos/{video}/edit','admin\VideoController@edit')->name('videos.edit')
     ->middleware('permission:videos.edit');
 
     Route::put('videos/{video}','admin\VideoController@update')->name('videos.update')
     ->middleware('permission:videos.edit');
 
     Route::get('videos/{video}','admin\VideoController@show')->name('videos.show')
     ->middleware('permission:videos.show');
 
     Route::delete('videos/{video}','admin\VideoController@destroy')->name('videos.destroy')
     ->middleware('permission:videos.destroy');


     //servicios
     Route::post('services/store','admin\ServiceController@store')->name('services.store')
     ->middleware('permission:services.create');
 
     Route::get('services','admin\ServiceController@index')->name('services.index')
     ->middleware('permission:services.index');
 
     Route::get('services/create','admin\ServiceController@create')->name('services.create')
     ->middleware('permission:services.create');
 
     Route::get('services/{service}/edit','admin\ServiceController@edit')->name('services.edit')
     ->middleware('permission:services.edit');
 
     Route::put('services/{service}','admin\ServiceController@update')->name('services.update')
     ->middleware('permission:services.edit');
 
     Route::get('services/{service}','admin\ServiceController@show')->name('services.show')
     ->middleware('permission:services.show');
 
     Route::delete('services/{service}','admin\ServiceController@destroy')->name('services.destroy')
     ->middleware('permission:services.destroy');


     //caracteristicas
     Route::post('characteristics/store','admin\CharacteristicController@store')->name('characteristics.store')
     ->middleware('permission:characteristics.create');
 
     Route::get('characteristics','admin\CharacteristicController@index')->name('characteristics.index')
     ->middleware('permission:characteristics.index');
 
     Route::get('characteristics/create','admin\CharacteristicController@create')->name('characteristics.create')
     ->middleware('permission:characteristics.create');
 
     Route::get('characteristics/{caracter}/edit','admin\CharacteristicController@edit')->name('characteristics.edit')
     ->middleware('permission:characteristics.edit');
 
     Route::put('characteristics/{caracter}','admin\CharacteristicController@update')->name('characteristics.update')
     ->middleware('permission:characteristics.edit');
 
     Route::get('characteristics/{caracter}','admin\CharacteristicController@show')->name('characteristics.show')
     ->middleware('permission:characteristics.show');
 
     Route::delete('characteristics/{caracter}','admin\CharacteristicController@destroy')->name('characteristics.destroy')
     ->middleware('permission:characteristics.destroy');


     //profile
      //servicios
      Route::post('profiles/store','scort\ProfileController@store')->name('profiles.store')
      ->middleware('permission:profiles.create');
  
      Route::get('profiles','scort\ProfileController@index')->name('profiles.index')
      ->middleware('permission:profiles.index');
  
      Route::get('profiles/create','scort\ProfileController@create')->name('profiles.create')
      ->middleware('permission:profiles.create');
  
      Route::get('profiles/{caracter}/edit','scort\ProfileController@edit')->name('profiles.edit')
      ->middleware('permission:profiles.edit');
  
      Route::put('profiles/{caracter}','scort\ProfileController@update')->name('profiles.update')
      ->middleware('permission:profiles.edit');
  
      Route::get('profiles/{caracter}','scort\ProfileController@show')->name('profiles.show')
      ->middleware('permission:profiles.show');
  
      Route::delete('profiles/{caracter}','scort\ProfileController@destroy')->name('profiles.destroy')
      ->middleware('permission:profiles.destroy');


      ///
      //galerias
     Route::post('migaleria/store','scort\GalleryController@store')->name('migaleria.store')
     ->middleware('permission:galleries.create');
 
     Route::get('migaleria','scort\GalleryController@index')->name('migaleria.index')
     ->middleware('permission:galleries.index');
 
     Route::get('migaleria/create','scort\GalleryController@create')->name('migaleria.create')
     ->middleware('permission:galleries.create');
 
     Route::get('migaleria/{coment}/edit','scort\GalleryController@edit')->name('migaleria.edit')
     ->middleware('permission:galleries.edit');
 
     Route::put('migaleria/{coment}','scort\GalleryController@update')->name('migaleria.update')
     ->middleware('permission:galleries.edit');
 
     Route::get('migaleria/{coment}','scort\GalleryController@show')->name('migaleria.show')
     ->middleware('permission:galleries.show');
 
     Route::delete('migaleria/{coment}','scort\GalleryController@destroy')->name('migaleria.destroy')
     ->middleware('permission:galleries.destroy');


      //mivideos
      Route::post('mivideo/store','scort\VideoController@store')->name('mivideo.store')
      ->middleware('permission:videos.create');
  
      Route::get('mivideo','scort\VideoController@index')->name('mivideo.index')
      ->middleware('permission:videos.index');
  
      Route::get('mivideo/create','scort\VideoController@create')->name('mivideo.create')
      ->middleware('permission:videos.create');
  
      Route::get('mivideo/{video}/edit','scort\VideoController@edit')->name('mivideo.edit')
      ->middleware('permission:videos.edit');
  
      Route::put('mivideo/{video}','scort\VideoController@update')->name('mivideo.update')
      ->middleware('permission:videos.edit');
  
      Route::get('mivideo/{video}','scort\VideoController@show')->name('mivideo.show')
      ->middleware('permission:videos.show');
  
      Route::delete('mivideo/{video}','scort\VideoController@destroy')->name('mivideo.destroy')
      ->middleware('permission:videos.destroy');


      //mismensajes
      Route::post('mensajes/store','scort\MessageController@store')->name('mensajes.store')
      ->middleware('permission:messages.create');
  
      Route::get('mensajes','scort\MessageController@index')->name('mensajes.index')
      ->middleware('permission:messages.index');
  
      Route::get('mensajes/create','scort\MessageController@create')->name('mensajes.create')
      ->middleware('permission:messages.create');
  
      Route::get('mensajes/{mensaje}/edit','scort\MessageController@edit')->name('mensajes.edit')
      ->middleware('permission:messages.edit');
  
      Route::put('mensajes/{mensaje}','scort\MessageController@update')->name('mensajes.update')
      ->middleware('permission:messages.edit');
  
      Route::get('mensajes/{mensaje}','scort\MessageController@show')->name('mensajes.show')
      ->middleware('permission:messages.show');
  
      Route::delete('mensajes/{mensaje}','scort\MessageController@destroy')->name('mensajes.destroy')
      ->middleware('permission:messages.destroy');


       //mensajes
       Route::post('messages/store','admin\MessageController@store')->name('message.store')
       ->middleware('permission:messages.create');
   
       Route::get('messages','admin\MessageController@index')->name('message.index')
       ->middleware('permission:messages.index');
   
       Route::get('messages/create','admin\MessageController@create')->name('message.create')
       ->middleware('permission:messages.create');
   
       Route::get('messages/{mensaje}/edit','admin\MessageController@edit')->name('message.edit')
       ->middleware('permission:messages.edit');
   
       Route::put('messages/{mensaje}','admin\MessageController@update')->name('message.update')
       ->middleware('permission:messages.edit');
   
       Route::get('messages/{mensaje}','admin\MessageController@show')->name('message.show')
       ->middleware('permission:messages.show');
   
       Route::delete('messages/{mensaje}','admin\MessageController@destroy')->name('message.destroy')
       ->middleware('permission:messages.destroy');


       Route::get('messages/detail/{id}','admin\MessageController@detail')->name('message.detail')
       ->middleware('permission:messages.edit');
       
});
Route::get('/','Front\HomeController@index')->name('front.admin');

Route::get('/{lugar}/contacto','Front\HomeController@contacto')->name('front.contacto');
Route::post('/contacto','Front\HomeController@sendcontacto')->name('front.postcontacto');
Route::get('/{lugar}/anunciate','Front\HomeController@anunciate')->name('front.anunciate');
Route::post('/anunciate','Front\HomeController@solicitud')->name('front.solicitud');
Route::get('/{lugar}','Front\HomeController@lugar')->name('front.lugar');
Route::get('/{lugar}/{id}/{name}','Front\HomeController@detalle')->name('front.detail');
Route::get('/{lugar}/{packete}','Front\HomeController@filtropack')->name('front.filtro');

Route::post('/getfiltro','front\HomeController@getFiltro');

Route::post('/search','front\HomeController@search')->name('front.search');;
