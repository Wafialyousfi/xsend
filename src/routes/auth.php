<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\GoogleAuthenticatedController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest','maintenance'])->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register')->middleware('registration.allow');
    Route::post('register', [RegisteredUserController::class, 'store'])->name('register.store')->middleware('registration.allow');

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.store');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::get('password/code/verify', [PasswordResetLinkController::class, 'passwordResetCodeVerify'])->name('password.verify.code');
    Route::post('password/code/verify', [PasswordResetLinkController::class, 'emailVerificationCode'])->name('email.password.verify.code');
    Route::get('password/resend/code', [PasswordResetLinkController::class, 'resendCode'])->name('password.resend.code');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.update');
});

Route::middleware('auth','maintenance')->group(function () {
    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
Route::get('auth/google', [GoogleAuthenticatedController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleAuthenticatedController::class, 'handleGoogleCallback']);
