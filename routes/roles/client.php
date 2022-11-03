<?php

/*
|--------------------------------------------------------------------------
| url для роли CLIENT
|--------------------------------------------------------------------------
|
|
*/



//Client
Route::group(['middleware' => ['auth', 'role:client']], function(){



    Route::group(['namespace' => 'Client'], function(){
        Route::get('dashboard', [App\Http\Controllers\Client\DashboardController::class, 'dashboard'])->name('client.dashboard');
    });


});


