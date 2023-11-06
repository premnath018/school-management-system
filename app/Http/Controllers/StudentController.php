<?php

namespace App\Http\Controllers;

use App\Models\StudentsBio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class StudentController extends Controller
{
    public function add(Request $request){
        $validator = Validator::make($request->all(), [
            'batch' => 'required',
            'date_of_admission' => 'required|date',
            'admission_number' => 'required',
            'name' => 'required',
            'gender' => 'required|in:Male,Female,Others',
            'dob' => 'required|date',
            'age' => 'required',
            'religion' => 'required|in:Hindu,Muslim,Christian,Others',
            'community' => 'required',
            'caste' => 'required',
            'nationality' => 'required|in:Indian,Others',
            'mother_tongue' => 'required|in:Tamil,Telungu,Kannada,Others',
            'blood_group' => 'required|in:A+,A-,B+,B-,AB+,AB-,O+,O-,Others',
            'enrollment_number' => 'required',
            'contact_number' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'email' => 'required|email',
            'permanent_address' => 'required',
            'present_address' => 'required',
            'father_occupation' => 'required',
            'mother_occupation' => 'required',
            'place_of_work' => 'required',
            'father_income' => 'required',
            'mother_income' => 'required',
            'emis_number' => 'required',
        ]);
        if ($validator->fails()) {
            dd($validator->errors());
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $student = new StudentsBio();
        $student->batch = $request->batch;
        $student->date_of_admission = $request->date_of_admission;
        $student->admission_number = $request->admission_number;
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->dob = $request->dob;
        $student->age = $request->age;
        $student->religion = $request->religion;
        $student->community = $request->community;
        $student->caste = $request->caste;
        $student->nationality = $request->nationality;
        $student->mother_tongue = $request->mother_tongue;
        $student->blood_group = $request->blood_group;
        $student->enrollment_number = $request->enrollment_number;
        $student->contact_number = $request->contact_number;
        $student->father_name = $request->father_name;
        $student->mother_name = $request->mother_name;
        $student->email = $request->email;
        $student->permanent_address = $request->permanent_address;
        $student->present_address = $request->present_address;
        $student->father_occupation = $request->father_occupation;
        $student->mother_occupation = $request->mother_occupation;
        $student->place_of_work = $request->place_of_work;
        $student->father_income = $request->father_income;
        $student->mother_income = $request->mother_income;
        $student->emis_number = $request->emis_number;
        $student->save();
        return redirect()->route('home');
    }
}
