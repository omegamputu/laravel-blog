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



Route::get('about', function (){
    return view('about');
});

Route::get('contact', function (){
    return view('contact');
});

Route::get('confirm', function (){
    return view('confirm');
});

// blog
Route::get('/', ['uses' => 'BlogController@index', 'as' => 'blog.index']);
Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@single'])->where('slug', '[\w\d\-\_]+');

// comments
Route::post('comment/{post_id}', ['uses' => 'CommentController@save', 'as' => 'comment.save']);
// contact
Route::post('mycontact', ['uses' => 'ContactController@store', 'as' => 'mycontact.store']);

// Admin
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function (){
    // Admin
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    // Search
    Route::any('search', 'SearchController@research')->name('search');

    // blog posts
    Route::resource('posts', 'PostController');
    // categories
    Route::resource('categories', 'CategoryController');
    // tags
    Route::resource('tags', 'TagController', ['except' => ['create']]);
    // user admin
    Route::resource('profile', 'UserController', ['except' => ['destroy']]);
    // Contact admin
    Route::resource('contacts', 'ContactsController');
    // Comments admin
    Route::resource('comments', 'CommentsController', ['except' => ['edit', 'update', 'store', 'create']]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
