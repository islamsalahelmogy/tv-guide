<?php


Route::get('/admin/login','AuthController@getLogin')->name('login.get');
Route::post('/admin/login','AuthController@postLogin')->name('login.post');
Route::get('/logout','AuthController@logOut')->name('logout');

Route::get('/','HomeController@index');
Route::get('/search','HomeController@search');
Route::get('/{id}/single-product','HomeController@singleProduct')->name('single-product');

Route::get('search','SearchController@index')->name('search');
Route::view('contact','front.contact')->name('contact');
Route::view('about','front.about_us')->name('about_us');
Route::view('companies','front.companies')->name('companies');

Route::group(['middleware' => 'auth'],function() {
    Route::get('dashboard',function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('categories','CategoriesController@index')->name('categories');
    Route::get('categories/create','CategoriesController@create')->name('categories.create');
    Route::post('categories','CategoriesController@store')->name('categories.store');
    Route::get('categories/{id}/edit','CategoriesController@edit')->name('categories.edit');
    Route::patch('categories/{id}/update','CategoriesController@update')->name('categories.update');

    Route::get('brands','BrandsController@index')->name('brands');
    Route::get('brands/create','BrandsController@create')->name('brands.create');
    Route::post('brands','BrandsController@store')->name('brands.store');
    Route::get('brands/{id}/edit','BrandsController@edit')->name('brands.edit');
    Route::patch('brands/{id}/update','BrandsController@update')->name('brands.update');


    Route::get('channels','ChannelController@index')->name('channels');
    Route::get('channels/create','ChannelController@create')->name('channels.create');
    Route::get('channels/{channel}/profile','ChannelController@profile')->name('channels.profile');
    Route::post('channels','ChannelController@store')->name('channels.store');
    Route::get('channels/{id}/edit','ChannelController@edit')->name('channels.edit');
    Route::patch('channels/{id}/update','ChannelController@update')->name('channels.update');


    Route::get('programs','ProgramController@index')->name('programs');
    Route::get('programs/create','ProgramController@create')->name('programs.create');
    Route::post('programs','ProgramController@store')->name('programs.store');
    Route::get('programs/{id}/edit','ProgramController@edit')->name('programs.edit');
    Route::patch('programs/{id}/update','ProgramController@update')->name('programs.update');


    Route::get('program-times','ProgramTimesController@index')->name('program-times');
    Route::get('program-times/create','ProgramTimesController@create')->name('program-times.create');
    Route::post('program-times','ProgramTimesController@store')->name('program-times.store');
    Route::get('program-times/{id}/edit','ProgramTimesController@edit')->name('program-times.edit');
    Route::patch('program-times/{id}/update','ProgramTimesController@update')->name('program-times.update');


    Route::get('admins','AdminController@index')->name('admins');
    Route::get('admins/create','AdminController@create')->name('admins.create');
    Route::post('admins','AdminController@store')->name('admins.store');
    Route::get('admins/{id}/edit','AdminController@edit')->name('admins.edit');
    Route::patch('admins/{id}/update','AdminController@update')->name('admins.update');

    Route::get('sellers','SellersController@index')->name('sellers');
    Route::get('sellers/create','SellersController@create')->name('sellers.create');
    Route::post('sellers','SellersController@store')->name('sellers.store');
    Route::get('sellers/{id}/edit','SellersController@edit')->name('sellers.edit');
    Route::patch('sellers/{id}/update','SellersController@update')->name('sellers.update');


    Route::get('products','ProductController@index')->name('products');
    Route::get('products/create','ProductController@create')->name('products.create');
    Route::post('products','ProductController@store')->name('products.store');
    Route::get('products/{id}/edit','ProductController@edit')->name('products.edit');
    Route::patch('products/{id}/update','ProductController@update')->name('products.update');

});
