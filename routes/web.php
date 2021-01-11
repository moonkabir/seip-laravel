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
// User profile 
Route::get('/dashboard/profile',[AdminController::class, 'profile'])->middleware(['auth'])->name('profile');
Route::post('/dashboard/profile/update',[AdminController::class, 'profileUpdate'])->middleware(['auth'])->name('profileUpdate');

// Users
Route::get('/dashboard/users',[AdminController::class, 'getUsers'])->middleware(['auth'])->name('users');
Route::get('/dashboard/user/{id}/delete',[AdminController::class, 'userDelete'])->middleware(['auth'])->name('userDelete');
Route::get('/dashboard/users/add-user',[AdminController::class, 'addUser'])->middleware(['auth'])->name('addusers');
Route::post('/dashboard/users/add-user/users-data-save',[AdminController::class, 'saveUser'])->middleware(['auth'])->name('saveusers');


// students
Route::get('/dashboard/students',[AdminController::class, 'students'])->middleware(['auth'])->name('students');
Route::get('/dashboard/students/{id}/view',[AdminController::class, 'studentinfo'])->middleware(['auth'])->name('studentinfo');
Route::get('/dashboard/students/{id}/delete',[AdminController::class, 'studentinfodelete'])->middleware(['auth'])->name('studentinfodelete');
Route::get('/dashboard/students/search',[AdminController::class, 'search'])->middleware(['auth'])->name('search');

Route::get('/student-email-check/{email}',[UserController::class, 'studentEmailCheck'])->name('studentemailcheck');
Route::get('/student-mobile-check/{mobile}',[UserController::class, 'studentMobileCheck'])->name('studentmobilecheck');
Route::get('/student-nid-check/{nid}',[UserController::class, 'studentNidCheck'])->name('studentnidcheck');

// courses
Route::get('/dashboard/courses',[AdminController::class, 'courses'])->middleware(['auth'])->name('courses');
Route::get('/dashboard/courses/add-course',[AdminController::class, 'addcourse'])->middleware(['auth'])->name('addcourse');
Route::post('/dashboard/courses/add-course/add-course-save',[AdminController::class, 'addcoursesave'])->middleware(['auth'])->name('addcoursesave');
Route::get('/dashboard/courses/{id}/delete',[AdminController::class, 'addcoursedelete'])->middleware(['auth'])->name('addcoursedelete');
Route::get('/dashboard/courses/{id}/published',[AdminController::class, 'addcoursepublished'])->middleware(['auth'])->name('addcoursepublished');
Route::get('/dashboard/courses/{id}/unpublished',[AdminController::class, 'addcourseunpublished'])->middleware(['auth'])->name('addcourseunpublished');

// course details
Route::get('/dashboard/course-details',[AdminController::class, 'courseDetails'])->middleware(['auth'])->name('coursedetails');
Route::get('/dashboard/course-details/{id}/delete',[AdminController::class, 'courseDetailsDelete'])->middleware(['auth'])->name('courseDetailsDelete');
Route::get('/dashboard/course-details/course-details-add',[AdminController::class, 'courseDetailsAdd'])->middleware(['auth'])->name('courseDetailsAdd');
Route::post('/dashboard/course-details/course-details-add/course-details-data-save',[AdminController::class, 'courseDetailsDataStore'])->middleware(['auth'])->name('courseDetailsDataStore');

// course Outline
Route::get('/dashboard/course-outline',[AdminController::class, 'courseOutline'])->middleware(['auth'])->name('courseoutline');
Route::get('/dashboard/course-outline/course-outline-add',[AdminController::class, 'courseOutlineadd'])->middleware(['auth'])->name('courseOutlineadd');
Route::post('/dashboard/course-outline/course-outline-add/course-outline-data-save',[AdminController::class, 'courseOutlineDataStore'])->middleware(['auth'])->name('courseOutlineDataStore');
Route::get('/dashboard/course-outline/{id}/delete',[AdminController::class, 'courseOutlineDelete'])->middleware(['auth'])->name('courseOutlineDelete');


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
