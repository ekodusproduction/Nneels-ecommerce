<?php

use App\Http\Controllers\Admin\Auth\AuthenticationController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'auth'], function(){

    Route::match(['GET', 'POST'], 'login', [AuthenticationController::class, 'login'])->name('admin.login');
});



Route::group(['middleware' => 'auth'], function(){
    Route::group(['prefix' => 'dashboard'], function(){
        Route::get('', [DashboardController::class, 'index'])->name('admin.dashboard');
    });

    Route::get('logout', function(){
        Session::flush();
        
        Auth::logout();

        return redirect()->route('admin.login');
    });
});
