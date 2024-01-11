@extends('layouts.main')
@section('title','Teacher Profile')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
<span>   {{ session('success') }} </span>
</div>
@endif
<div class="card shadow-none position-relative overflow-hidden mb-4">
  <div class="card-body d-flex align-items-center justify-content-between p-4">
    <h4 class="fw-semibold mb-0">Teacher details</h4>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a class="text-muted text-decoration-none" href="/">Home</a>
        </li>
        <li class="breadcrumb-item" aria-current="page">Teacher details</li>
      </ol>
    </nav>
  </div>
</div>
<div class="row">
<div class="col-lg-4">
    <div class="card">
    <div class="card-body">
        <div class="text-center">
        <img src="{{asset('assets/images/profile/user-2.jpg')}}" width="110" class="rounded-3 mb-3" alt="" />
        <h5 class="mb-1">{{$data->name}}</h5>
        <span class="badge bg-primary-subtle text-primary fw-light rounded-pill">Teacher</span>
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

        <div class="mt-5">
        <div class="pb-1 mb-2 border-bottom">
            <h6>Details</h6>
        </div>

        <ul>
            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Name:
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
                Class:
                <span class="fw-light text-secondary ms-1">{{$data->name}}</span>
            </p>
            </li>

            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Date Of Joining:
                <span class="fw-light text-secondary ms-1">{{$data->date_of_joining}}</span>
            </p>
            </li>

            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Date Of Birth:
                <span class="fw-light text-secondary ms-1">{{$data->dob}}</span>
            </p>
            </li>

            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Id:
                <span class="fw-light text-secondary ms-1">{{$data->teacher_id}}</span>
            </p>
            </li>

            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Contact:
                <span class="fw-light text-secondary ms-1">{{$data->contact_number}},{{$data->emergency_contact_number}}</span>
            </p>
            </li>

            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Email:
                <span class="fw-light text-secondary ms-1">{{$data->email}}</span>
            </p>
            </li>
            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Address:
                <span class="fw-light text-secondary ms-1">{{$data->permanent_address}}</span>
            </p>
            </li>
        </ul>

        <div class="row mt-4">
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
        </div>
        </div>
    </div>
    </div>
</div>

