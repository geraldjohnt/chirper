<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::view('/', 'welcome');

Route::get('get-employees', [EmployeeController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('get-employees'); 

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
