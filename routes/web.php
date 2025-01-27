<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Student\StudentAuthController;
use App\Http\Controllers\Student\TeacherController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;


Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
    Route::get('aboutus', 'aboutUs')->name('aboutus');
    Route::get('services', 'service')->name('service');
    Route::get('service/{service:slug}','serviceDetail')->name('serviceDetail');
    Route::get('teams', 'team')->name('team');
    Route::get('team/{team:slug}','teamDetail')->name('teamDetail');
    Route::get('contact', 'contact')->name('contact');
    Route::get('certificate','certificatePage')->name('certificatePage');
    Route::post('certificateGenerate','certificateGenerate')->name('certificateGenerate');

});


Route::controller(StudentAuthController::class)->group(function () {
    Route::get('studentRegister', 'registerPage')->name('studentRegister');
    Route::get('studentLogin', 'loginPage')->name('studentLogin');
    Route::post('studentRegister', 'studentRegister')->name('studentRegister');
    Route::post('studentLogin', 'studentLogin')->name('studentLogin');
    
});

Route::post('upload', [UploadController::class, 'store'])->name('upload');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix('file')->as('file.')->controller(FileController::class)->group(function () {
    Route::delete('{file}/delete', 'destroy')->name('destroy');
});
require __DIR__ . '/auth.php';