<div class="col-lg-8">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item me-2" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
        type="button" role="tab" aria-controls="home" aria-selected="true">
        Teacher Experience
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
        role="tab" aria-controls="profile" aria-selected="false">
        Salary
        </button>
    </li>
    </ul>

    <div class="card mt-4">
    <div class="card-body">
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="mb-4 border-bottom pb-3">
            <h5 class="mb-0">Teacher Experience</h5>
            </div>
            <ul>
            <li class="py-2">
            <p class="fw-normal text-dark mb-0">
                Work Experience:
                <span class="fw-light text-secondary ms-1">{{$data->previous_work_experience}}</span>
            </p>
            </li>
            <div class="table-responsive overflow-x-auto">
            <table class="table align-middle text-nowrap">
                <thead>
                <tr>
                    <th scope="col">Code</th>
                    <th scope="col">
                    Subject Name
                    </th>
                    <th scope="col">Experience</th>
                </tr>
                </thead>
                <tbody class="border-top">
                <tr>
                    <td>
                    <p class="fw-normal mb-0 fs-3 text-dark">
                        {{$data->subject}}
                    </p>
                    </td>
                    <td>
                    <p class="text-dark mb-0 fw-normal">
                        {{$data->subject}}
                    </p>
                    </td>
                    <td>
                    <p class="fw-bold text mb-0">{{$data->total_experience}}</p>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="mb-4 border-bottom pb-3">
            <h5 class="mb-0">Salary Report</h5>
            </div>
            <div class="d-flex justify-content-between align-items-start">
            <span class="badge text-bg-primary">Teaching</span>
            <div class="d-flex justify-content-center">
                <sup class="h5 mt-3 mb-0 me-1 text-primary">₹</sup>
                <h1 class="display-5 mb-0 text-primary">{{$data->salary}}</h1>
                <sub class="fs-6 pricing-duration mt-auto mb-3">/ month</sub>
            </div>
            </div>
            <ul class="g-2 my-4">
            <li class="mb-2 align-middle">
                <i class="ti ti-circle-check fs-5 me-2 text-success"></i>
                3 Periods per day
            </li>

            <li class="mb-2 align-middle">
                <i class="ti ti-circle-check fs-5 me-2 text-success"></i>
                Included Documents
            </li>

            <li class="mb-2 align-middle">
                <i class="ti ti-circle-check fs-5 me-2 text-success"></i>
                Free Books
            </li>

            <li class="mb-2 align-middle">
                <i class="ti ti-circle-check fs-5 me-2 text-success"></i>
                Students Help Salary
            </li>
            </ul>
            <div class="d-flex justify-content-between align-items-center mb-1">
            <span>Days</span>
            <span>75% Completed</span>
            </div>
            <div class="progress bg-primary-subtle mb-1">
            <div class="progress-bar text-bg-primary w-75" role="progressbar" aria-valuenow="75"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <span>4 days remaining</span>
            <div class="d-grid w-100 mt-4 pt-2">
            <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">
                Pay Full Salary
            </button>
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
        <h5 class="mt-2">Do you want to Delete the Teacher Details?</h5>
        <form action="{{url('deleteteacher',$data->id)}}" method="post">
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
    <form action="{{ route('updateteacher', ['id' => $data->id]) }}" method="post">
    @csrf
        <div class="row">
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" id="tb-fname" value="{{$data->name}}"/>
            <label for="tb-fname">Full Name</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="teacher_id" id="tb-email" value="{{$data->teacher_id}}"/>
            <label for="tb-email">Teacher ID</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input type="date" class="form-control" name="date_of_joining" id="tb-pwd" value="{{$data->date_of_joining}}"/>
            <label for="tb-pwd">Date Of Join</label>
            </div>
        </div>
        <div class="col-md-12" style="margin-bottom: 1.5%;">
            <div class="form-floating">
            <textarea rows="5" cols="5" id="tb-cpwd" class="form-control" style="height: 7rem;" name="permanent_address">{{$data->permanent_address}}</textarea>
            <label for="tb-cpwd">Permanent Address</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <select class="form-control select" id="tb-fname1" name="gender" value="{{$data->name}}">
                <option>Select Gender</option>
                <option value="Female" {{  $data->gender === 'Female' ? 'selected' : ''}}>Female</option>
                <option value="Male" {{  $data->gender === 'Male' ? 'selected' : ''}}>Male</option>
                <option value="Others" {{ $data->gender === 'Others' ? 'selected' : ''}}>Others</option>
            </select>
            <label for="tb-fname1">Gender</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="date" class="form-control" name="dob" id="tb-email1" min="2000-01-01" max="2025-12-31" step="1" value="{{$data->dob}}"/>
            <label for="tb-email1">Date Of Birth</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input type="number" min="3" name="age" step="1" class="form-control" id="tb-pwd1" value="{{$data->age}}"/>
            <label for="tb-pwd1">Age</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="integer" name="contact_number" class="form-control" id="tb-fname2" value="{{$data->contact_number}}"/>
            <label for="tb-fname2">Contact Number</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="tb-email2" value="{{$data->email}}"/>
            <label for="tb-email2">Email Address</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="integer" name="emergency_contact_number" class="form-control" id="tb-fname3" value="{{$data->emergency_contact_number}}"/>
            <label for="tb-fname3">Emergency Contact Number</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" name="previous_work_experience" class="form-control" id="tb-email3" value="{{$data->previous_work_experience}}"/>
            <label for="tb-email3">Work Experience</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="number" name="total_experience" class="form-control" id="tb-fname4" value="{{$data->total_experience}}"/>
            <label for="tb-fname4">Total Experience</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <select class="form-control select" id="tb-fname5" name="subject">
                <option>Please Select Subject </option>
                <option value="Tamil" {{  $data->subject === 'Tamil' ? 'selected' : ''}}>Tamil</option>
                <option value="English" {{  $data->subject === 'English' ? 'selected' : ''}}>English</option>
                <option value="Maths" {{  $data->subject === 'Maths' ? 'selected' : ''}}>Maths</option>
                <option value="SocialScience" {{  $data->subject === 'SocialScience' ? 'selected' : ''}}>SocialScience</option>
                <option value="Physics" {{  $data->subject === 'Physics' ? 'selected' : ''}}>Physics</option>
                <option value="Chemistry" {{  $data->subject === 'Chemistry' ? 'selected' : ''}}>Chemistry</option>
                <option value="Zoology" {{  $data->subject === 'Zoology' ? 'selected' : ''}}>Zoology</option>
                <option value="Botany" {{  $data->subject === 'Botany' ? 'selected' : ''}}>Botany</option>
            </select>
            <label for="tb-fname5">Subject</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="integer" name="salary" class="form-control" id="tb-email4" value="{{$data->salary}}"/>
            <label for="tb-email4">Salary</label>
            </div>
        </div>
        <div class="col-12" style="margin-top: 1%;">
            <div class="ms-auto mt-3 mt-md-0">
                <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                <div class="d-flex align-items-center">
                    <i class="ti ti-send me-2 fs-4"></i>
                    Update Teacher Details
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
@endpush

@push('javascript')
<script>

</script>
@endpush