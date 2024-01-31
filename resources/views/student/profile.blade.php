@extends('layouts.main')
@section('title','Student Profile')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')
<div class="card shadow-none position-relative overflow-hidden mb-4">
  <div class="card-body d-flex align-items-center justify-content-between p-4">
    <h4 class="fw-semibold mb-0">Student Profile</h4>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a class="text-muted text-decoration-none" href="/">Home</a>
        </li>
        <li class="breadcrumb-item" aria-current="page">Student Profile</li>
      </ol>
    </nav>
  </div>
</div>
<div class="position-relative overflow-hidden">
<div class="card">
    <div class="card-body pb-0">
    <div class="d-md-flex align-items-center justify-content-between text-center text-md-start">
        <div class="d-md-flex align-items-center">
        <div class="rounded-circle position-relative mb-9 mb-md-0 d-inline-block">
            <img src="../assets/images/profile/user-1.jpg" alt="" class="img-fluid rounded-circle" width="100"
            height="100">
            <span
            class="text-bg-primary rounded-circle text-white d-flex align-items-center justify-content-center position-absolute bottom-0 end-0 p-1 border border-2 border-white"><i
                class="ti ti-plus"></i></span>
        </div>
        <div class="ms-0 ms-md-3 mb-9 mb-md-0">
            <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-1">
            <h4 class="me-7 mb-0 fs-7">{{$data->name}}</h4>
            </div>
            <div class="d-flex align-items-center justify-content-center justify-content-md-start">
            <span class="{{$data->fee_status=='Paid'?'bg-success p-1 rounded-circle':'bg-danger p-1 rounded-circle'}}"></span>
            <h6 class="mb-0 ms-2">Fee Status: {{$data->fee_status}}</h6>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <button type="button"
                class="btn btn-primary w-100 justify-content-center me-2 d-flex align-items-center mb-3 mb-sm-0"
                data-bs-toggle="modal" data-bs-target="#editmodel">
                <i class="ti ti-edit fs-5 me-2"></i>
                Edit
            </button>
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
            <button type="button"
                class="btn btn-danger w-100 justify-content-center d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#deletemodal">
                <i class="ti ti-trash fs-5 me-2"></i>
                Delete
            </button>
        </div>
        </div>
    </div>
    <ul class="nav nav-pills user-profile-tab mt-4 justify-content-center justify-content-md-start"
        id="pills-tab" role="tablist">
        <li class="nav-item me-2 me-md-3" role="presentation">
        <button
            class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent py-6"
            id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
            role="tab" aria-controls="pills-profile" aria-selected="true">
            <i class="ti ti-user-circle me-0 me-md-6  fs-6"></i>
            <span class="d-none d-md-block">Student Profile</span>
        </button>
        </li>
    </ul>
    </div>
