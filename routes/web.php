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

use App\Http\Controllers\UserController;

Auth::routes();

//main app route
Route::get('/djeva', 'AppController@index')->name('djevalastin');
Route::get('/', 'AppController@index')->name('home');
Route::get('/mixtape/download/{title}', 'AppContoller@downloadMixtape')->name('download');
Route::post('/newsletter/create', 'AppController@subscribe')->name('subscribe');

//mixtape loader
//Route::group(['middleware' => 'cors'], function () { });

Route::get('/mixtapes', 'MixtapeController@mixtapes');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes... restrict acess to only admin
Route::group(['middleware' => 'admin'], function () {
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
});


// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')
    ->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')
    ->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm ')
    ->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/admin', function () {
    return view('admin.index');
});

//admin group
Route::group(
    ['middleware' => 'auth', 'prefix' => 'admin'],
    function () {
        //about routes
        // Route::get('/about', 'AboutController@index');
        Route::get('/about/create', 'AboutController@create')->name('about_create');
        Route::post('/about/store', 'AboutController@store')->name('about_store');

        //Newsletter Route
        Route::get('/newsletter/subscribers', 'NewsletterController@index')->name('subscribers');

        Route::get('/newsletter/createmessage', 'NewsletterController@createMessage');
        Route::post('/newsletter/sendmessage', 'NewsletterController@sendMessage');

        Route::post('/newsletter/subscribe', 'NewsletterController@subscribe');
        Route::get('/subscribers/delete/{id}', 'NewsletterController@deleteSubscriber');

        //Banners Route
        Route::get('/banners/update', 'BannerController@create');
        Route::post('/banners/update', 'BannerController@store');

        //User profile Route
        Route::get('/users/profile', 'UserController@updateProfile');
        Route::post('/users/profile/update', 'UserController@store');

        //Services Routes
        Route::get('/service/create', 'ServiceController@create')->name('services');
        Route::post('/service/store', 'ServiceController@store')->name('serviceStrore');
        Route::get('/service/delete/{id}', 'ServiceController@deleteService')->name('serviceDelete');

        //Events Routes
        Route::get('/events', 'EventController@index');
        Route::get('/events/create', 'EventController@create');
        Route::post('/events/store', 'EventController@store');
        Route::get('/events/delete/{id}', 'EventController@deleteEvent');

        //Mixtape Route
        Route::get('/mixtape', 'MixtapeContoller@index');
        Route::get('/mixtape/create', 'MixtapeController@create');
        Route::post('/mixtape/upload', 'MixtapeController@uploadMixtape');
        Route::get('/mixtape/delete/{tape}', "MixtapeController@deleteMixtape");

        //SOcialMedia Routes
        Route::get('/social/media', 'SocialMediaController@createMediaLink');
    }
);
