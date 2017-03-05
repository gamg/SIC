<?php

/*Route::get('/', function () {
    return view('frontend.home');
});*/

Auth::routes();

Route::get('/', 'Frontend\HomeController@index');

Route::group(['namespace' => 'Frontend', 'middleware' => ['auth']], function(){
    Route::get('my-profile', 'ProfilesController@getIndex')->name('profiles.index');
    Route::post('my-profile', 'ProfilesController@postSave')->name('profiles.save');
});

Route::group(['namespace' => 'Backend', 'middleware' => ['auth', 'adminUser']], function(){

});