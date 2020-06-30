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

Route::get('/', function () {
    return redirect('/top');
});


Route::get('/top', 'ArticleController@top')->name('top');
Route::get('/category/{id}', 'CategoryController@index')->name('category.index');

Route::get('/articles', 'ArticleController@index')->name('articles');
Route::get('/article/new', 'ArticleController@create')->name('article.new');
Route::post('/article/confirm', 'ArticleController@confirm')->name('article.confirm');
Route::post('/article', 'ArticleController@store')->name('article.store');
Route::post('/article/complete', 'ArticleController@complete')->name('article.complete');
Route::get('/article/edit/{id}', 'ArticleController@edit')->name('article.edit');
Route::post('/article/update/{id}', 'ArticleController@update')->name('article.update');
Route::get('/article/{id}', 'ArticleController@show')->name('article.show');
Route::post('/article/image_confirm', 'ArticleController@image_confirm')->name('article.image_confirm');
Route::post('/article/image_insert', 'ArticleController@image_insert')->name('article.image_insert');
Route::delete('/article/{id}', 'ArticleController@destroy')->name('article.delete');
Route::get('/disclaim', 'ArticleController@disclaim')->name('disclaim');

// Sitemap Route
Route::get('/sitemap.xml', 'SitemapController@index')->name('sitemap.xml');
Route::get('/sitemap.xml/article', 'SitemapController@articles');
Route::get('/sitemap.xml/category', 'SitemapController@categories');


// Route::get('/message', 'MemberController@message')->name('message');
// Route::post('/message', 'MemberController@mail')->name('mail');
//
// Route::get('/two_factor_auth/login_form', 'TwoFactorAuthController@login_form');
// Route::post('/ajax/two_factor_auth/first_auth', 'TwoFactorAuthController@first_auth');
// Route::post('/ajax/two_factor_auth/second_auth', 'TwoFactorAuthController@second_auth');

Route::post('register/pre_check', 'Auth\RegisterController@pre_check')->name('register.pre_check');
Route::get('register/verify/{token}', 'Auth\RegisterController@showForm');
Route::post('register/main_check', 'Auth\RegisterController@mainCheck')->name('register.main.check');
Route::post('register/main_register', 'Auth\RegisterController@mainRegister')->name('register.main.registered');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
