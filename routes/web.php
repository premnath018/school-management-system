<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\circularController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\EarlyCallController;
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

    //Circular
    Route::get('/addcircular', function () {return view('admin.add_circular');});

    Route::get('/circulars', [circularController::class, 'circularview'])->name('circularlist');

    Route::post('/addcircular', [circularController::class, 'circularadd']);

    // Student
    Route::get('/', [StudentController::class, 'studentview'])->name('home');

    Route::get('/addstudent', function () {return view('student.add-student');});

    Route::get('/students', [StudentController::class, 'studentview'])->name('studentlist');

    Route::get('/studentprofile/{id}', [StudentController::class, 'editstudent']);

    Route::get('/earlycallentry', [EarlyCallController::class, 'view']);

    Route::post('/studentsearch', [StudentController::class, 'studentsearch']);

    Route::post('/earlycallentry', [EarlyCallController::class, 'add']);

    Route::post('/addstudent', [StudentController::class, 'add']);

    Route::post('/updatestudent/{id}', [StudentController::class, 'updatestudent']);

    // Teacher
    Route::get('/addteacher', function () {return view('teachers.add-teacher');});

    Route::get('/teachers', [TeacherController::class, 'teacherview'])->name('teacherlist');

    Route::get('/teacherprofile/{id}', [TeacherController::class, 'editteacher']);
    
    Route::post('/teachersearch', [TeacherController::class, 'teachersearch']);

    Route::post('/addteacher', [TeacherController::class, 'add']);

    Route::post('/updateteacher/{id}', [TeacherController::class, 'updateteacher']);

    //Leave
    Route::get('/leaveapply/{teacher_id}', [TeacherController::class, 'leaveapply']);

    Route::get('/leaveapproval', [TeacherController::class, 'leaveview'])->name('leavelist');

    Route::post('/leavesearch', [TeacherController::class, 'leavesearch']);

    Route::post('addleave', [TeacherController::class, 'leaveadd'])->name('leave.store');

    Route::post('approve/{id}', [TeacherController::class, 'approve'])->name('update');

    Route::post('reject/{id}', [TeacherController::class, 'reject'])->name('reject');

    // Exams
    Route::get('/addexam', [ExamController::class, 'view']);

    Route::get('/exams', [ExamController::class, 'examview'])->name('examlist');

    Route::get('/editexam/{id}', [ExamController::class, 'editexam']);

    Route::get('/marklist/{id}', [ExamController::class, 'viewMarks']);

    Route::get('/updateMarks/{id}', [ExamController::class, 'updateMarkView']);

    Route::post('/addexam', [ExamController::class, 'add'])->name('exam.store');
    
    Route::post('/examsearch', [ExamController::class, 'examsearch']);

    Route::post('/updateexam/{id}', [ExamController::class, 'updateexam']);

    Route::post('/updateMarks/{id}',[ExamController::class,'updateMark']);
    
    //classes
    Route::get('/addclasses', function () {return view('Class.add-class');});

    Route::get('/classes', [ClassesController::class, 'classview'])->name('classlist');

    Route::get('/editclass/{id}', [ClassesController::class, 'editclass']);

    Route::get('/classstudents/{id}', [ClassesController::class, 'classstudents']);

    Route::post('/addclass', [ClassesController::class, 'store']);
    
    Route::post('/classsearch', [ClassesController::class, 'classsearch']);

    Route::post('/updateclass/{id}', [ClassesController::class, 'updateclass']);

    Route::post('studentclassadd/{id_student}', [ClassesController::class, 'studentclassadd']);

    Route::post('teacherclassadd/{id_teacher}', [ClassesController::class, 'teacherclassadd']);

    //Fees
    Route::get('/fees', [StudentController::class, 'feeview']);

    Route::post('updatefee/{id}', [StudentController::class, 'updatefee']);
    
    Route::post('extra_fees/{id}', [StudentController::class, 'extra_fees']);

    //Attendance 
    Route::get('/selectclass', [AttendanceController::class, 'selectclass'])->name('selectclass');

    Route::post('/classattendance', [AttendanceController::class, 'classattendance']);

    Route::post('/viewattendance', [AttendanceController::class, 'viewattendance']);
    
    Route::post('/markattendance', [AttendanceController::class, 'markattendance']);

    //Holiday
    Route::get('/addholiday', function () { return view('admin.add-holiday');});

    Route::get('/holidays', [AttendanceController::class, 'viewholiday'])->name('holidaylist');

    Route::post('/addholiday', [AttendanceController::class, 'addholiday']);

    // Analysis
    Route::get('/analysis',function(){return view('analysis.analysis');});

    // Grades
    Route::get('/Gsheets',function(){return view('Gsheets.inp');});

});
