<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Subject;
use App\Models\Exam;
use App\Models\Mark;
use App\Models\StudentsBio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExamController extends Controller
{
    public function view(){
        $classes = Classes::all();
        $subjects = Subject::all();
        return view('exams.add-exam', compact('classes', 'subjects'));
    }
    
    public function store(Request $request){
        $validatedData = $request->validate([
            'class_id' => 'required',
            'subject_code' => 'required',
            'type' => 'required',
            'maximum_mark' => 'required|integer',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'exam_date' => 'required|date',
            'pdffile' => 'required', // Adjust the max file size as needed
        ]);
    
        // Convert time input to Carbon format
        $start_time = Carbon::parse($validatedData['start_time']);
        $end_time = Carbon::parse($validatedData['end_time']);
    
        $incrementNumber = Exam::count() + 1;
    


        // Store the PDF file in the 'ExamQP' folder
        $pdfFile = $request->file('pdffile');
        $pdfFileName = $validatedData['subject_code'] . $validatedData['class_id'] . $incrementNumber.$pdfFile->extension();
        $pdfFile->storeAs('public/ExamQP',$pdfFileName);
    
        // Create a new Exam record with converted times and file path
        Exam::create([
            'class_id' => $validatedData['class_id'],
            'subject_code' => $validatedData['subject_code'],
            'type' => $validatedData['type'],
            'maximum_mark' => $validatedData['maximum_mark'],
            'start_time' => $start_time->format('H:i'),
            'end_time' => $end_time->format('H:i'),
            'exam_date' => $validatedData['exam_date'],
            'exam_code' => $validatedData['subject_code'] . $validatedData['class_id'] . $incrementNumber,
            'question_paper_url' => $pdfFileName,
        ]);
    
        return redirect()->route('examlist');
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
        $data->class_name = Classes::where('id', $data->class_id)->value('ClassID');
        $data->subject_name = Subject::where('subject_code', $data->subject_code)->value('subject_name');
        $classes = Classes::all();
        $subjects = Subject::all();
        $students = StudentsBio::where('class_id', $data->class_id)->get(['id', 'name']);
        return view('exams.edit-exam', compact('data','classes','subjects','students'));
    }

    public function viewMarks($examId){
        $data = Exam::find($examId);
        $data->class_name = Classes::where('id', $data->class_id)->value('ClassID');
        $data->subject_name = Subject::where('subject_code', $data->subject_code)->value('subject_name');
        $values = Mark::where('exam_id', $examId)->get();
        foreach ($values as $value){
            $value->student_name = StudentsBio::where('id', $value->student_id)->value('name');
        }
        return view('exams.markview', compact('values','data'));
    }

    public function updateMark(Request $request,$examId){
        foreach ($request->input('student_marks') as $studentId => $mark) {
            Mark::updateOrCreate(
                ['student_id' => $studentId,'exam_id' => $examId],
                ['mark' => $mark]
            );
        }
        return $this->viewMarks($examId);
    }

    public function updateexam(Request $request, $id){
        $data = Exam::find($id);
        $incrementNumber = Exam::count() + 1;
        $data->exam_code = $request->input('subject_code') . $request->input('class_id') . $incrementNumber;
        $data->class_id = $request->input('class_id');
        $data->subject_code = $request->input('subject_code');
        $data->start_time = $request->input('start_time');
        $data->end_time = $request->input('end_time');
        $data->exam_date = $request->input('exam_date');
        $data->save();
        return redirect()->route('examlist');
    }

}
