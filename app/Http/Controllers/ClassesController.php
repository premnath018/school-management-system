<?php

namespace App\Http\Controllers;

use App\Models\StudentsBio;
use App\Models\Classes;
use App\Models\TeachersBio;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'ClassID' => 'required',
            'Class' => 'required',
            'section' => 'required',
        ]);

        Classes::create($data);

        return redirect()->route('class.create')->with('success', 'Class details added successfully.');
    }
    public function classview(){
        $values = Classes::all();
        return view('class.view-class', compact('values'));
    }

    public function editclass($id){
        $data = Classes::find($id);
        $values = StudentsBio::all();
        $details = TeachersBio::all();
        return view('class.edit-class', compact('data','values','details'));
    }

    public function classstudents($id){
        $data = Classes::find($id);
        $values = StudentsBio::where('class_id', $id)->get();
        $details = TeachersBio::where('id',$data->teacher_id)->first();
        return view('class.view-class-students', compact('data','values','details'));
    }

    public function updateclass(Request $request, $id){
        $data = Classes::find($id);
        $data->ClassID = $request->input('ClassID');
        $data->Class = $request->input('Class');
        $data->section = $request->input('section');
        $data->fees = $request->input('fees');
        $data->save();
        return redirect()->route('classlist');
    }

    public function studentclassadd($id_student){
        list($id, $student) = explode('-', $id_student);
        $data = StudentsBio::find($student);
        $data->class_id = $id;
        $data->save();
        return $this->editclass($id);
    }

    public function teacherclassadd($id_teacher){
        list($id, $teacher) = explode('-', $id_teacher);
        $data = Classes::find($id);
        $data->teacher_id = $teacher;
        $data->save();
        return redirect()->route('classlist');
    }
}
