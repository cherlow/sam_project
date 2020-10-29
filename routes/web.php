<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect("/home");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/doctors/create', [App\Http\Controllers\DoctorController::class, 'create']);
Route::post('/doctors/create', [App\Http\Controllers\DoctorController::class, 'store']);
Route::get('/admin/doctors', [App\Http\Controllers\DoctorController::class, 'index']);
Route::get('/user/doctors', [App\Http\Controllers\DoctorController::class, 'userdoctors']);
Route::get('/user/appointments', [App\Http\Controllers\AppointmentController::class, 'create']);
Route::post('/appointment/create', [App\Http\Controllers\AppointmentController::class, 'store']);
Route::get('/user/appointments/{user}', [App\Http\Controllers\AppointmentController::class, 'userappointments']);
Route::get('/emergencycreate', [App\Http\Controllers\EmergencyController::class, 'create']);
Route::post('/emergency/create', [App\Http\Controllers\EmergencyController::class, 'store']);
Route::get('/user/emergency', [App\Http\Controllers\EmergencyController::class, 'index']);
Route::get('/admin/responders', [App\Http\Controllers\ResponderController::class, 'create']);
Route::post('/responders/create', [App\Http\Controllers\ResponderController::class, 'store']);
Route::get('/responders/index', [App\Http\Controllers\ResponderController::class, 'index']);

Route::get('/admin/emergency', [App\Http\Controllers\EmergencyController::class, 'adminemergency']);
Route::get('/admin/emergency/{emergency}', [App\Http\Controllers\EmergencyController::class, 'adminemergencyshow']);
Route::post('/addresponder/{emergency}', [App\Http\Controllers\EmergencyController::class, 'addresponder']);
Route::get('/finishemergency/{emergency}', [App\Http\Controllers\EmergencyController::class, 'finishemergency']);
Route::get('/finishemergency/{emergency}', [App\Http\Controllers\EmergencyController::class, 'finishemergency']);
Route::get('/doctor/messages', [App\Http\Controllers\ConversationController::class, 'index']);
Route::get('/doctor/patients', [App\Http\Controllers\PatientController::class, 'index']);



Route::get('/doctor/messages/{user}', [App\Http\Controllers\ConversationController::class, 'messaging']);
Route::get('/dmessage/post/{user}', [App\Http\Controllers\ConversationController::class, 'dmessage']);
Route::get('/doctor/appointments', [App\Http\Controllers\AppointmentController::class, 'dappointment']);
Route::get('/doctor/appointments/{appointment}', [App\Http\Controllers\AppointmentController::class, 'dappointmentdetails']);
Route::post('/addnotes/{appointment}', [App\Http\Controllers\AppointmentController::class, 'addnotes']);



