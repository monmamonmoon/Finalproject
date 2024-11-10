<?php 

use App\Http\Controllers\UserController; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Route;  // Add the Route namespace

Route::get('/', function () { 
    return redirect(route('login')); 
}); 

Auth::routes(); 

// Home route 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 

// User Management Routes 
Route::middleware(['auth'])->group(function () { 
    Route::resource('users', UserController::class); 
});

//dashboard
Route::get('/dashboard', [App\Http\Controllers\Admin\Dashboard\DashboardController::class, 'index'])->name('dashboard.index');

//user
Route::get('/client', [App\Http\Controllers\client\Dashboard\ClientController::class, 'index'])->name('cliet.index');
