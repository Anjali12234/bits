<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\GeneralQuestionController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\ProgrammeController;
use App\Http\Controllers\Admin\SemesterController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SystemSettingController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\TeamController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard');
Route::resource('systemSetting', SystemSettingController::class);
Route::resource('slider', SliderController::class);
Route::resource('about', AboutController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('generalQuestion', GeneralQuestionController::class);
Route::resource('contact', ContactController::class);
Route::resource('notice', NoticeController::class);
Route::resource('team', TeamController::class);
Route::put('notice/{notice}/updateStatus', [NoticeController::class, 'updateStatus'])->name('notice.updateStatus');

Route::prefix('serivces')->group(function () {
    Route::resource('service', ServiceController::class);
    
});
