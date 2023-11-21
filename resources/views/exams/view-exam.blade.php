@extends('layouts.main')
@section('title','All Exams')
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
              <h3 class="page-title">Exam</h3>
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
                      <h3 class="page-title">Exam</h3>
                    </div>
                    <div class="col-auto text-end float-end ms-auto download-grp">
                      <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
                      <a href="addexam" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                    </div>
                  </div>
                </div>
                <!-- /Page Header -->
                <div class="table-responsive">
                  <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                    <thead class="student-thread">
                      <tr>
                        <th>Exam Name</th>
                        <th>Class</th>
                        <th>Subject</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Date</th>
                        <th class="">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($values as $values)
                      <tr>
                        <td>
                          <h2>
                            <a>{{$values->exam_code}}</a>
                          </h2>
                        </td>
                        <td>{{$values->class_name}}</td>
                        <td>{{$values->subject_name}}</td>
                        <td>{{$values->start_time}}</td>
                        <td>{{$values->end_time}}</td>
                        <td>{{$values->exam_date}}</td>
                        <td >
                        <div>
                        <a href="/marklist/{{$values->id}}" class="btn btn-sm bg-danger-light">
                          <i class="fa fa-eye"></i>
                        </a>
                            <a href="/editexam/{{$values->id}}" class="btn btn-sm bg-danger-light">
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
@endpush

@push('javascript')
<script>

</script>
@endpush