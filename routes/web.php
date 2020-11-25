<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------|
*/ 
Route::prefix('')->namespace('Front')->group(function () {
    Route::get('/', 'FrontController@index')->name('index');
    Route::get('/news/{id}', 'FrontController@news')->name('news');
    Route::get('/admission', 'FrontController@admission')->name('admission');
    Route::get('/about', 'FrontController@about')->name('about');
    Route::name('gallery')->get('/gallery', 'FrontController@gallery');
    Route::name('contact')->get('/contact', 'FrontController@contact');
    Route::name('tocontact')->post('/tocontact', 'FrontController@tocontact');
});


/*
|--------------------------------------------------------------------------
| Enter to Admin
|--------------------------------------------------------------------------|
*/
Route::name('login')->get('/admin', 'Auth\LoginController@showLoginForm');
Route::post('/admin', 'Auth\LoginController@login');
Route::name('logout')->post('/logout', 'Auth\LoginController@logout');


Route::prefix('admin')->middleware('auth')->namespace('Admin')->group(function()
{
    Route::name('dashboard')->get('/dashboard', 'AdminController@index');

    // back news part
    Route::resource('news', 'NewsController');

    // back gallery part
    Route::resource('galleries', 'GalleryController');
    Route::name('gallery-upload')->post('/galleries/create', 'GalleryController@upload');

    // back contact part
    Route::name('admin-contact')->get('/contact', 'ContactController@index');
    Route::get('/deleteone', 'ContactController@deleteOne');

    // back user part
    Route::resource('users', 'UserController')->middleware('admin');

});