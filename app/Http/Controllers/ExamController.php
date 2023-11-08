<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'exam_name' => 'required',
            'class' => 'required',
            'subject' => 'required',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'date_of_event' => 'required|date',
        ]);

        // Convert time input to carbon format
        $start_time = Carbon::parse($validatedData['start_time']);
        $end_time = Carbon::parse($validatedData['end_time']);


        // Create a new Exam record with converted times
        Exam::create([
            'exam_name' => $validatedData['exam_name'],
            'class' => $validatedData['class'],
            'subject' => $validatedData['subject'],
            'start_time' => $start_time->format('H:i'),
            'end_time' => $end_time->format('H:i'),
            'date_of_event' => $validatedData['date_of_event'],
        ]);

        return redirect()->route('exams.create');
    }

    public function examview(){
        $values = Exam::all();
        return view('exams.view-exam', compact('values'));
    }
}
