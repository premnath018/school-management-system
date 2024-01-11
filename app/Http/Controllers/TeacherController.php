<?php

namespace App\Http\Controllers;

use App\Models\Classes;
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
        $values = TeachersBio::select('id','name','teacher_id','subject','total_experience','salary','contact_number')->get();
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
        return redirect()->back()->with('success','Teacher Details Updated Successfully');
    }
    public function deleteteacher($id){
        $teacher = TeachersBio::findOrFail($id);
        Classes::where('teacher_id', $id)->update(['teacher_id' => null]);
        $teacher->delete();
        return redirect()->route('teacherlist')->with('message','Teacher Deleted Successfully');
    }
    public function leaveapply($teacher_id) {
        $data = Leave::leftJoin('teachers_bios', 'leaves.teacher_id', '=', 'teachers_bios.id')
        ->where('leaves.teacher_id', $teacher_id)
        ->select('leaves.*', 'teachers_bios.name as name')
        ->get();
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
        $data = Leave::leftJoin('teachers_bios', 'leaves.teacher_id', '=', 'teachers_bios.id')
        ->select('leaves.*', 'teachers_bios.name as name')
        ->get();
        return view('admin.leave_approve',compact('data'));
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
