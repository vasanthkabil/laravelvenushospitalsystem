<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\WardAdmissionController;
use App\Http\Controllers\WardController;
use App\Models\Patient;

Route::get('/', function () {
    return view('welcome');
 });

Route::resources(([
    'doctors'=>DoctorController::class,
    'patients'=>PatientController::class,
    'wardadmissions'=>WardAdmissionController::class,
    'wards'=>WardController::class,

]));
