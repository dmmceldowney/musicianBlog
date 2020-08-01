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
Route::get('/', 'BlogController@homeView')->name('blog.homeView');

// Blog Posts
Route::prefix('/blog')->group(function(){
    // index
    Route::get('', 'BlogController@indexView')->name('blog.indexView');
    Route::get('/', 'BlogController@indexView')->name('blog.indexView');
    Route::get('/tags/', 'BlogController@tagsView')->name('blog.tagsView');
    Route::get('/tags/{tagId}', 'BlogController@postsByTagView')->name('blog.postsByTagView');
    Route::get('/{id}', 'BlogController@postView')->name('blog.blogPostView');

});

// Post Management
Route::prefix('/post-management')->middleware('auth')->group(function(){
    Route::get('/', 'PostController@indexView')->name('posts.indexView');
    Route::get('/edit-post/{id?}', 'PostController@editPostView')->name('posts.createView');
    Route::post('/submit-post', 'PostController@submitPost')->name('posts.submit');

});

// Events
Route::prefix('/events')->group(function(){
    Route::get('/', 'EventsController@indexView')->name('events.indexView');
    Route::get('/edit-event/{id?}', 'EventsController@editEventView')->name('events.createEventView')->middleware('auth');
    Route::post('/submit-event', 'EventsController@submitEvent')->name('events.submitEvent')->middleware('auth');

});
