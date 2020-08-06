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
    Route::get('/', 'AdminManagementController@index')->name('admin.index');

    // blog index
    Route::prefix('/blog')->group(function(){
        Route::get('', 'AdminManagementController@postIndex')->name('admin.blogIndex');
        Route::get('/create', 'AdminManagementController@createPost')->name('admin.postDetail');
        Route::post('/saveBlogPost', 'AdminManagementController@savePost')->name('admin.saveBlogPost');
        Route::get('/edit/{id}', 'AdminManagementController@editPost')->name('admin.blogPostDetail');
    });

    // tags
    Route::prefix('/tags')->group(function(){
        Route::get('/', 'AdminManagementController@tagsIndex')->name('admin.tagsIndex');
        Route::get('/create', 'AdminManagementController@createTag')->name('admin.createTag');
        Route::post('saveTag', 'AdminManagementController@saveTag')->name('admin.saveTag');
        Route::get('/{id?}', 'AdminManagementController@editTag')->name('admin.editTag');
    });

    // events
    Route::prefix('/events')->group(function(){
        Route::get('/', 'AdminManagementController@eventsIndexView')->name('admin.eventsIndex');
        Route::get('/create', 'AdminManagementController@createEventView')->name('admin.createEvent');
        Route::post('/saveEvent', 'AdminManagementController@saveEvent')->name('admin.saveEvent');
        Route::get('/edit/{id?}', 'AdminManagementController@editEventView')->name('admin.eventDetail');
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
    Route::get('/tags/{tagId}', 'BlogController@postsByTagView')->name('blog.postsByTagView');
    Route::get('/{id}', 'BlogController@postView')->name('blog.blogPostView');

});

// Events
Route::prefix('/events')->group(function(){

    Route::get('', 'EventsController@eventsIndex')->name('events.indexView');
    Route::get('/{id}', 'EventsController@eventDetail')->name('events.detailView');
    Route::get('/next', 'EventsController@nextEventDetail')->name('events.nextShowView');

});
