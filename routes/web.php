<?php

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\TeacherController;

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

    //Demo
    Route::get('/fees',[StudentController::class,'feeview']);

    // Student
    Route::get('/', function () {return view('student.add-student');})->name('home');
    
    Route::get('/addstudent', function () {return view('student.add-student');})->name('student.create');

    Route::get('/students', [StudentController::class, 'studentview'])->name('studentlist');

    Route::get('/studentprofile/{id}', [StudentController::class,'editstudent']);

    Route::post('/addstudent', [StudentController::class, 'add'])->name('student.store');
 
    Route::post('/updatestudent/{id}', [StudentController::class,'updatestudent']);

    // Teacher
    Route::get('/addteacher',function(){return view('teachers.add-teacher');})->name('teacher.create');

    Route::get('/teachers',[TeacherController::class, 'teacherview'])->name('teacherlist');

    Route::get('/teacherprofile/{id}',[TeacherController::class,'editteacher'])->name('teacher.profile');
    
    Route::post('/addteacher', [TeacherController::class, 'add'])->name('teacher.store');

    Route::post('/updateteacher/{id}',[TeacherController::class,'updateteacher']);

    // Exams
    Route::get('/addexam', [ExamController::class, 'view'])->name('exams.create');

    Route::get('/exams', [ExamController::class, 'examview'])->name('exam.list');

    Route::get('/editexam/{id}', [ExamController::class,'editexam']);

    Route::post('/addexam', [ExamController::class, 'store'])->name('exam.store');

    Route::post('/updateexam/{id}', [ExamController::class,'updateexam']);
    
    //classes
    Route::get('/addclasses', function () {return view('Class.add-class');})->name('class.create');

    Route::get('/classes', [ClassesController::class, 'classview'])->name('classlist');

    Route::get('/editclass/{id}', [ClassesController::class,'editclass']);

    Route::get('/classstudents/{id}', [ClassesController::class,'classstudents']);

    Route::post('/addclass', [ClassesController::class, 'store'])->name('class.store');
 
    Route::post('/updateclass/{id}', [ClassesController::class,'updateclass']);
    
    Route::post('studentclassadd/{id_student}', [ClassesController::class,'studentclassadd']);

    Route::post('teacherclassadd/{id_teacher}', [ClassesController::class,'teacherclassadd']);
});
