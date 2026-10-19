<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ActivityController;

// 1. Redirect จากหน้าแรกไปหน้ากิจกรรม
Route::get('/', function () {
    return redirect()->route('activities.index');
});

// 2. กำหนด Route พร้อมตั้งชื่อ (.name) ให้แต่ละหน้า
Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');
Route::get('/organizations', [OrganizationController::class, 'index'])->name('organizations.index');
Route::get('/communities', [CommunityController::class, 'index'])->name('communities.index');
Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
Route::get('/titles', [TitleController::class, 'index'])->name('titles.index');