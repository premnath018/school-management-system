<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
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


Route::get('/register', function () {
    return view('auth.signup');
});

Route::post('/login', [LoginController::class, 'login']);

Route::post('/register', [LoginController::class, 'register']);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');



Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('student.add-student');
    })->name('home');

    Route::post('/addstudent', [StudentController::class, 'add']);

    Route::get('/students', [StudentController::class, 'studentview']);

    Route::get('/exams', [ExamController::class, 'examview']);

    Route::get('/add-exam', function () {
        return view('exams.add-exam');
    })->name('exams.create');

    Route::post('/exams', [ExamController::class, 'store'])->name('exams.store');

    Route::get('/add-classes', function () {
        return view('Class.add-class');
    })->name('class.create');

    Route::get('/classes', [ClassesController::class, 'classview']);

    Route::post('/add-class', [ClassesController::class, 'store'])->name('class.store');

    Route::get('/StudentProfile', function () {
        return view('student/profile');
    });
});
