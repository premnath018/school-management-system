<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Classes;
use App\Models\Holiday;
use App\Models\StudentsBio;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

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
        return view('atd.attendance_entry', compact('values','data'));
    }
    public function markattendance(Request $request)
    {
        $selectedStudentIds = $request->input('selected_students');
        $attendanceDate = $request->input('date');
        $errorMessage = '';
        $errorStudents = [];
        $classId = StudentsBio::where('id', $selectedStudentIds[0])->value('class_id');
        $presentStudents = StudentsBio::where('class_id', $classId)
        ->whereNotIn('id', $selectedStudentIds)
        ->pluck('id')
        ->toArray();        
            try {
                foreach ($selectedStudentIds as $studentId) {
                    try{
                        Attendance::create([
                            'student_id' => $studentId,
                            'date' => $attendanceDate,
                        ]);
                    }
                    catch (QueryException $e) {
                        $studentName = StudentsBio::where('id', $studentId)->value('name');
                        $errorStudents[] = $studentName;
                        }
                    }
                    StudentsBio::whereIn('id', $presentStudents)
                    ->increment('present_days');
                    if (!empty($errorStudents)) {
                        $errorMessage = 'Attendance already recorded for students: ' . implode(', ', $errorStudents);
                    }
            } 
            catch (QueryException $e) {}
        if ($errorMessage !== '') {
            session()->flash('error', $errorMessage);
            return redirect()->back();
        } else {
            session()->flash('success', 'Selected students inserted successfully!');
            return redirect()->back();
        }
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