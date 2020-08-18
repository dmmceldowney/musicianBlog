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

// Admin Routes
Route::prefix('admin')->middleware('auth')->group(function(){
    // index
    Route::get('/', 'AdminController@index')->name('admin.index');

    // blog index
    Route::prefix('/blog')->group(function(){
        Route::get('', 'AdminController@postIndex')->name('admin.blogIndex');
        Route::get('/create', 'AdminController@createPost')->name('admin.createPost');
        Route::post('/saveBlogPost', 'AdminController@savePost')->name('admin.saveBlogPost');
        Route::get('/edit/{id}', 'AdminController@editPost')->name('admin.blogPost');
    });

    // tags
    Route::prefix('/tags')->group(function(){
        Route::get('/', 'AdminController@tagsIndex')->name('admin.tagsIndex');
        Route::get('/create', 'AdminController@createTag')->name('admin.createTag');
        Route::post('saveTag', 'AdminController@saveTag')->name('admin.saveTag');
        Route::get('/{id?}', 'AdminController@editTag')->name('admin.editTag');
    });

    // events
    Route::prefix('/events')->group(function(){
        Route::get('/', 'AdminController@eventsIndex')->name('admin.eventsIndex');
        Route::get('/create', 'AdminController@createEvent')->name('admin.createEvent');
        Route::post('/saveEvent', 'AdminController@saveEvent')->name('admin.saveEvent');
        Route::get('/edit/{id?}', 'AdminController@editEvent')->name('admin.eventDetail');
    });

});


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

// Pages I need:
Route::get('/', 'BlogController@homeView')->name('blog.homeView');


// Blog Posts
Route::prefix('/blog')->group(function(){
    // index
    Route::get('', 'BlogController@indexView')->name('blog.indexView');
    Route::get('/tags/', 'BlogController@tagsView')->name('blog.tagsView');
    Route::get('/tags/{tagId}', 'BlogController@postsByTag')->name('blog.postsByTagView');
    Route::get('/{id}', 'BlogController@postView')->name('blog.blogPostView');

});

// Events
Route::prefix('/events')->group(function(){

    Route::get('', 'EventsController@eventsIndex')->name('events.indexView');
    Route::get('/{id}', 'EventsController@eventDetail')->name('events.detailView');
    Route::get('/next', 'EventsController@nextEventDetail')->name('events.nextShowView');

});
