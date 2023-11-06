<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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


Route::get('/register', function () {return view('auth.signup');});

Route::post('/login', [LoginController::class, 'login']);

Route::post('/register', [LoginController::class, 'register']);

Route::get('/login', function () {return view('auth.login');})->name('login');


Route::middleware('auth')->group(function () {
    Route::get('/', function () { return view('student.add-student');})->name('home');
    Route::post('/addstudent', [StudentController::class, 'add']);
});
