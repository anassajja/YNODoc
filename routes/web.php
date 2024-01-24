<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PsychotherapyController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/users', [AdminController::class, 'showUsers'])->name('admin.users');
    Route::post('/admin/users/confirm/{id}', [AdminController::class, 'confirmAccount']);
    Route::post('/admin/users/update/{id}', [AdminController::class, 'updateUser']);
    Route::post('/admin/users/activate/{id}', [AdminController::class, 'activateAccount']);

    Route::get('/admin/surveys', [AdminController::class, 'showSurveys'])->name('admin.surveys');
    // Add routes for recovering and archiving survey responses

    Route::get('/admin/insert-form', [AdminController::class, 'showInsertForm'])->name('admin.insert-form');
    Route::post('/admin/insert-doctors', [AdminController::class, 'insertDoctors'])->name('admin.insert-doctors');
    Route::post('/admin/insert-therapists', [AdminController::class, 'insertTherapists'])->name('admin.insert-therapists');
});


Route::get('/surveys', [SurveyController::class, 'showSurveyPage'])->name('surveys.index');
Route::post('/surveys/submit', [SurveyController::class, 'submitSurvey'])->name('surveys.submit');

Route::get('/psychotherapies/therapists', [PsychotherapyController::class, 'showTherapists'])->name('psychotherapies.therapists');
Route::post('/psychotherapies/subscribe', [PsychotherapyController::class, 'subscribe'])->name('psychotherapies.subscribe');
Route::get('/psychotherapies/payment', [PsychotherapyController::class, 'showPaymentPage'])->name('psychotherapies.payment');

Route::get('/appointments/create', [AppointmentController::class, 'showAppointmentForm'])->name('appointments.create');
Route::post('/appointments/create', [AppointmentController::class, 'scheduleAppointment']);
Route::get('/doctors', [AppointmentController::class, 'showDoctors'])->name('doctors.index');
Route::get('/doctors/{id}/profile', [AppointmentController::class, 'showDoctorProfile'])->name('doctors.profile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome2');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
