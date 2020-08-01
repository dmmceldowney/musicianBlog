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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

// Pages I need:

// Blog Posts
Route::prefix('/blog')->group(function(){
    // index
    Route::get('/', 'BlogController@index')->name('blog.index');
    Route::get('/tags/', 'BlogController@tags')->name('blog.tags');
    Route::get('/tags/{tagId}', 'BlogController@postsByTag')->name('blog.postsByTag');
    Route::get('/{id}', 'BlogController@post')->name('blog.blogPost');

});

// Post Management
Route::prefix('/post-management')->middleware('auth')->group(function(){
    Route::get('/', 'PostController@index')->name('posts.index')->middleware('auth');
    Route::get('/edit-post/{id?}', 'PostController@editPost')->name('posts.create');
    Route::post('/submit-post', 'PostController@submitPost')->name('posts.submit');

});

// Events
Route::prefix('/events')->group(function(){
    Route::get('/', 'EventsController@index')->name('events.index');
    Route::get('/edit-event/{id?}', 'EventsController@editEvent')->name('events.createEvent')->middleware('auth');
    Route::post('/submit-event', 'EventsController@submitEvent')->name('events.submitEvent')->middleware('auth');

});
