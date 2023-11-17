<?php

namespace App\Http\Controllers;

use App\Models\circulars;
use Illuminate\Http\Request;

class circularController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'published_at' => 'required'
        ]);

        circulars::create($data);

        return redirect()->route('teachers.circular')->with('success','Circular is distributed');
    }

    public function circularView(){
        $values = circulars::all();
        return view('teachers.circular_view',compact('values'));
    }
}
