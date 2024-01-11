@extends('layouts.main')
@section('title','View Teacher')
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
@if(session('message'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
	<span>   {{ session('message') }} </span>
    </div>
@endif
<div class="card shadow-none position-relative overflow-hidden mb-4">
  <div class="card-body d-flex align-items-center justify-content-between p-4">
    <h4 class="fw-semibold mb-0">Teachers List</h4>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <button class="btn btn-primary w-100 justify-content-center me-2 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#usermodal">Add User</button>
      </ol>
    </nav>
  </div>
</div>
<div class="card">
<div class="card-body">
    <div class="table-responsive pb-4">
    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
        <thead>
        <tr>
            <th>Teacher ID</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Work Experience</th>
            <th>Salary</th>
            <th>Contact Number</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($values as $values)
            <tr>
                <td>{{$values->teacher_id}}</td>
                <td><h6 class="table-avatar">{{$values->name}}</h6></td>
                <td>{{$values->subject}}</td>
                <td>{{$values->total_experience}}</td>
                <td>{{$values->salary}}</td>
                <td>{{$values->contact_number}}</td>
                <td class="text-center">
                <a href="/leaveapply/{{$values->id}}" class="btn btn-sm bg-danger-light link-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Leave Apply">
                    <i class="ti ti-calendar fs-7"></i>
                </a>
                <a href="/teacherprofile/{{$values->id}}" class="btn btn-sm bg-danger-light link-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Details">
                    <i class="ti ti-pencil fs-7"></i>
                </a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>
</div>
<div id="usermodal" class="modal fade" tabindex="-1"
  aria-labelledby="bs-example-modal-md" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header d-flex align-items-center">
        <h4 class="modal-title" id="myModalLabel">
          Add User
        </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/register" method="post">
      @csrf
          <div class="mb-9">
          <label for="text-email" class="form-label text-dark fw-bold">Mail</label>
          <input type="text" name="email" class="form-control py-6" id="text-email">
          </div>
          <div class="mb-7">
          <label for="text-pwd" class="form-label text-dark fw-bold">Username</label>
          <input type="text" name="name" class="form-control py-6" id="text-pwd" >
          </div>
          <div class="mb-7">
          <label for="text-pwd" class="form-label text-dark fw-bold">Password</label>
          <input type="password" name="password" class="form-control py-6" id="text-pwd" >
          </div>
          <button class="btn btn-primary w-100 mb-7 rounded-pill">Sign Up</button>
          </div>
      </form>
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