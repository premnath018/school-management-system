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
}
