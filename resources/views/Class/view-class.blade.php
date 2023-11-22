@extends('layouts.main')
@section('title','All Student')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')
<!-- Page Wrapper -->
<div class="page-wrapper">
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
     <span>   {{ session('success') }} </span>
    </div>
@endif
  <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="page-title">Class</h3>
        </div>
      </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
      <div class="col-sm-12">
        <div class="card card-table">
          <div class="card-body">
            <!-- Page Header -->
            <div class="page-header">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="page-title">Class</h3>
                </div>
                <div class="col-auto text-end float-end ms-auto download-grp">
                  <!-- <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a> -->
                  <a href="add-class" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- /Page Header -->
            <div class="table-responsive">
              <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                <thead class="student-thread">
                  <tr>
                    <th>Class Name</th>
                    <th>Class</th>
                    <th>Class Section</th>
                    <th class="text-end">View</th>
                    <th class="text-end">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($values as $values)
                  <tr>
                    <td>
                      <h2>
                        <a>{{$values->ClassID}}</a>
                      </h2>
                    </td>
                    <td>{{$values->Class}}</td>
                    <td>{{$values->section}}</td>
                    <td class="text-end">
                      <div class="actions">
                        <a href="/classstudents/{{$values->id}}" class="btn btn-sm bg-danger-light">
                          <i class="fa fa-eye"></i>
                        </a>
                      </div>
                    </td>
                    <td>
                      <div class="actions">
                        <a href="/editclass/{{$values->id}}" class="btn btn-sm bg-danger-light">
                          <i class="feather-edit"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Page Wrapper -->

@endpush

@push('javascript')
<script>
    setTimeout(function() {
        $(".alert").alert('close');
    }, 3000);
</script>
@endpush