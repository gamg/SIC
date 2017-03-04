<?php

/*Route::get('/', function () {
    return view('frontend.home');
});*/

Auth::routes();

Route::get('/', 'Frontend\HomeController@index');

Route::group(['namespace' => 'Frontend', 'middleware' => ['auth', 'normalUser']], function(){

});

Route::group(['namespace' => 'Backend', 'middleware' => ['auth', 'adminUser']], function(){

});