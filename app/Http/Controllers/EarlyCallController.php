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
        return redirect('/earlycallentry')->with('success', 'Entry Created Successfully');
    }

    public function view(){
        $values = Classes::select('ClassID')->get();
        $calls = early_call::orderBy('date', 'desc')->get();
        return view('student.early_call',compact('values','calls'));
    }
}
