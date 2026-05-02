<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\EmployeeController;
use App\Http\Controllers\Web\DashboardController;

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});

Route::controller(EmployeeController::class)->group(function () {
    Route::get('/employees', 'index')->name('employees.index');
    Route::get('/employees/create', 'create')->name('employees.create');
    Route::post('/employees', 'store')->name('employees.store');
});