<?php

/*
|--------------------------------------------------------------------------
| url для роли ADMIN
|--------------------------------------------------------------------------
|
|
*/



//Admin
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'role:root'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){

    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');


    //Роли
    Route::group(['namespace' => 'Role'], function(){
        Route::resource('role', '\App\Http\Controllers\Admin\Role\RoleController')->except(['show'])->names('admin.role');
    });

    //Правила / Разрешения
    Route::group(['namespace' => 'Permission'], function(){
        Route::resource('permission', '\App\Http\Controllers\Admin\Permission\PermissionController')->except(['show'])->names('admin.permission');
    });

    //Пользователи
    Route::group(['namespace' => 'User'], function() {
        Route::resource('user', '\App\Http\Controllers\Admin\User\UserController')->except(['show'])->names('admin.user');
    });

    //Категории
    Route::group(['namespace' => 'Category'], function(){
        Route::resource('category', '\App\Http\Controllers\Admin\Category\CategoryController')->except(['show'])->names('admin.category');
    });

    //теги
    Route::group(['namespace' => 'Tag'], function(){
        Route::resource('tag', '\App\Http\Controllers\Admin\Tag\TagController')->except(['show'])->names('admin.tag');
    });

    //Страницы
    Route::group(['namespace' => 'Page'], function(){
        Route::resource('page', '\App\Http\Controllers\Admin\Page\PageController')->except(['show'])->names('admin.page');
        Route::post('page/publish/{template_id}', [\App\Http\Controllers\Admin\Page\PageController::class, 'publish'])->name('admin.page.publish');
        Route::post('page/not-publish/{template_id}', [\App\Http\Controllers\Admin\Page\PageController::class, 'notPublish'])->name('admin.page.not_publish');
    });

    //Блог
    Route::group(['namespace' => 'Post'], function(){
        Route::resource('post', '\App\Http\Controllers\Admin\Post\PostController')->except(['show'])->names('admin.post');
        Route::post('post/publish/{post_id}', [\App\Http\Controllers\Admin\Post\PostController::class, 'publish'])->name('admin.post.publish');
        Route::post('post/not-publish/{post_id}', [\App\Http\Controllers\Admin\Post\PostController::class, 'notPublish'])->name('admin.post.not_publish');
    });


});


