<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SignupController;
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
    return view('welcome');
})->name('home');


// Route::get('/patient/login', function () {
//     return view('patient');
// });

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'storeData'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/signup', [SignupController::class, 'signup'])->name('signup');
Route::post('/signup', [SignupController::class, 'storeData'])->name('signup_storeData');



Route::get('/dashboard',  [DashboardController::class, 'renderDashboard'])->name('dashboard');
Route::get('/book_appointment',  [PatientController::class, 'bookAppointment'])->name('book_appointment');
Route::post('/book_appointment',  [AppointmentController::class, 'newAppointment'])->name('newAppointment');
Route::post('/get_doctor',  [PatientController::class, 'getDoctors'])->name('get_doctor');
Route::get('/patient_appointment_history', [PatientController::class, 'appointmentHistory'])->name('patient_appointment_history');
Route::get('/patient_cancel_appointment/{appointmentId}/', [PatientController::class, 'cancelAppointment'])->name('patient_cancel_appointment');



Route::get('/doctor_appointment_history', [DoctorController::class, 'appointmentHistory'])->name('doctor_appointment_history');
Route::get('/doctor_cancel_appointment/{appointmentId}/', [DoctorController::class, 'cancelAppointment'])->name('doctor_cancel_appointment');
Route::get('/add_patient', function () {
    return view('doctor.addPatient');
})->name('add_patient');
Route::post('/add_patient', [DoctorController::class, 'addPatient'])->name('add_patient');
Route::get('/manage_patients', [DoctorController::class, 'managePatients'])->name('manage_patients');
Route::post('/edit_patient/{patientId}/', [DoctorController::class, 'editPatient'])->name('edit_patient');
Route::get('/edit_patient/{patientId}/', [DoctorController::class, 'editPatient'])->name('edit_patient');
Route::get('/view_patient/{patientId}/', [DoctorController::class, 'viewPatient'])->name('view_patient');
Route::post('/add_medical_history/{patientId}/', [DoctorController::class, 'addMedicalHistory'])->name('add_medical_history');





Route::get('/doctor_specializations', [AdminController::class, 'doctorSpecializations'])->name('doctor_specializations');
Route::post('/add_new_specialization', [AdminController::class, 'addNewSpecialization'])->name('add_new_specialization');
Route::get('/delete_specialization/{specializationId}', [AdminController::class, 'deleteSpecialization'])->name('delete_specialization');
Route::get('/update_specialization/{specializationId}', [AdminController::class, 'updateSpecialization'])->name('update_specialization');
Route::post('/update_specialization/{specializationId}', [AdminController::class, 'updateSpecialization'])->name('update_specialization');
Route::get('/add_doctor/', [AdminController::class, 'addDoctor'])->name('add_doctor');
Route::post('/add_doctor/', [AdminController::class, 'addDoctor'])->name('add_doctor');
Route::get('/manage_doctors/', [AdminController::class, 'manageDoctors'])->name('manage_doctors');

Route::get('/delete_doctor/{doctorId}', [AdminController::class, 'deleteDoctor'])->name('delete_doctor');
Route::get('/edit_doctor/{doctorId}', [AdminController::class, 'editDoctor'])->name('edit_doctor');
Route::post('/edit_doctor/{doctorId}', [AdminController::class, 'editDoctor'])->name('edit_doctor');
Route::get('/manage_users', [AdminController::class, 'manageUsers'])->name('manage_users');
Route::get('/delete_user/{user_id}', [AdminController::class, 'deleteUser'])->name('delete_user');
Route::get('/admin_manage_patients', [AdminController::class, 'managePatients'])->name('admin_manage_patients');
Route::get('/admin_view_patient/{user_id}', [AdminController::class, 'viewPatient'])->name('admin_view_patient');
Route::get('/admin_appointment_history/', [AdminController::class, 'appointmentHistory'])->name('admin_appointment_history');