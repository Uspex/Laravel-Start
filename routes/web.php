<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


//Авторизация
Auth::routes();


/**************************************************
Без авторизации
/**************************************************/


//Главная страница сайта
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');


//Страницы
//Route::group(['namespace' => 'Page'], function(){
//    Route::get('page/{slug}', [App\Http\Controllers\Page\PageController::class, 'show'])->name('page.show');
//});


//Блог
Route::group(['namespace' => 'Blog'], function(){
    Route::get('blogs/{category?}', [App\Http\Controllers\Blog\BlogController::class, 'index'])->name('blog.index');
    Route::get('blog/{slug}', [App\Http\Controllers\Blog\BlogController::class, 'show'])->name('blog.show');
});


//
////Sitemap
//Route::group(['namespace' => 'Sitemap'], function(){
//    Route::get('sitemap/sitemap.xml', 'SitemapController@show')->name('sitemap.show');
//});


/**************************************************
Client
/**************************************************/
include('roles/client.php');


/**************************************************
Admin
/**************************************************/
include('roles/admin.php');



