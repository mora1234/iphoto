<?php

#cms
Route::middleware(['adminguard'])->group(function() {
  Route::prefix('cms')->group(function() {
    Route::get('dashboard', 'CmsController@dashboard');
    Route::get('orders', 'CmsController@orders');
    Route::resource('menu', 'MenuController');
    Route::resource('content', 'ContentController');
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
  });
});

#shop
Route::prefix('shop')->group(function() {
  Route::get('/', 'ShopController@categories');
  Route::get('order', 'ShopController@order');
  Route::get('checkout', 'ShopController@checkout');
  Route::get('clear-cart', 'ShopController@clearCart');
  Route::get('update-cart', 'ShopController@updateCart');
  Route::get('remove-item', 'ShopController@removeItem');
  Route::get('add-to-cart', 'ShopController@addToCart');
  Route::get('search', 'ShopController@search');
  Route::get('{curl}', 'ShopController@products');
  Route::get('{curl}/{purl}', 'ShopController@item');
});


#user
Route::get('user/signin', 'UserController@getSignin');
Route::post('user/signin', 'UserController@postSignin');
Route::get('user/signup', 'UserController@getSignup');
Route::post('user/signup', 'UserController@postSignup');
Route::get('user/logout', 'UserController@logout');

#pages
Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('{url}', 'PagesController@content');
