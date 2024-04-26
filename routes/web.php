<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('get-employees', [EmployeeController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('get-employees'); 

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('employees', 'livewire.pages.employee.employee-list')
    ->middleware(['auth'])
    ->name('employees');

Route::view('create-employee', 'livewire.pages.employee.create-employee')
    ->middleware(['auth'])
    ->name('create-employee');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
