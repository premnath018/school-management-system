<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Exam;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function view(){
        $values = Classes::all();
        return view('exams.add-exam', compact('values'));
    }
    
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

    public function editexam($id){
        $data = Exam::find($id);
        return view('exams.edit-exam', compact('data'));
    }

    public function updateexam(Request $request, $id){
        $data = Exam::find($id);
        $data->exam_name = $request->input('exam_name');
        $data->class = $request->input('class');
        $data->subject = $request->input('subject');
        $data->start_time = $request->input('start_time');
        $data->end_time = $request->input('end_time');
        $data->date_of_event = $request->input('date_of_event');
        $data->save();
        return redirect()->route('examlist');
    }
}
