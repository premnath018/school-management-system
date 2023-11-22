@extends('layouts.main')
@section('title','All Student')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')
<!-- Page Wrapper -->
<div class="page-wrapper">
  <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="page-title">Info</h3>
        </div>
      </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
      <div class="col-sm-12">
        @if($data)  
        <div class="card comman-shadow">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Total Days</h3>
                        </div>
                        <div class="col-auto text-end float-end ms-auto download-grp">  
                            <h3 class="page-title">{{$data}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="card card-table">
          <div class="card-body">
            <!-- Page Header -->
            <div class="page-header">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="page-title">Holiday</h3>
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
                    <th>S.No</th>
                    <th>Holiday Name</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Number Of Days</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($values as $values)
                  <tr>
                    <td>
                      <h2>
                        <a>{{$values->id}}</a>
                      </h2>
                    </td>
                    <td>{{$values->holiday_name}}</td>
                    <td>{{$values->fromdate}}</td>
                    <td>{{$values->todate}}</td>
                    <td>{{$values->number_of_days}}</td>
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

</script>
@endpush