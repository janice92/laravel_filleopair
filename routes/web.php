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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('articles', 'ArticleController');
Auth::routes();



Route::get('user/{id}', 'ArticleController@showUserArticles');

Route::resource('user', 'UserController');
Route::get('/user', 'UserController@index');
Route::get('user/{user}/edit ', 'UserController@edit');
Route::get('user.show', 'UserController@show');
Route::get('/user/create', 'UserController@create');
Route::post('user', 'UserController@store');
Route::put('/user/id', 'UserController@update');
Route::delete('/user/id', 'UserController@destroy');
            


Route::post('articles/{id}/comment', [
    'as'   => 'articles.comment',
    'uses' => 'ArticleController@postComment'
]);
Route::get('/email', 'HomeController@email')->name('sendEmail');

Route::get('image-upload', 'ImageController@index');
Route::post('store', 'ImageController@store');
Route::get('upload', 'UploadController@index');
Route::post('upload/uploadFiles', 'UploadController@multiple_upload');

Route::get('contact', 'ContactController@contact');
Route::post('contact', ['as'=>'contact.store','uses'=>'ContactController@contactPost']);

Route::get('show', 'ImageController@show');

Route::get('sendmail', 'SendMailController@sendMail');

Route::get('/home', 'HomeController@index');
Route::get('/admin_home', 'AdminHomeController@index');

Route::get('admin_login','AdminAuth\LoginController@showLoginForm');
Route::post('admin_login','AdminAuth\LoginController@login');
Route::post('admin_logout','AdminAuth\LoginController@logout');
Route::post('admin_password/email','AdminAuth\ForgotPasswordController@sendResetLinkEmail ' );
Route::get('admin_password/reset','AdminAuth\ForgotPasswordController@showLinkRequestForm ' );
Route::post('admin_password/reset','AdminAuth\ResetPasswordController@reset');
Route::get('admin_password/reset/{token}','AdminAuth\ResetPasswordController@showResetForm');
Route::get('admin_register','AdminAuth\RegisterController@showRegistrationForm');
Route::post('admin_register','AdminAuth\RegisterController@register');


Route::get('/chat', function(){
    return view('chat');
});
Auth::routes();

Broadcast::channel('chat', function ($user) {
    return Auth::check();
});

Route::get('/messages', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');

