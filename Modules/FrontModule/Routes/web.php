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
//Route::group(
//    [
//        'prefix' => LaravelLocalization::setLocale(),
//        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
//    ], function () {

    Route::prefix('')->name('front.')->group(function () {
        Route::get('/', 'FrontModuleController@index')->name('index');
        Route::get('/partners','FrontModuleController@partners')->name('partners');
        Route::get('/shop', 'FrontModuleController@shop')->name('shop');
        Route::get('/shop/product/{id}', 'FrontModuleController@show_product')->name('product');

        // contact Page
        Route::get('/contact_us', 'FrontModuleController@contact_us')->name('contact');
        //send the message from contact us page
        Route::post('/sendMessage', 'FrontModuleController@sendMessage')->name('sendMessage');
        //about page
        Route::get('/about', 'FrontModuleController@about')->name('about');

        //company_products Page
        Route::get('/company_products/{id}', 'FrontModuleController@company_product')->name('company');



    });

//});


