<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\studentContentController;
use App\Http\Controllers\studentDashboardContrller;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// User Routes
Route::get('/', [IndexController::class, 'index']);
Route::get('/studentcontent',[studentContentController::class,'studentcontent']);
Route::get('/payments',[paymentController::class,'payments']);
Route::match(['GET', 'POST'], '/studentDashboard', [studentDashboardContrller::class, 'studentDashboard']);

Route::get('/AdminDashboard', [adminDashboardController::class, 'AdminDashboard'])->middleware('auth')->name('admin-dashboard');


// add Courses

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('create-course', [CourseController::class, 'create'])->name('courses.create');
Route::post('/save-course', [CourseController::class, 'store'])->name('courses.store');
Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');
Route::put('/courses/{id}', [CourseController::class, 'update'])->name('courses.update');
Route::get('/course-delete/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');


Route::get('/test', [CourseController::class, 'test']);


//Auth Routes
Route::get('logout', [AuthLoginController::class, 'logout'])->name('logout');
Route::get('/login', [loginController::class, 'create'])->name('login');
Route::post('/login-user', [loginController::class, 'login'])->name('login-user');

Route::get('/signup', [signupController::class, 'create']);
Route::post('signup-user', [signupController::class, 'signupUser'])->name('user.signup');

// // Admin Routes
// Route::get('/signup', [adminDashboardController::class, 'signup']);
// Route::get('/login', [adminDashboardController::class, 'login']);
// Route::get('/admin', [adminDashboardController::class, 'admin']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Course Section
Route::controller(SectionController::class)->middleware('auth')->prefix('course')->group( function () {
    Route::get('/{id}/section', 'index')->name('course.index');
} );

//Course Lesson
Route::controller(LessonController::class)->middleware('auth')->prefix('course/section')->group( function () {
    Route::get('/{id}/lesson', 'index')->name('lessons.index');
} );
