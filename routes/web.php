<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
/*
| Developed by Engr. Md. Mominul Islam Shizan
| Software Engineer
| AUST & JU
|
| This file manages all the web routes for the Medical Diagnostic & Hospital
| Management System — designed to be flexible and universal.
|
| Keep building great apps! 🚀
|
*/

//-------------Website route start-------------------------
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/doctors', [HomeController::class, 'doctors'])->name('doctors');
Route::get('/ambulance', [HomeController::class, 'ambulance'])->name('ambulance');
Route::get('/pharmacy', [HomeController::class, 'pharmacy'])->name('pharmacy');
Route::get('/management', [HomeController::class, 'management'])->name('management');
Route::get('/staff', [HomeController::class, 'staff'])->name('staff');
Route::get('/shareholders', [HomeController::class, 'shareholders'])->name('shareholders');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard');
    })->name('admin.dashboard');
    Route::get('/services', function () {})->name('admin.services');
    Route::get('/ambulance', function () {})->name('admin.ambulance');
    Route::get('/pharmacy', function () {})->name('admin.pharmacy');
    Route::get('/users', function () {})->name('admin.users');
    Route::get('/staff', function () {})->name('admin.staff');
    Route::get('/shareholders', function () {})->name('admin.shareholders');
    Route::get('/settings', function () {})->name('admin.settings');
    Route::post('/logout', function () {})->name('admin.logout');
    Route::get('/support', function () {})->name('admin.support');
});
Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard');
    })->name('dashboard');
});

