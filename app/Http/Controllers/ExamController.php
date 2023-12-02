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
    public function view()
    {
        $classes = Classes::select('id','ClassID')->get();
        $subjects = Subject::select('subject_code','subject_name')->get();
        return view('exams.add-exam', compact('classes', 'subjects'));
    }

    public function add(Request $request)
    {
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

        $typeMap = [
            'weekly' => 'WT',
            'monthly' => 'MT',
            'cycle' => 'CT',
            'term' => 'TT',
            'final' => 'AT',
        ];

        // Convert time input to carbon format
        $start_time = Carbon::parse($validatedData['start_time']);
        $end_time = Carbon::parse($validatedData['end_time']);
        $classInfo = Classes::where('id', $validatedData['class_id'])->first();
        $classAndSection = $classInfo->Class . $classInfo->section;

        $TestCount = Exam::where('class_id', $validatedData['class_id'])
        ->where('type', $validatedData['type'])
        ->count() + 1;

        $TestType = $typeMap[$validatedData['type']] ?? '';

        // Store the PDF file in the 'ExamQP' folder
        $pdfFile = $request->file('pdffile');
        $pdfFileName = $TestType.$TestCount.$validatedData['subject_code'] . '-' . $classAndSection.'.'.$pdfFile->extension();
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
            'exam_code' => $TestType.$TestCount.'-'.$validatedData['subject_code'].'-'.$classAndSection,
            'question_paper_url' => $pdfFileName,
        ]);
    
        return redirect()->back()->with('success', 'Exam Created Successfully');
    }


    public function examview()
    {
        $values = Exam::all();
        $classes = Classes::select('id','ClassID')->get();
        $subjects = Subject::select('subject_code','subject_name')->get();
        foreach ($values as $value) {
            $value->class_name = Classes::where('id', $value->class_id)->value('ClassID');
            $value->subject_name = Subject::where('subject_code', $value->subject_code)->value('subject_name');
        }
        return view('exams.view-exam', compact('values','classes', 'subjects'));
    }

    public function examsearch(Request $request)
    {
        $exam_code = $request->input('exam_code');
        $className = $request->input('class');
        $subjectName = $request->input('subject');
        $exams = Exam::query();
        $classes = Classes::select('id','ClassID')->get();
        $subjects = Subject::select('subject_code','subject_name')->get();
        if ($request->filled('class') && $request->input('class') !== 'Search By Class') {
            $exams->where('class_id', $className);
        }
        if ($request->filled('subject') && $request->input('subject') !== 'Search By Subject') {
            $exams->where('subject_code', $subjectName);
        }
        if ($request->filled('exam_code')) {
            $exams->where('exam_code', 'like', '%' . $exam_code . '%');
        }
        $values = $exams->get();
        if ($values->isEmpty()) {
            return redirect()->route('examlist')->with('message', 'No results found.');
        }
        foreach ($values as $value) {
            $value->class_name = Classes::where('id', $value->class_id)->value('ClassID');
            $value->subject_name = Subject::where('subject_code', $value->subject_code)->value('subject_name');
        }
        return view('exams.view-exam', compact('values','classes','subjects'));
    }    

    public function editexam($id)
    {
        $data = Exam::find($id);
        $data->class_name = Classes::where('id', $data->class_id)->value('ClassID');
        $data->subject_name = Subject::where('subject_code', $data->subject_code)->value('subject_name');
        $classes = Classes::all();
        $subjects = Subject::all();
        $students = StudentsBio::where('class_id', $data->class_id)->get(['id', 'name']);
        return view('exams.edit-exam', compact('data', 'classes', 'subjects', 'students'));
    }

    public function deleteexam($id){
        $exam = Exam::findOrFail($id);
        $marks = Mark::where('exam_id', $id)->get();
        foreach ($marks as $mark) {
            $mark->delete();
        }
        $exam->delete();
        return redirect()->route('examlist')->with('message', 'Exam and its Marks Deleted Successfully');
    }

    // public function marks($id){
    //     $data = Exam::find($id);
    //     $data->class_name = Classes::where('id', $data->class_id)->value('ClassID');
    //     $data->subject_name = Subject::where('subject_code', $data->subject_code)->value('subject_name');
    //     $students = StudentsBio::where('class_id', $data->class_id)->get(['id', 'name']);
    //     return view('exams.marks-exam', compact('data','students'));
    // }

    public function viewMarks($examId)
    {
        $data = Exam::find($examId);
        $data->class_name = Classes::where('id', $data->class_id)->value('ClassID');
        $data->subject_name = Subject::where('subject_code', $data->subject_code)->value('subject_name');
        $values = Mark::where('exam_id', $examId)->get();
        foreach ($values as $value) {
            $value->student_name = StudentsBio::where('id', $value->student_id)->value('name');
        }
        return view('exams.markview', compact('values', 'data'));
    }

    public function updateMark(Request $request, $examId)
    {
        foreach ($request->input('student_marks') as $studentId => $mark) {
            Mark::updateOrCreate(
                ['student_id' => $studentId, 'exam_id' => $examId],
                ['mark' => $mark]
            );
        }
        return $this->viewMarks($examId)->with('success','Marks Updated Successfully');
    }

    public function updateMarkView($examId)
    {
        $data = Exam::find($examId);
        $data->class_name = Classes::where('id', $data->class_id)->value('ClassID');
        $data->subject_name = Subject::where('subject_code', $data->subject_code)->value('subject_name');
        $values = StudentsBio::where('class_id', $data->class_id)->get();
        return view('exams.updatemark', compact('values', 'data'));
    }
    public function updateexam(Request $request, $id)
    {
        $data = Exam::find($id);
        $classInfo = Classes::where('id', $request->input('class_id'))->first();
        $classAndSection = $classInfo->Class . $classInfo->section;
        $typeMap = [
            'weekly' => 'WT',
            'monthly' => 'MT',
            'cycle' => 'CT',
            'term' => 'TT',
            'final' => 'AT',
        ];
        $TestType = $typeMap[$request->input('type')] ?? '';
        $TestCount = Exam::where('class_id', $request->input('class_id'))
            ->where('type', $request->input('type'))
            ->count() + 1;
        // $pdfFileName = $TestType . $TestCount . $request->input('subject_code') . '-' . $classAndSection;
        // Assuming you want to update the PDF file too
        // if ($request->hasFile('pdffile')) {
        //     $pdfFile = $request->file('pdffile');
        //     $pdfFileName .= '.' . $pdfFile->extension();
        //     $pdfFile->storeAs('public/ExamQP', $pdfFileName);
        //     $data->question_paper_url = $pdfFileName;
        // }
        $data->exam_code = $TestType . $TestCount . '-' . $request->input('subject_code') . '-' . $classAndSection;
        $data->class_id = $request->input('class_id');
        $data->subject_code = $request->input('subject_code');
        $data->start_time = $request->input('start_time');
        $data->end_time = $request->input('end_time');
        $data->exam_date = $request->input('exam_date');
        $data->type = $request->input('type');
        $data->save();
        return redirect()->route('examlist')->with('success', 'Exam Updated Successfully');
    }

}
