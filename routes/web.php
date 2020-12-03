<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::get('/', [UserController::class, 'Home']);
Route::get('/course-details', [UserController::class, 'CourseDetails']);
Route::get('/course-outline', [UserController::class, 'CourseOutline']);
Route::get('/admission-process', [UserController::class, 'AdmissionProcess']);
Route::get('/registration', [UserController::class, 'RegistrationForm']);
Route::post('/user-add', [UserController::class, 'store']);
