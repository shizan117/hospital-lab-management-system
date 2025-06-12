<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\AdminController;
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


Route::middleware(['auth'])->group(function () {
Route::prefix('medicare')->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard');
    })->name('admin.dashboard');
    Route::get('/services', function () {})->name('admin.services');
    Route::get('/admin/doctors', [AdminController::class, 'doctors'])->name('admin.doctors');
    Route::get('/admin/doctors/create', [AdminController::class, 'createDoctor'])->name('admin.doctors.create');
    Route::post('/admin/doctors', [AdminController::class, 'storeDoctor'])->name('admin.doctors.store');
    Route::delete('/admin/doctors/{doctor}', [AdminController::class, 'destroy'])->name('admin.doctors.destroy');
    Route::get('/admin/doctors/{doctor}/edit', [AdminController::class, 'editDoctor'])->name('admin.doctors.edit');
    Route::put('/admin/doctors/{doctor}', [AdminController::class, 'updateDoctor'])->name('admin.doctors.update');

    Route::get('/doctors-categories', [AdminController::class, 'doctorsCategories'])->name('admin.doctors_categories');
    Route::post('/doctors-categories/save', [AdminController::class, 'saveDoctorCategory'])->name('admin.doctors_categories.save');
    Route::delete('/doctors-categories/{id}', [AdminController::class, 'destroyDoctorCategory'])->name('admin.doctors_categories.destroy');

    Route::get('/ambulance', function () {})->name('admin.ambulance');
    Route::get('/pharmacy', function () {})->name('admin.pharmacy');
    Route::get('/users', function () {})->name('admin.users');
    Route::get('/staff', function () {})->name('admin.staff');
    Route::get('/shareholders', function () {})->name('admin.shareholders');

    Route::get('/settings',[AdminController::class, 'adminSettings'])->name('admin.settings');
    //Route::get('/settings/role/{id}/permission', [AdminController::class, 'setRolePermission'])->name('admin.role.permission');
    Route::post('/settings/role/{id}/permission', [AdminController::class, 'storeRolePermission'])->name('admin.role.permission.store');
    Route::get('/settings/role-permission', [AdminController::class, 'setRolePermission'])->name('admin.role.permission.index');
   // Show user list
    Route::get('/settings/user-selection', [AdminController::class, 'selectUser'])->name('admin.user.index');

// Show permission form for one user
    Route::get('/settings/user/{id}/permissions', [AdminController::class, 'assignPermissionsToUser'])->name('admin.role.permission.for.user');
// Store updated permissions
    Route::post('/settings/user/{id}/permissions', [AdminController::class, 'savePermissionsForUser'])->name('admin.role.permission.save.for.user');

// Staff Management Routes (No New Controller Required)
    Route::get('/settings/staff-list', [AdminController::class, 'staffIndex'])->name('admin.staff.index');
    Route::get('/settings/staff/create', [AdminController::class, 'staffCreate'])->name('admin.staff.create');
    Route::post('/settings/staff/store', [AdminController::class, 'staffStore'])->name('admin.staff.store');
    Route::get('/settings/staff/{id}/edit', [AdminController::class, 'staffEdit'])->name('admin.staff.edit');
    Route::put('/settings/staff/{id}', [AdminController::class, 'staffUpdate'])->name('admin.staff.update');
    Route::delete('/settings/staff/{id}', [AdminController::class, 'staffDestroy'])->name('admin.staff.destroy');


    Route::post('/logout', function () {})->name('admin.logout');
    Route::get('/support', function () {})->name('admin.support');
});


});
Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard');
    })->name('dashboard');
});

