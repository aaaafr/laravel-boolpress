<?php

use Illuminate\Support\Facades\Route;

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


// Pagine non connesse ad un  modello

Route::get('/', 'PageController@index')->name('home');
Route::get('about', 'PageController@about')->name('about');
Route::get('contacts', 'PageController@contacts')->name('contacts');
Route::post('contacts', 'PageController@sendContactForm')->name('contacts.send');

// pagine dei post

Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');


Route::get('vue-posts', function(){
    return view('posts');
});

// Auth::routes(['register' => false]);
Auth::routes();



Route::prefix('admin')->middleware('auth')->namespace('Admin')->name('admin.')->group(function(){
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('posts', PostController::class);
});


