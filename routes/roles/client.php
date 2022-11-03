<?php

/*
|--------------------------------------------------------------------------
| url для роли CLIENT
|--------------------------------------------------------------------------
|
|
*/



//Client
Route::group(['middleware' => ['auth', 'verified', 'role:client']], function(){



    Route::group(['namespace' => 'Client'], function(){
        Route::get('dashboard', [App\Http\Controllers\Client\DashboardController::class, 'dashboard'])->name('client.dashboard');
    });


});


