<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Subject;
use App\Models\Exam;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function view(){
        $classes = Classes::all();
        $subjects = Subject::all();
        return view('exams.add-exam', compact('classes', 'subjects'));
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'class_id' => 'required',
            'subject_code' => 'required',
            'type' => 'required',
            'maximum_mark' => 'required|integer',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'exam_date' => 'required|date',
        ]);
    
        // Convert time input to carbon format
        $start_time = Carbon::parse($validatedData['start_time']);
        $end_time = Carbon::parse($validatedData['end_time']);
    
        $incrementNumber = Exam::count() + 1;

        // Create a new Exam record with converted times
        Exam::create([
            'class_id' => $validatedData['class_id'],
            'subject_code' => $validatedData['subject_code'],
            'type' => $validatedData['type'],
            'maximum_mark' => $validatedData['maximum_mark'],
            'start_time' => $start_time->format('H:i'),
            'end_time' => $end_time->format('H:i'),
            'exam_date' => $validatedData['exam_date'],
            'exam_code' => $validatedData['subject_code'] . $validatedData['class_id'] . $incrementNumber,

        ]);
    
        return redirect()->route('exam.list');
    }
    

    public function examview(){
        $values = Exam::all();
        foreach ($values as $value){
            $value->class_name = Classes::where('id', $value->class_id)->value('ClassID');
            $value->subject_name = Subject::where('subject_code', $value->subject_code)->value('subject_name');

        }
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
