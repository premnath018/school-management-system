<?php

namespace App\Http\Controllers;

use App\Models\StudentsBio;
use App\Models\Classes;
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
        return view('class.edit-class', compact('data','values'));
    }

    public function classstudents($id){
        $data = Classes::find($id);
        $values = StudentsBio::where('class_id', $id)->get();
        return view('class.view-class-students', compact('data','values'));
    }

    public function updateclass(Request $request, $id){
        $data = Classes::find($id);
        $data->ClassID = $request->input('ClassID');
        $data->Class = $request->input('Class');
        $data->section = $request->input('section');
        $data->save();
        return redirect()->route('classlist');
    }

    public function studentclassadd($id_student){
        list($id, $student) = explode('-', $id_student);
        $data = StudentsBio::find($student);
        $data->class_id = $id;
        $data->save();
        return redirect()->route('classlist');
    }
}
