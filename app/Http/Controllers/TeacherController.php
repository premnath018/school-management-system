<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\TeachersBio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    public function add(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'teacher_id' => 'required',
            'dob' => 'required|date',
            'permanent_address' => 'required',
            'gender' => 'required|in:Male,Female,Others',
            'date_of_joining' => 'required|date',
            'age' => 'required',
            'contact_number' => 'required',
            'email' => 'required|email',
            'emergency_contact_number' => 'required',
            'previous_work_experience' => 'required',
            'total_experience' => 'required',
            'subject' => 'required|in:Tamil,English,Maths,Social Science,Physics,Chemistry,Zoology,Biology',
            'salary' => 'required|integer',
        ]);
        TeachersBio::create($data);
        return redirect()->back()->with('success','Teacher Created Successfully');
    }

    public function teacherview()
    {
        $values = TeachersBio::all();
        return view('teachers.view-teacher', compact('values'));
    }

    public function teachersearch(Request $request){
        $query = TeachersBio::query();
        // Check if ID parameter is present in the request
        if ($request->filled('id')) {
            $query->where('teacher_id', $request->input('id'));
        }
    
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }
    
        if ($request->filled('phone')) {
            $query->where('subject', 'like', '%' . $request->input('subject') . '%');
        }

        $values = $query->get();
        if ($values->isEmpty()) {
            return redirect()->route('teacherlist')->with('message', 'No results found.');
        }
        return view('teachers.view-teacher', compact('values'));
    }
    public function editteacher($id) {
        $data = TeachersBio::find($id);
        return view('teachers.profile',compact('data'));
    }

    public function updateteacher($id, Request $request ){
        $data = TeachersBio::find($id);
        $data->name = $request->name;
        $data->teacher_id = $request->teacher_id;
        $data->dob = $request->dob;
        $data->permanent_address = $request->permanent_address;
        $data->gender = $request->gender;
        $data->date_of_joining = $request->date_of_joining;
        $data->age = $request->age;
        $data->contact_number = $request->contact_number;
        $data->email = $request->email;
        $data->emergency_contact_number = $request->emergency_contact_number;
        $data->previous_work_experience = $request->previous_work_experience;
        $data->total_experience = $request->total_experience;
        $data->subject = $request->subject;
        $data->salary = $request->salary;
        $data->save();
        return redirect()->route('teacherlist')->with('success','Teacher Updated Successfully');
    }

    public function leaveapply($teacher_id) {
        $data = Leave::where('teacher_id', $teacher_id)->get();
        return view('teachers.leave',compact('teacher_id','data'));
    }
    public function leaveadd(Request $request)
    {
        $request->validate([
            'leave_type' => 'required|in:Leave,Emergency Leave,Sick Leave',
            'fromdate' => 'required|date',
            'todate' => 'required|date',
            'reason' => 'required|string|max:255',
        ]);
        Leave::create([
            'teacher_id' => $request->input('teacher_id'),
            'leave_type' => $request->input('leave_type'),
            'fromdate' => $request->input('fromdate'),
            'todate' => $request->input('todate'),
            'reason' => $request->input('reason'),
        ]);
        return redirect()->back()->with('success','Leave Created Successfully');
    }
    public function leaveview() {
        $data = Leave::all();
        return view('admin.leave_approve',compact('data'));
    }

    public function leavesearch(Request $request){
        $query = Leave::query();
        // Check if ID parameter is present in the request
        if ($request->filled('id')) {
            $query->where('teacher_id', $request->input('id'));
        }
    
        if ($request->filled('date')) {
            $query->where(function ($query) use ($request) {
            $inputDate = $request->input('date');
    
            $query->where('fromdate', $inputDate)
                  ->orWhere('todate', $inputDate);
        });
        }

        $data = $query->get();
        if ($data->isEmpty()) {
            return redirect()->route('leavelist')->with('message', 'No results found.');
        }
        return view('admin.leave_approve', compact('data'));
    }
    public function approve($id)
    {
        $leave = Leave::find($id);
        if (!$leave) {
            return redirect()->back()->with('error', 'Leave record not found.');
        }
        $leave->status = 'Approved';
        $leave->save();
        return redirect()->back();
    }

    public function reject($id)
    {
        $leave = Leave::find($id);
        if (!$leave) {
            return redirect()->back()->with('error', 'Leave record not found.');
        }
        $leave->status = 'Rejected';
        $leave->save();
        return redirect()->back();
    }
}
