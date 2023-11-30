@extends('layouts.main')
@section('title','Edit Exam')
@push('internalCss')
<style>
    .hideEdit {
        display: none;
    }

    .single-info-details {
        padding: 0 30px;
    }
    #Del-Btn{
        border:none;
    }
</style>
@endpush

@push('bodycontent')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Class</h3>
                        <ul class="breadcrumb">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Exam Info</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <input type="button" id="viewedit" class="btn btn-primary" value="Edit Info" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-info-details">
                        <div class="item-content">
                            <div class="info-table table-responsive">
                                <table class="table text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>Exam Name:</td>
                                            <td class="font-medium text-dark-medium">{{$data->exam_code}}</td>
                                        </tr>
                                        <tr>
                                            <td>Class:</td>
                                            <td class="font-medium text-dark-medium">{{$data->class_name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Subject:</td>
                                            <td class="font-medium text-dark-medium">{{$data->subject_name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Start Time:</td>
                                            <td class="font-medium text-dark-medium">{{$data->start_time}}</td>
                                        </tr>
                                        <tr>
                                            <td>End Time:</td>
                                            <td class="font-medium text-dark-medium">{{$data->end_time}}</td>
                                        </tr>
                                        <tr>
                                            <td>Date:</td>
                                            <td class="font-medium text-dark-medium">{{$data->exam_date}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hideEdit card-body" id="editform">
                    <form action="{{url('updateexam',$data->id)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title student-info">Edit Info<span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                            </div>
                            <!-- Changes -->                            
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Class</label>
                                    <select class="form-control select" name="class_id">
                                        <option>Select Class</option>
                                        @foreach($classes as $class)
                                            <option value="{{ $class->id }}" {{$data->class_id === $class->id ? 'selected' : ''}}>{{$class->ClassID}}</option>         
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                            <label>Subject</label>
                                            <select class="form-control select" name="subject_code">
                                                <option>Select Subject</option>
                                                @foreach($subjects as $subject)
                                                <option value="{{ $subject->subject_code }}" {{$data->subject_code === $subject->subject_code ? 'selected' : ''}}>{{$subject->subject_name}}</option>         
                                                @endforeach  
                                            </select>
                                        </div>
                                </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Start Time</label>
                                    <input type="time" class="form-control" name="start_time" value="{{$data->start_time}}" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class form-group>
                                    <label>End Time</label>
                                    <input type="time" class="form-control" name="end_time" value="{{$data->end_time}}" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Event Date</label>
                                    <input type="date" class="form-control" name="exam_date" value="{{$data->exam_date}}" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <input type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#con-close-modal" value="Delete Exam" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content card-body">
                        <div class="modal-body p-4">
                                <div class="text-center">
                                    <i class="dripicons-information h1 text-info"></i>
                                    <h4 class="mt-2">Heads up!</h4>
                                    <p class="mt-3">Do you want to Delete the student?</p>
                                    <button type="button" class="btn btn-danger my-2" data-bs-dismiss="modal">Delete Exam</button>
                                    <button type="button" class="btn btn-success my-2" data-bs-dismiss="modal">Decline</button>
                                </div>
                            </div>
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
    document.getElementById("viewedit").addEventListener('click', function() {
        document.getElementById('editform').classList.toggle("hideEdit");
        if (document.getElementById("viewedit").value == 'Edit Info') {
            document.getElementById("viewedit").value = 'Close Edit'
        } else {
            document.getElementById("viewedit").value = 'Edit Info'
        }
        document.getElementById("AddStd").setAttribute = 'disabled'
    });
    document.getElementById("AddStd").addEventListener('click', function() {
        document.getElementById('SearchStudent').classList.toggle("hideEdit");
        if (document.getElementById("AddStd").value == 'Add Student') {
            document.getElementById("AddStd").value = 'Close Add Student'
        } else {
            document.getElementById("AddStd").value = 'Add Student'
        }
    });
</script>
@endpush