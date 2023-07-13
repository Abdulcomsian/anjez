<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\studentContentController;
use App\Http\Controllers\studentDashboardContrller;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\userController;
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

// Admin Route
Route::get('/AdminDashboard', [adminDashboardController::class, 'AdminDashboard'])->middleware('auth')->name('admindashboard.admin-index');


// Add Courses Routes

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('create-course', [CourseController::class, 'create'])->name('courses.create');
Route::post('/save-course', [CourseController::class, 'store'])->name('courses.store');
Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');
Route::put('/courses/{id}', [CourseController::class, 'update'])->name('courses.update');
Route::get('/course-delete/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');



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
    Route::get('section/{id}', 'index')->name('section.index');
    Route::post('store', 'store')->name('section.store');
    Route::get('edit/section/{id}', 'edit')->name('section.edit');
    Route::get('delete/section/{id}', 'delete')->name('section.delete');
    Route::post('update/section', 'update')->name('section.update');

} );

// lesson Route
Route::middleware('auth')->prefix('section')->group(function () {
    Route::get('/{id}/lesson', [LessonController::class, 'index'])->name('lessons.index');
    Route::post('/{id}/lesson', [LessonController::class, 'store'])->name('lessons.store');
});

// Quiz Route
Route::get('/guiz', [QuizController::class, 'index'])->name('quiz.index');


// User Route
Route::get('/users', [userController::class, 'index'])->name('users.index');
// Route::get('create-user', [userController::class, 'create'])->name('users.create');


// Client Side Routes

Route::get('/studentcontent',[studentContentController::class,'studentcontent']);

Route::get('/payments',[paymentController::class,'payments']);

Route::match(['GET', 'POST'], '/studentDashboard', [studentDashboardContrller::class, 'studentDashboard']);
