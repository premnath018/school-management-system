<?php

namespace App\Http\Controllers;

use App\Models\Circular;
use Illuminate\Http\Request;

class circularController extends Controller
{
    public function circularadd(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'published_at' => 'required'
        ]);
        Circular::create($data);
        return redirect()->route('circularlist');
    }

    public function circularview(){
        $values = Circular::all();
        return view('teachers.circular_view',compact('values'));
    }
}
