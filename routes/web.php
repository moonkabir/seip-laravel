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

// Route::get('/', function () {
//     return view('fhome');
// });

Route::get('/', [UserController::class, 'Home']);
Route::get('/course-details', [UserController::class, 'CourseDetails']);
Route::get('/course-outline', [UserController::class, 'CourseOutline']);
Route::get('/admission-process', [UserController::class, 'AdmissionProcess']);
Route::get('/seip-registration', [UserController::class, 'RegistrationForm']);
Route::post('/user-add', [UserController::class, 'store']);
Route::get('/sub-districts', [UserController::class, 'subDistricts']);
Route::get('/districts', [UserController::class, 'districts']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
