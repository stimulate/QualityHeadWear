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
Route::get('/', 'HomeController@index');
Route::get('/Home', 'HomeController@index')->name('home');
Route::get('/index', 'HomeController@index');
Route::get('/Home/index', 'HomeController@index')->name('index');
Route::get('/Home/about', 'HomeController@about')->name('about');
Route::get('/Home/contact', 'HomeController@contact')->name('contact');

Route::get('/caps', 'CapController@index');
Route::get('/caps_user', 'CapController@index')->name('member');
Route::get('/caps_user/{cap}', 'CapController@index')->name('member_sort');

Route::get('/caps/deleteConfirm', 'CapController@deleteConfirm')->name('deleteConfirm');
Route::get('/caps/delete/{cap}', 'CapController@destroy')->name('delete');
Route::get('/categories/delete/{category}', 'CategoryController@destroy')->name('category_delete');

Route::get('/order', 'OrderController@index')->name('createOrder');
Route::get('/order/purchase', 'OrderController@store')->name('purchase');

Route::get('/add2cart/{id}',[
    'uses' => 'CapController@getAddToCart',
    'as' =>'cap.addToCart'
]);
Route::get('/shoppingcart',[
    'uses' => 'CapController@getCart',
    'as' =>'cap.cart'
]);
Route::get('/layout', function () {
    return view('layout');
});

Route::resources([ 'caps' => 'CapController', 
                   'categories' => 'CategoryController',
                   'orders'=>'OrderController',
                    ]);

Route::group(['middleware' =>['web','auth','isEmailVerified']],function(){
    Route::get('/test',function(){
        return 'test';
    });
});

Route::get('/cart', 'CartController@index')->name('cart');;
Route::get('/cart/addItem/{id}', 'CartController@addItem')->name('addItem');
Route::get('/cart/remove/{id}', 'CartController@destroy')->name('removeItem');
Route::get('/cart/update/{id}', 'CartController@update')->name('updateQty');
Route::get('/cart/remove', 'CartController@clear')->name('clear');


Auth::routes();

Route::get('/register/verify', 'Auth\RegisterController@verify')->name('verifyEmailLink');
Route::get('/register/verify/resend', 'Auth\RegisterController@showResendVerificationEmailForm')->name('showResendVerificationEmailForm');
Route::post('/register/verify/resend', 'Auth\RegisterController@resendVerificationEmail')->name('resendVerificationEmail');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
