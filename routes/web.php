<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Models\seipregistration;

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

// Use of this route in the middleware after controller
Route::get('/dashboard',[AdminController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/profile',[AdminController::class, 'profile'])->middleware(['auth'])->name('profile');
Route::get('/dashboard/students',[AdminController::class, 'students'])->middleware(['auth'])->name('students');
Route::get('/dashboard/students/{id}/view',[AdminController::class, 'studentinfo'])->middleware(['auth'])->name('studentinfo');
Route::get('/dashboard/students/{id}/delete',[AdminController::class, 'studentinfodelete'])->middleware(['auth'])->name('studentinfodelete');
Route::get('/dashboard/course-details',[AdminController::class, 'courseDetails'])->middleware(['auth'])->name('coursedetails');
Route::get('/dashboard/course-outline',[AdminController::class, 'courseOutline'])->middleware(['auth'])->name('courseoutline');
Route::get('/dashboard/error',[AdminController::class, 'error'])->middleware(['auth'])->name('error');

// Use of this route after auth in the route
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard/basic-table', function () {
//     $students = seipregistration::all();
//     return view('admin.basic-table', compact('students'));
// })->middleware(['auth'])->name('table');


Route::get('/dashboard/map', function () {
    return view('admin.map');
})->middleware(['auth'])->name('map');

Route::get('/dashboard/icon', function () {
    return view('admin.icon');
})->middleware(['auth'])->name('icon');


require __DIR__ . '/auth.php';
