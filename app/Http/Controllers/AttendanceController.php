<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Classes;
use App\Models\StudentsBio;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

        foreach ($selectedStudentIds as $studentId) {
            try {
                Attendance::create([
                    'student_id' => $studentId,
                    'date' => $attendanceDate,
                ]);
            } catch (QueryException $e) {
                // Handle the exception (duplicate entry)
                // For example, you can log an error or show a message to the user
                Log::error('Error creating attendance: ' . $e->getMessage());
                $errorMessage = 'Attendance already recorded for this student on this date.';
            }
        }
        if ($errorMessage !== '') {
            session()->flash('error', $errorMessage);
            return redirect()->back();
        } else {
            session()->flash('success', 'Selected students inserted successfully!');
            return redirect()->back();
        }
    }


}