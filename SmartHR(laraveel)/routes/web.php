<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
	if (Auth::check()) {
		return redirect()->route('dashboard');
	}
	return view('welcome'); 
	// redirect()->route('login');
});

Route::middleware(['auth'])->group(function() {
    require __DIR__ . '/web/dashboard.php';
});

Route::fallback(function () {
	return view(404);
});