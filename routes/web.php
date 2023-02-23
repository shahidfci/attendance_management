<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\OrgController;
use App\Http\Controllers\ClassRoutineController;
use App\Http\Controllers\SettingController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('students', StudentController::class);
    Route::resource('teachers', TeacherController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('organization', OrgController::class);
    Route::resource('class-routines', ClassRoutineController::class);
    
    Route::resource('settings', SettingController::class);
    Route::post('/settings/day/add', [SettingController::class, 'dayAdd']);
    Route::get('/settings/day/{id}/edit', [SettingController::class, 'dayEdit']);
    Route::post('/settings/day/update', [SettingController::class, 'dayUpdate']);
    Route::post('/settings/day/{id}/delete', [SettingController::class, 'dayDelete']);
    Route::post('/settings/day/{id}/enable', [SettingController::class, 'dayEnable']);
    Route::post('/settings/day/{id}/disable', [SettingController::class, 'dayDisable']);

    Route::post('/settings/timeslot/add', [SettingController::class, 'timeslotAdd']);
    Route::get('/settings/timeslot/{id}/edit', [SettingController::class, 'timeslotEdit']);
    Route::post('/settings/timeslot/update', [SettingController::class, 'timeslotUpdate']);
    Route::post('/settings/timeslot/{id}/delete', [SettingController::class, 'timeslotDelete']);
    Route::post('/settings/timeslot/{id}/enable', [SettingController::class, 'timeslotEnable']);
    Route::post('/settings/timeslot/{id}/disable', [SettingController::class, 'timeslotDisable']);

    Route::post('/settings/room/add', [SettingController::class, 'roomAdd']);
    Route::get('/settings/room/{id}/edit', [SettingController::class, 'roomEdit']);
    Route::post('/settings/room/update', [SettingController::class, 'roomUpdate']);
    Route::post('/settings/room/{id}/delete', [SettingController::class, 'roomDelete']);
    Route::post('/settings/room/{id}/enable', [SettingController::class, 'roomEnable']);
    Route::post('/settings/room/{id}/disable', [SettingController::class, 'roomDisable']);

    Route::post('/settings/semester/add', [SettingController::class, 'semesterAdd']);
    Route::get('/settings/semester/{id}/edit', [SettingController::class, 'semesterEdit']);
    Route::post('/settings/semester/update', [SettingController::class, 'semesterUpdate']);
    Route::post('/settings/semester/{id}/delete', [SettingController::class, 'semesterDelete']);
    Route::post('/settings/semester/{id}/enable', [SettingController::class, 'semesterEnable']);
    Route::post('/settings/semester/{id}/disable', [SettingController::class, 'semesterDisable']);

    Route::post('/settings/session/add', [SettingController::class, 'sessionAdd']);
    Route::get('/settings/session/{id}/edit', [SettingController::class, 'sessionEdit']);
    Route::post('/settings/session/update', [SettingController::class, 'sessionUpdate']);
    Route::post('/settings/session/{id}/delete', [SettingController::class, 'sessionDelete']);
    Route::post('/settings/session/{id}/enable', [SettingController::class, 'sessionEnable']);
    Route::post('/settings/session/{id}/disable', [SettingController::class, 'sessionDisable']);

    Route::post('/settings/year/add', [SettingController::class, 'yearAdd']);
    Route::get('/settings/year/{id}/edit', [SettingController::class, 'yearEdit']);
    Route::post('/settings/year/update', [SettingController::class, 'yearUpdate']);
    Route::post('/settings/year/{id}/delete', [SettingController::class, 'yearDelete']);
    Route::post('/settings/year/{id}/enable', [SettingController::class, 'yearEnable']);
    Route::post('/settings/year/{id}/disable', [SettingController::class, 'yearDisable']);

    Route::post('/settings/designation/add', [SettingController::class, 'designationAdd']);
    Route::get('/settings/designation/{id}/edit', [SettingController::class, 'designationEdit']);
    Route::post('/settings/designation/update', [SettingController::class, 'designationUpdate']);
    Route::post('/settings/designation/{id}/delete', [SettingController::class, 'designationDelete']);
    Route::post('/settings/designation/{id}/enable', [SettingController::class, 'designationEnable']);
    Route::post('/settings/designation/{id}/disable', [SettingController::class, 'designationDisable']);

    Route::post('/settings/department/add', [SettingController::class, 'departmentAdd']);
    Route::get('/settings/department/{id}/edit', [SettingController::class, 'departmentEdit']);
    Route::post('/settings/department/update', [SettingController::class, 'departmentUpdate']);
    Route::post('/settings/department/{id}/delete', [SettingController::class, 'departmentDelete']);
    Route::post('/settings/department/{id}/enable', [SettingController::class, 'departmentEnable']);
    Route::post('/settings/department/{id}/disable', [SettingController::class, 'departmentDisable']);
});