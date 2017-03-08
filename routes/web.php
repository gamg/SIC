<?php

/*Route::get('/', function () {
    return view('frontend.home');
});*/

Auth::routes();

Route::get('/', 'Frontend\HomeController@index');

Route::group(['namespace' => 'Frontend', 'middleware' => 'auth'], function(){
    /* Routes for profile */
    Route::get('my-profile', 'ProfilesController@getIndex')->name('profiles.index');
    Route::post('my-profile', 'ProfilesController@postSave')->name('profiles.save');

    /* Routes for products crawler */
    Route::get('expensive-products', 'ProductsCrawlerController@getExpensiveProducts')
        ->name('crawler.expensive');
    Route::get('cheapest-products', 'ProductsCrawlerController@getCheapestProducts')
        ->name('crawler.cheapest');

    /* Routes for wishlist products */
    Route::get('wishlist', 'WishlistController@getProducts')
        ->name('wishlist.index');
    Route::post('wishlist/add', 'WishlistController@postAddProduct')
        ->name('wishlist.add');
    Route::post('wishlist/delete', 'WishlistController@postDeleteProduct')
        ->name('wishlist.delete');
});