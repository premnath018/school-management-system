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
            'fees' => 'required',
        ]);
        Classes::create($data);

        return redirect()->back()->with('success', 'Class Created Successfully.');
    }
    public function classview(){
        $values = Classes::all();
        return view('class.view-class', compact('values'));
    }

    public function Classsearch(Request $request){
        $query = Classes::query();
        // Check if ID parameter is present in the request
        if ($request->filled('ClassID')) {
            $query->where('ClassID', 'like', '%' . $request->input('ClassID') . '%');
        }
    
        if ($request->filled('Class')) {
            $query->where('Class', 'like', '%' . $request->input('Class') . '%');
        }
    
        if ($request->filled('section')) {
            $query->where('section', 'like', '%' . $request->input('section') . '%');
        }

        $values = $query->get();
        if ($values->isEmpty()) {
            return redirect()->route('classlist')->with('message', 'No results found.');
        }
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
        $values = StudentsBio::where('class_id', $id)
        ->orderByRaw("CASE WHEN gender = 'Male' THEN 0 ELSE 1 END, name ASC")
        ->get();
        $data->name = TeachersBio::where('id', $data->teacher_id)->value('name');
        return view('class.view-class-students', compact('data','values'));
    }

    public function updateclass(Request $request, $id){
        $data = Classes::find($id);
        $data->ClassID = $request->input('ClassID');
        $data->Class = $request->input('Class');
        $data->section = $request->input('section');
        $data->fees = $request->input('fees');
        $data->save();
        $students = StudentsBio::where('class_id', $id)->get();
        foreach ($students as $student) {
            $student->fees = $request->input('fees');
            $student->save();
        }
        return redirect()->route('classlist')->with('success','Class Updated Successfully');
    }

    public function studentclassadd($id_student){
        list($id, $student) = explode('-', $id_student);
        $data = StudentsBio::find($student);
        $data->class_id = $id;
        $data->save();
        $class = Classes::find($id);
        $students = StudentsBio::where('class_id', $id)->get();
        foreach ($students as $student) {
            $student->fees = $class->fees;
            $student->save();
        }
        return $this->classstudents($id)->with('success','Students Added to Class Successfully');
    }

    public function teacherclassadd($id_teacher){
        list($id, $teacher) = explode('-', $id_teacher);
        $data = Classes::find($id);
        $data->teacher_id = $teacher;
        $data->save();
        return $this->classstudents($id)->with('success','Teacher Added to Class Successfully');
    }
}
