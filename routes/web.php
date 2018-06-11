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
Route::get('/index', 'HomeController@index')->name('index');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/caps', 'CapController@index');
Route::get('/caps/deleteConfirm', 'CapController@deleteConfirm')->name('deleteConfirm');
Route::get('/caps/delete/{cap}', 'CapController@destroy')->name('delete');
Route::get('/categories/delete/{category}', 'CategoryController@destroy')->name('category_delete');

Route::get('/layout', function () {
    return view('layout');
});


Route::resources([ 'caps' => 'CapController', 
                   'categories' => 'CategoryController',
                   'suppliers' => 'SupplierController' ]);

Route::group(['middleware' =>['web']],function(){
    Route::get('/test',function(){
        return 'test';
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
