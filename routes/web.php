<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SmsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //route for sms dashboard
    Route::get('sms-dashboard', [SmsController::class, 'index'])->name('sms-dashboard');
});






require __DIR__ . '/auth.php';
