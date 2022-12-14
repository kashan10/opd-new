<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\TypeaheadController;
use App\Http\Controllers\workplaneController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AppoinmentcheckController;


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
    return view('front');
    
});

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('nurse', NurseController::class);
    Route::resource('doctor', DoctorController::class);
    Route::resource('patient', PatientController::class);
    Route::resource('clinic', ClinicController::class);
    Route::resource('workplane', workplaneController::class);
    Route::get('appointment/{id}',[AppointmentController::class, 'create'])->name('appointment.create');
    Route::resource('appointment', AppointmentController::class,['except' => 'create']);
    Route::resource('appcheck', AppoinmentcheckController::class);
    Route::resource('record', RecordController::class);
});

//Auth routeeee
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/check', [FrontController::class, 'get_current_appointmentno']);

Route::get('/changeStatus', [UserController::class, 'changeStatus']);

Route::get('/nurselist', [TypeaheadController::class, 'nurselist']);

Route::get('/doctorlist', [TypeaheadController::class, 'doctorlist']);
Route::post('/no', [TypeaheadController::class, 'notif']);

Route::get('/generate-pdf',[PDFController::class,'generatePDF']);