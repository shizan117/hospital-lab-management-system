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
Route::get('/ambulance', [HomeController::class, 'working'])->name('ambulance');
Route::get('/pharmacy', [HomeController::class, 'working'])->name('pharmacy');
Route::get('/management', [HomeController::class, 'management'])->name('management');
Route::get('/staff', [HomeController::class, 'staff'])->name('staff');
Route::get('/shareholders', [HomeController::class, 'shareholders'])->name('shareholders');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
