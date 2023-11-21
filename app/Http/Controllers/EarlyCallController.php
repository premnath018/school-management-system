<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\early_call;
use Illuminate\Http\Request;

class EarlyCallController extends Controller
{

    public function add(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'class_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            'reason' => 'required'
        ]);
        early_call::create($data);
        return redirect('/earlycallentry')->with('success', 'Entry created successfully!');
    }

    public function view(){
        $values = Classes::all();
        $calls = early_call::all();
        return view('student.early_call',compact('values','calls'));
    }
}
