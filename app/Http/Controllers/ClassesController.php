<?php

namespace App\Http\Controllers;

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
        return view('class.edit-class', compact('data'));
    }

    public function updateclass(Request $request, $id){
        $data = Classes::find($id);
        $data->ClassID = $request->input('ClassID');
        $data->Class = $request->input('Class');
        $data->section = $request->input('section');
        $data->save();
        return redirect()->route('classlist');
    }
}
