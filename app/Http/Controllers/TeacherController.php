<?php

namespace App\Http\Controllers;
use App\Models\TeachersBio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
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

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $teacher = new TeachersBio();
        $teacher->name = $request->name;
        $teacher->teacher_id = $request->teacher_id;
        $teacher->dob = $request->dob;
        $teacher->permanent_address = $request->permanent_address;
        $teacher->gender = $request->gender;
        $teacher->date_of_joining = $request->date_of_joining;
        $teacher->age = $request->age;
        $teacher->contact_number = $request->contact_number;
        $teacher->email = $request->email;
        $teacher->emergency_contact_number = $request->emergency_contact_number;
        $teacher->previous_work_experience = $request->previous_work_experience;
        $teacher->total_experience = $request->total_experience;
        $teacher->subject = $request->subject;
        $teacher->salary = $request->salary;
        $teacher->save();
        return redirect()->route('teacher.create');
    }

    public function teacherview()
    {
        $values = TeachersBio::all();
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
        return redirect()->route('teacherlist');
    }
}