</div>
</div>
<div class="tab-content mx-10" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
    aria-labelledby="pills-profile-tab" tabindex="0">
    <div class="row">
    <div class="col-lg-4">
    <div class="card">
    <div class="card-body">
        <div class="text-center">
        <div class="pb-1 mb-2 border-bottom">
            <h3>Personal Details</h3>
        </div>
        </div>

        <!-- <div class="hstack justify-content-between mt-5">
        <div class="d-flex align-items-center">
            <span class="bg-success-subtle p-6 rounded-3">
            <i class="ti ti-check text-success fs-7"></i>`
            </span>

            <div class="ms-3">
            <p class="fw-normal text-dark fs-5 mb-0">1.23k</p>
            <p class="mb-0 fs-3">Tasks Done</p>
            </div>
        </div>

        <div class="d-flex align-items-center">
            <span class="bg-success-subtle p-6 rounded-3">
            <i class="ti ti-cpu text-success fs-7"></i>
            </span>

            <div class="ms-3">
            <p class="fw-normal text-dark fs-5 mb-0">568</p>
            <p class="mb-0 fs-3">Projects Done</p>
            </div>
        </div>
        </div> -->
        <ul>
            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Date Of Birth:
                <span class="fw-light text-secondary ms-1">{{$data->dob}}</span>
            </p>
            </li>

            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Age:
                <span class="fw-light text-secondary ms-1">{{$data->age}}</span>
            </p>
            </li>

            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Blood Group:
                <span class="fw-light text-secondary ms-1">{{$data->name}}</span>
            </p>
            </li>

            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Gender:
                <span class="fw-light text-secondary ms-1">{{$data->gender}}</span>
            </p>
            </li>

            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Caste:
                <span class="fw-light text-secondary ms-1">{{$data->caste}}</span>
            </p>
            </li>

            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Community:
                <span class="fw-light text-secondary ms-1">{{$data->community}}</span>
            </p>
            </li>

            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Religion:
                <span class="fw-light text-secondary ms-1">{{$data->religion}}</span>
            </p>
            </li>

            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Nationality:
                <span class="fw-light text-secondary ms-1">{{$data->nationality}}</span>
            </p>
            </li>
            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Mother Tongue:
                <span class="fw-light text-secondary ms-1">{{$data->mother_tongue}}</span>
            </p>
            </li>
            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Contact Number:
                <span class="fw-light text-secondary ms-1">{{$data->contact_number}}</span>
            </p>
            </li>
        </ul>

        <!-- <div class="row mt-4">
            <div class="col-sm-6">
            <button type="button"
                class="btn btn-primary w-100 justify-content-center me-2 d-flex align-items-center mb-3 mb-sm-0"
                data-bs-toggle="modal" data-bs-target="#editmodel">
                <i class="ti ti-edit fs-5 me-2"></i>
                Edit
            </button>
            </div>
            <div class="col-sm-6">
            <button type="button"
                class="btn btn-danger w-100 justify-content-center d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#deletemodal">
                <i class="ti ti-trash fs-5 me-2"></i>
                Delete
            </button>
            </div>
        </div> -->
    </div>
    </div>
</div>

<div class="col-lg-8">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item me-2" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
        type="button" role="tab" aria-controls="home" aria-selected="true">
        Academic Details
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
        role="tab" aria-controls="profile" aria-selected="false">
        Fees
        </button>
    </li>
    </ul>

    <div class="card mt-4">
    <div class="card-body">
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="mb-4 border-bottom pb-3">
            <h5 class="mb-0">Academic Details</h5>
            </div>
            <ul>
            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Batch:
                <span class="fw-light text-secondary ms-1">{{$data->batch}}</span>
            </p>
            </li>

            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Date Of Admission:
                <span class="fw-light text-secondary ms-1">{{$data->date_of_admission}}</span>
            </p>
            </li>

            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Admission Number:
                <span class="fw-light text-secondary ms-1">{{$data->admission_number}}</span>
            </p>
            </li>

            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Enrollment Number:
                <span class="fw-light text-secondary ms-1">{{$data->date_of_joining}}</span>
            </p>
            </li>

            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                EMIS Number:
                <span class="fw-light text-secondary ms-1">{{$data->emis_number}}</span>
            </p>
            </li>

            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Class:
                <span class="fw-light text-secondary ms-1">{{$data->class_name}}</span>
            </p>
            </li>

            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Number Of Days Present:
                <span class="fw-light text-secondary ms-1">{{$data->present_days}}</span>
            </p>
            </li>
            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Email ID:
                <span class="fw-light text-secondary ms-1">{{$data->email}}</span>
            </p>
            </li>
        </ul>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="mb-4 border-bottom pb-3">
                <h5 class="mb-0">Fees Report</h5>
            </div>
            <div class="d-flex justify-content-between align-items-start">
                <span class="badge text-bg-primary">Total Fees</span>
                <div class="d-flex justify-content-center">
                    <sup class="h5 mt-3 mb-0 me-1 text-primary">₹</sup>
                    <h1 class="display-5 mb-0 text-primary">{{$data->fees}}</h1>
                </div>
            </div>
            <div class="mb-3 border-bottom pb-3"></div>
            <div class="d-flex justify-content-between align-items-start">
                <span class="badge text-bg-primary">Paid Fees</span>
                <div class="d-flex justify-content-center">
                    <sup class="h5 mt-3 mb-0 me-1 text-primary">₹</sup>
                    <h1 class="display-5 mb-0 text-primary">{{$data->paid_fees}}</h1>
                </div>
            </div>
            <div class="mb-3 border-bottom pb-3"></div>
            <div class="d-flex justify-content-between align-items-start">
                <span class="badge text-bg-primary">Extra Fees</span>
                <div class="d-flex justify-content-center">
                    <sup class="h5 mt-3 mb-0 me-1 text-primary">₹</sup>
                    <h1 class="display-5 mb-0 text-primary">{{$data->extra_paid_fees}}</h1>
                </div>
            </div>
            <div class="mb-3 border-bottom pb-3"></div>
            <div class="d-flex justify-content-end">
                <button type="button"
                    class="btn btn-info w-100 justify-content-center d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#feesmodal">
                    <i class="ti ti-plus fs-5 me-2"></i>
                    Add Extra Fees
                </button>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
<div class="col-lg-12">
    <div class="card">
    <div class="card-body">
        <div class="text-center">
        <div class="pb-1 mb-2 border-bottom">
            <h3>Parent / Guardian Details</h3>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <ul>
                                <li class="py-2">
                                    <p class="fw-normal text-dark mb-0">
                                        Father Name:
                                        <span class="fw-light text-secondary ms-1">{{$data->father_name}}</span>
                                    </p>
                                </li>
                                <li class="py-2">
                                    <p class="fw-normal text-dark mb-0">
                                        Father Income:
                                        <span class="fw-light text-secondary ms-1">{{$data->father_income}}</span>
                                    </p>
                                </li>
                                <li class="py-2">
                                    <p class="fw-normal text-dark mb-0">
                                        Father Occupation:
                                        <span class="fw-light text-secondary ms-1">{{$data->father_occupation}}</span>
                                    </p>
                                </li>
                                <li class="py-2">
                                    <p class="fw-normal text-dark mb-0">
                                        Permanent Address:
                                        <span class="fw-light text-secondary ms-1">{{$data->permanent_address}}</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <ul>
                                <li class="py-2">
                                    <p class="fw-normal text-dark mb-0">
                                        Mother Name:
                                        <span class="fw-light text-secondary ms-1">{{$data->mother_name}}</span>
                                    </p>
                                </li>
                                <li class="py-2">
                                    <p class="fw-normal text-dark mb-0">
                                        Mother Income:
                                        <span class="fw-light text-secondary ms-1">{{$data->mother_income}}</span>
                                    </p>
                                </li>
                                <li class="py-2">
                                    <p class="fw-normal text-dark mb-0">
                                        Mother Occupation:
                                        <span class="fw-light text-secondary ms-1">{{$data->mother_occupation}}</span>
                                    </p>
                                </li>
                                <li class="py-2">
                                    <p class="fw-normal text-dark mb-0">
                                        Present Address:
                                        <span class="fw-light text-secondary ms-1">{{$data->present_address}}</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="vertical-center-modal"
                      aria-hidden="true">
<div class="modal-dialog modal-sm">
<div class="modal-content modal-filled bg-light-warning">
    <div class="modal-body p-4">
    <div class="text-center text-warning">
        <i class="ti ti-alert-octagon fs-7"></i>
        <h5 class="mt-2">Do you want to Delete the Student Details?</h5>
        <form action="{{url('deletestudent',$data->id)}}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger my-2" data-bs-dismiss="modal">
        Delete
        </button>
        </form>
        <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">
        Close
        </button>
    </div>
    </div>
</div>
</div>
</div>
<div class="modal fade" id="editmodel" tabindex="-1"
aria-labelledby="bs-example-modal-lg" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header d-flex align-items-center">
        <h4 class="modal-title" id="myLargeModalLabel">
        Edit Teacher Details
        </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"
        aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <form action="{{url('updatestudent',$data->id)}}" method="post">
    @csrf
        <div class="row">
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="batch" id="tb-fname" value="{{$data->batch}}"/>
            <label for="tb-fname">Batch</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input type="date" class="form-control" name="date_of_admission" id="tb-pwd" value="{{$data->date_of_admission}}" />
            <label for="tb-pwd">Date Of Admission</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="integer" class="form-control" name="admission_number" id="tb-email" value="{{$data->admission_number}}"/>
            <label for="tb-email">Admission Number</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" id="tb-fname1" value="{{$data->name}}"/>
            <label for="tb-fname1">Full Name</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <select class="form-control select" id="tb-fname2" name="gender">
                <option>Select Gender</option>
                <option value="Female" {{  $data->gender === 'Female' ? 'selected' : ''}}>Female</option>
                <option value="Male" {{  $data->gender === 'Male' ? 'selected' : ''}}>Male</option>
                <option value="Others" {{ $data->gender === 'Others' ? 'selected' : ''}}>Others</option>
            </select>
            <label for="tb-fname2">Gender</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input type="date" class="form-control" name="dob" id="tb-pwd1" value="{{$data->dob}}"/>
            <label for="tb-pwd1">Date Of Birth</label>
            </div>
        </div><div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="integer" class="form-control" min="3" max="22" step="1" name="age" id="tb-fname3" value="{{$data->age}}"/>
            <label for="tb-fname3">Age</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <select class="form-control select" id="pwd2" name="religion">
                <option>Please Select Religion </option>
                <option value="Hindu" {{  $data->religion === 'Hindu' ? 'selected' : ''}}>Hindu</option>
                <option value="Muslim" {{  $data->religion === 'Muslim' ? 'selected' : ''}}>Muslim</option>
                <option value="Christian" {{  $data->religion === 'Christian' ? 'selected' : ''}}>Christian</option>
                <option value="Others" {{  $data->religion === 'Others' ? 'selected' : ''}}>Others</option>
            </select>
            <label for="tb-pwd2">Religion</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="community" id="tb-email1" value="{{$data->community}}"/>
            <label for="tb-email1">Community</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="caste" id="tb-fname4" value="{{$data->caste}}"/>
            <label for="tb-fname4">Caste</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <select class="form-control select" id="tb-pwd3" name="nationality">
                <option>Please Select Nationality </option>
                <option value="Indian" {{  $data->nationality === 'Indian' ? 'selected' : ''}}>Indian</option>
                <option value="Others" {{  $data->religion === 'Others' ? 'selected' : ''}}>Others</option>
            </select>
            <label for="tb-pwd3">Nationality</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <select class="form-control select" id="tb-pwd4" name="mother_tongue">
                <option>Please Select Mother Tongue </option>
                <option value="Tamil" {{  $data->mother_tongue === 'Tamil' ? 'selected' : ''}}>Tamil</option>
                <option value="Telungu" {{  $data->mother_tongue === 'Telungu' ? 'selected' : ''}}>Telungu</option>
                <option value="Kannada" {{  $data->mother_tongue === 'Kannada' ? 'selected' : ''}}>Kannada</option>
                <option value="Others" {{  $data->mother_tongue === 'Others' ? 'selected' : ''}}>Others</option>
            </select>
            <label for="tb-pwd4">Mother Tongue</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <select class="form-control select" id="tb-pwd5" name="blood_group">
                <option>Please Select Blood Group </option>
                <option value="A+" {{  $data->blood_group === 'A+' ? 'selected' : ''}}>A+</option>
                <option value="A-" {{  $data->blood_group === 'A-' ? 'selected' : ''}}>A-</option>
                <option value="B+" {{  $data->blood_group === 'B+' ? 'selected' : ''}}>B+</option>
                <option value="B-" {{  $data->blood_group === 'B-' ? 'selected' : ''}}>B-</option>
                <option value="AB+" {{  $data->blood_group === 'AB+' ? 'selected' : ''}}>AB+</option>
                <option value="AB-" {{  $data->blood_group === 'AB-' ? 'selected' : ''}}>AB-</option>
                <option value="O+" {{  $data->blood_group === 'O+' ? 'selected' : ''}}>O+</option>
                <option value="O-" {{  $data->blood_group === 'O-' ? 'selected' : ''}}>O-</option>
                <option value="Others" {{  $data->blood_group === 'Others' ? 'selected' : ''}}>Others</option>
            </select>
            <label for="tb-pwd5">Blood Group</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="integer" class="form-control" name="enrollment_number" id="tb-email2" value="{{$data->enrollment_number}}"/>
            <label for="tb-email2">Enrollment Number</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="integer" class="form-control" name="contact_number" id="tb-fname5" value="{{$data->contact_number}}"/>
            <label for="tb-fname5">Contact Number</label>
            </div>
        </div>
        <div class="col-md-12" style="margin-bottom: 1.5%;">
            <div class="form-floating">
            <textarea rows="5" cols="5" id="tb-cpwd" class="form-control" style="height: 7rem;" name="permanent_address">{{$data->permanent_address}}</textarea>
            <label for="tb-cpwd">Permanent Address</label>
            </div>
        </div>
        <div class="col-md-12" style="margin-bottom: 1.5%;">
            <div class="form-floating">
            <textarea rows="5" cols="5" id="tb-cpwd1" class="form-control" style="height: 7rem;" name="present_address">{{$data->present_address}}</textarea>
            <label for="tb-cpwd1">Present Address</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="father_name" id="tb-email3" value="{{$data->father_name}}"/>
            <label for="tb-email3">Father Name</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="mother_name" id="tb-fname6" value="{{$data->mother_name}}"/>
            <label for="tb-fname6">Mother Name</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" id="tb-email4" value="{{$data->email}}"/>
            <label for="tb-email4">Email Address</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="father_occupation" id="tb-fname7" value="{{$data->father_occupation}}"/>
            <label for="tb-fname7">Father Occupation</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="mother_occupation" id="tb-email5" value="{{$data->mother_occupation}}"/>
            <label for="tb-email5">Mother Occupation</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input type="text" class="form-control" name="place_of_work" id="tb-pwd6" value="{{$data->place_of_work}}"/>
            <label for="tb-pwd6">Place Of Work</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input type="integer" class="form-control" name="father_income" id="tb-pwd7" value="{{$data->father_income}}"/>
            <label for="tb-pwd7">Father Income</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="integer" class="form-control" name="mother_income" id="tb-fname8" value="{{$data->mother_income}}"/>
            <label for="tb-fname8">Mother Income</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="emis_number" id="tb-email6" value="{{$data->emis_number}}"/>
            <label for="tb-email6">EMIS Number</label>
            </div>
        </div>
        <div class="col-12" style="margin-top: 1%;">
            <div class="ms-auto mt-3 mt-md-0">
                <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                <div class="d-flex align-items-center">
                    <i class="ti ti-send me-2 fs-4"></i>
                    Update Student Details
                </div>
                </button>
            </div>
        </div>
        </div>
    </form>
    </div>
    <div class="modal-footer">
        <button type="button"
        class="btn bg-danger-subtle text-danger font-medium waves-effect text-start"
        data-bs-dismiss="modal">
        Close Edit
        </button>
    </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<div class="modal fade" id="feesmodal" tabindex="-1" aria-labelledby="mySmallModalLabel"
                        aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header d-flex align-items-center">
            <h4 class="modal-title" id="myLargeModalLabel">
            Extra Fees
            </h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="{{url('extra_fees',$data->id)}}" method="post">
        @csrf
            <div class="row">
            <div class="col-md-9">
                <div class="form-floating mb-3">
                    <input class="form-control" style="border-radius: 20px;" name="extra_fees" type="number" placeholder="Enter Extra Fee">
                <label for="tb-fname">Extra Fees</label>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <button type="submit" style="border-radius: 18px;" class="btn btn-primary">Enter</button>
            </div>
        </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn bg-danger-subtle text-danger font-medium waves-effect"
            data-bs-dismiss="modal">
            Close
            </button>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
@endpush

@push('javascript')
<script>

</script>
@endpush