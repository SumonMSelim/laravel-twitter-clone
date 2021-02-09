<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\VerificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'showHome'])->name('home');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'processRegistration']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin']);

Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    // PROFILE
    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'updateProfile']);

    // SETTINGS
    Route::get('/settings', [SettingsController::class, 'showSettingsForm'])->name('settings');
    Route::post('/settings/username', [SettingsController::class, 'updateUsername'])->name('settings.username');
    Route::post('/settings/email', [SettingsController::class, 'updateEmail'])->name('settings.email');
    Route::post('/settings/phone', [SettingsController::class, 'updatePhoneNumber'])->name('settings.phone');
});
