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

Route::get('/',[ 
    'uses' => 'PublicPagesController@getIndex',
    'as'   => 'index'
]);

Route::get('/single/{post}',[
    'uses' => 'PublicPagesController@getSingle',
    'as'   => 'single'
]);

Route::get('/category/{category}',[
    'uses' => 'PublicPagesController@getCategory',
    'as'   => 'category'
]);

Route::get('/author/{author}',[
    'uses' => 'PublicPagesController@getAuthor',
    'as'   => 'author'
]);

// admin

Auth::routes();


Route::group(['namespace' => 'Backend'], function () {
        
    Route::get('/home',[
        'uses' => 'HomeController@index',
        'as'   => 'home'
    ]);
    
    Route::resource('posts', 'PostController');

});