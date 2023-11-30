<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Classes;
use App\Models\Holiday;
use App\Models\StudentsBio;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function selectclass(){
        $values = Classes::all();
        return view('atd.date_class', compact('values'));
    }

    public function classattendance(Request $request){
        $id = $request->input('selected_class');
        $values = Classes::find($id);
        $data = StudentsBio::where('class_id', $id)->get();
        $values->date = $request->input('date');
        $values->class = $id;
        return view('atd.attendance_entry', compact('values','data'));
    }
    public function markattendance(Request $request)
    {
        $selectedStudentIds = $request->input('selected_students');
        $attendanceDate = $request->input('date');
        $errorMessage = '';
        $errorStudents = [];
        $classId = StudentsBio::where('class_id', $request->input('class'))->first()->value('class_id');
        $allStudentsInClass = StudentsBio::where('class_id', $classId)->pluck('id')->toArray();

        if (!empty($selectedStudentIds)) {
            try {
                foreach ($selectedStudentIds as $studentId) {
                    try {
                        Attendance::create([
                            'student_id' => $studentId,
                            'date' => $attendanceDate,
                        ]);
                    } catch (QueryException $e) {
                        $studentName = StudentsBio::where('id', $studentId)->value('name');
                        $errorStudents[] = $studentName;
                    }
                }

                $presentStudents = array_diff($allStudentsInClass, $selectedStudentIds);
                StudentsBio::whereIn('id', $presentStudents)->increment('present_days');

                if (!empty($errorStudents)) {
                    $errorMessage = 'Attendance already recorded for students: ' . implode(', ', $errorStudents);
                }
            } catch (QueryException $e) {
            }
        } else {
            StudentsBio::whereIn('id', $allStudentsInClass)->increment('present_days');
        }

        if ($errorMessage !== '') {
            session()->flash('error', $errorMessage);
        } else {
            session()->flash('success', 'Attendance Recorded Successfully');
        }

        return redirect()->route('selectclass');

    }

    public function viewattendance(Request $request){
        $classId = $request->input('selected_class');
        $date = $request->input('date');
         $students = StudentsBio::where('class_id', $classId)->get();
         $absentees = DB::table('attendances')
                         ->whereIn('student_id', $students->pluck('id')->toArray())
                         ->where('date', $date)
                         ->get();
         $absenteesByStudentId = $absentees->pluck('student_id')->toArray();
         $total = $students->count();
         $present = $students->count() - $absentees->count();
         $absent = $absentees->count();
         $Date = Carbon::createFromFormat('Y-m-d', $date)->format('d/m/Y');
         $details = [
            'date' => $Date,
            'total' => $total,
            'present' => $present,
            'absent' => $absent
         ];
         $data = [];
         foreach ($students as $student) {
            $status = in_array($student->id, $absenteesByStudentId) ? 'Absent' : 'Present';
            $class = in_array($student->id, $absenteesByStudentId) ? 'table-danger' : 'table-success';

            $data[] = [
                'name' => $student->name,
                'id' => $student->id,
                'status' => $status,
                'class' => $class
            ];
        } 
        return view('atd.details_atd',['data' => $data, 'details' => $details]);
    }
    public function addholiday(Request $request){
        $data = $request->validate([
            'holiday_name' => 'required',
            'fromdate' => 'required',
            'todate' => 'required',
            'number_of_days' => 'required',
        ]);
        Holiday::create($data);
        return redirect()->back()->with('success','Holiday Created Successfully');
    }

    public function viewholiday(){
        $values = Holiday::all();
        $data = null;
        if ($values->isNotEmpty()) {
            $data = 260-$values->sum('number_of_days');
        }
        return view('admin.view-holiday', compact('values','data'));
    }
}