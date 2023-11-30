<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\StudentsBio;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function add(Request $request)
    {
        $data = $request->validate([
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
            'class_id' => 'nullable',
        ]);
        StudentsBio::create($data);
        return redirect()->back()->with('success','Student Created Successfully');
    }
    public function studentview()
    {
        $values = StudentsBio::select('id','name','batch','dob','father_name','contact_number','enrollment_number')->get();
        return view('student.view-student', compact('values'));
    }

    public function studentsearch(Request $request){
        $query = StudentsBio::query();
        // Check if ID parameter is present in the request
        if ($request->filled('id')) {
            $query->where('id', $request->input('id'));
        }
    
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }
    
        if ($request->filled('enrollment_number')) {
            $query->where('enrollment_number', 'like', '%' . $request->input('enrollment_number') . '%');
        }

        $values = $query->get();
        if ($values->isEmpty()) {
            return redirect()->route('studentlist')->with('message', 'No results found.');
        }
        return view('student.view-student', compact('values'));
    }

    public function editstudent($id){
        $data = StudentsBio::find($id);
        $data->class_name = Classes::where('id', $data->class_id)->value('ClassID');
        return view('student.profile', compact('data'));
    }

    public function updatestudent($id, Request $request){
            $data = StudentsBio::find($id);
            $data->batch = $request->input('batch');
            $data->date_of_admission = $request->input('date_of_admission');
            $data->admission_number = $request->input('admission_number');
            $data->name = $request->input('name');
            $data->gender = $request->input('gender');
            $data->dob = $request->input('dob');
            $data->age = $request->input('age');
            $data->religion = $request->input('religion');
            $data->community = $request->input('community');
            $data->caste = $request->input('caste');
            $data->nationality = $request->input('nationality');
            $data->mother_tongue = $request->input('mother_tongue');
            $data->blood_group = $request->input('blood_group');
            $data->enrollment_number = $request->input('enrollment_number');
            $data->contact_number = $request->input('contact_number');
            $data->father_name = $request->input('father_name');
            $data->mother_name = $request->input('mother_name');
            $data->email = $request->input('email');
            $data->permanent_address = $request->input('permanent_address');
            $data->present_address = $request->input('present_address');
            $data->father_occupation = $request->input('father_occupation');
            $data->mother_occupation = $request->input('mother_occupation');
            $data->place_of_work = $request->input('place_of_work');
            $data->father_income = $request->input('father_income');
            $data->mother_income = $request->input('mother_income');
            $data->emis_number = $request->input('emis_number');
            $data->save();
            return redirect()->route('studentlist')->with('success','Student Updated Successfully');
    }

    public function deletestudent($id){
        StudentsBio::destroy($id);
        return redirect()->route('studentlist')->with('message','Student Deleted Successfully');
    }

    public function feeview(){
        $values = StudentsBio::select('id','name','class_id','fees','extra_fees','paid_fees','extra_paid_fees','fee_status')->get();
        return view('fees.view-fee', compact('values'));
    }

    public function updatefee($id, Request $request){
            $values = StudentsBio::find($id);
            $updateAmount = $request->input('update_amount');
            $remainingExtraFees = max(0, $values->extra_fees - $values->extra_paid_fees); // Calculate remaining extra fees to be paid
            if ($updateAmount <= $remainingExtraFees) {
                // If the update amount is less than or equal to remaining extra fees, update extra_paid_fees
                $values->extra_paid_fees += $updateAmount;
            } else {
                // Update extra_paid_fees to maximum extra_fees and adjust paid_fees with remaining amount
                $values->extra_paid_fees = $values->extra_fees;
                $remainingAmount = $updateAmount - $remainingExtraFees;
                $values->paid_fees += $remainingAmount;
            }
            $values->fee_status = ($values->fees - $values->paid_fees) == 0 && ($values->extra_fees - $values->extra_paid_fees) == 0 ? "Paid":"Unpaid";
            $values->save();
            return redirect()->back();
    }
    
    public function extra_fees($id, Request $request){
            $values = StudentsBio::find($id);
            $values-> extra_fees = $values-> extra_fees + $request->input('extra_fees');
            $values->fee_status = ($values->fees - $values->paid_fees) == 0 && ($values->extra_fees - $values->extra_paid_fees) == 0 ? "Paid":"Unpaid";
            $values->save();
            return redirect()->back();
    }

}
