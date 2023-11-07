<?php

namespace App\Http\Controllers;

use App\Models\Exam;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function create()
    {
        return view('exams.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'exam_name' => 'required',
            'class' => 'required',
            'subject' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'date_of_event' => 'required',
        ]);

        // Convert time input to datetime format
        $start_time = date('Y-m-d H:i:s', strtotime($validatedData['start_time']));
        $end_time = date('Y-m-d H:i:s', strtotime($validatedData['end_time']));

        // Create a new Exam record with converted times
        Exam::create([
            'exam_name' => $validatedData['exam_name'],
            'class' => $validatedData['class'],
            'subject' => $validatedData['subject'],
            'start_time' => $start_time,
            'end_time' => $end_time,
            'date_of_event' => $validatedData['date_of_event'],
        ]);

        return redirect()->route('exams.view')->with('success', 'Exam details added successfully.');
    }
}
