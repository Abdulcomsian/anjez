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
use App\Http\Controllers\CourseDetailController;
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
Route::get('/AdminDashboard', [adminDashboardController::class, 'AdminDashboard'])->middleware(['auth', 'isAdmin'])->name('admindashboard.admin-index');


// Add Courses Routes

Route::get('/courses', [CourseController::class, 'index'])->middleware(['auth', 'isAdmin'])->name('courses.index');
Route::get('create-course', [CourseController::class, 'create'])->middleware(['auth', 'isAdmin'])->name('courses.create');
Route::post('/save-course', [CourseController::class, 'store'])->middleware(['auth', 'isAdmin'])->name('courses.store');
Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->middleware(['auth', 'isAdmin'])->name('courses.edit');
Route::post('/courses/{id}', [CourseController::class, 'update'])->middleware(['auth', 'isAdmin'])->name('courses.update');
Route::get('/course-delete/{id}', [CourseController::class, 'destroy'])->middleware(['auth', 'isAdmin'])->name('courses.destroy');




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
Route::controller(SectionController::class)->middleware(['auth', 'isAdmin'])->prefix('course')->group( function ()
{
    Route::get('section/{id}', 'index')->name('section.index');
    Route::post('store', 'store')->name('section.store');
    Route::get('edit/section/{id}', 'edit')->name('section.edit');
    Route::post('update/section', 'update')->name('section.update');
    Route::get('delete/section/{id}', 'delete')->name('section.delete');

} );


// lesson Route
Route::middleware(['auth', 'isAdmin'])->prefix('section')->group(function () {
    Route::get('/{id}/lesson', [LessonController::class, 'index'])->name('lessons.index');
    Route::post('/{id}/lesson', [LessonController::class, 'store'])->name('lessons.store');
    Route::get('/{id}/lesson/delete', [LessonController::class, 'delete'])->name('lesson.delete');
    Route::get('/lesson/edit/{id}', [LessonController::class, 'edit'])->name('lesson.edit');
    Route::get('/lesson/quiz/{id}', [LessonController::class, 'getLessonQuizes'])->name('lesson.quiz');
});
Route::get('/get-lesson/{id}', [LessonController::class, 'lesson'])->name('specific.lesson');

// Quiz Route
Route::get('lesson/quiz/{id}', [QuizController::class, 'index'])->middleware(['auth', 'isAdmin'])->name('quiz.index');
Route::post('store', [QuizController::class, 'store'])->middleware(['auth', 'isAdmin'])->name('quiz.store');
Route::get('quiz-delete/{id}', [QuizController::class, 'delete'])->middleware(['auth', 'isAdmin'])->name('quiz.delete');
Route::get('quiz/{id}', [QuizController::class, 'edit'])->middleware(['auth', 'isAdmin'])->name('quiz.name');

// User Route
Route::get('/users', [userController::class, 'index'])->middleware(['auth', 'isAdmin'])->name('users.index');
// Route::get('create-user', [userController::class, 'create'])->name('users.create');


// Client Side Routes

Route::get('/student-content',[studentContentController::class,'student_content'])->name('studentcontent.student-content');

Route::get('/student-dashboard', [studentDashboardContrller::class, 'student_dashboard'])->name('studentdashboard.student-dashboard');

Route::get('/payments',[paymentController::class,'payments'])->name('payments');


//User
Route::post('store-user', [userController::class, 'store'])->name('user.store');

Route::controller(CourseDetailController::class)->middleware('auth')->group( function () {
    Route::get('course-details/{id}', 'courseDetails')->name('course.details');
} );



//new route starts here


Route::get("index" , function(){
    return view('test.index');
});

Route::get("login1" , function(){
    return view('test.login');
});

Route::get("admin-dashboard" , function(){
    return view('test.admin-dashboard');
});

Route::get("payment" , function(){
    return view('test.payment');
});

Route::get("privacy-policy" , function(){
    return view('test.privacy-policy');
});

Route::get("signup" , function(){
    return view('test.signup');
});

Route::get("student-content2" , function(){
    return view('test.student-content');
});

Route::get("student-dashboard" , function(){
    return view('test.student-dashboard');
});

Route::get("term-and-condition" , function(){
    return view('test.terms-conditions');
});