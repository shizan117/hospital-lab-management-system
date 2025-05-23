<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
/*
| Developed by Md. Mominul Islam Shizan
| Software Engineer
| AUST & JU
|
| This file manages all the web routes for the Medical Diagnostic & Hospital
| Management System — designed to be flexible and universal.
|
| Keep building great apps! 🚀
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');
