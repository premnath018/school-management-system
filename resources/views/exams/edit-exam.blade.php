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
                                            <td class="font-medium text-dark-medium">{{$data->exam_name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Class:</td>
                                            <td class="font-medium text-dark-medium">{{$data->class}}</td>
                                        </tr>
                                        <tr>
                                            <td>Subject:</td>
                                            <td class="font-medium text-dark-medium">{{$data->subject}}</td>
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
                                            <td class="font-medium text-dark-medium">{{$data->date_of_event}}</td>
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
                                    <label>Exam Name</label>
                                    <input type="text" class="form-control" name="exam_name" value="{{$data->exam_name}}" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Class</label>
                                    <select class="form-control select" name="class">
                                        <option>Select Class</option>
                                        <option {{$data->class === 'LKG' ? 'selected' : ''}}>LKG</option>
                                        <option {{$data->class === 'UKG' ? 'selected' : ''}}>UKG</option>
                                        <option {{$data->class === '1' ? 'selected' : ''}}>1</option>
                                        <option {{$data->class === '2' ? 'selected' : ''}}>2</option>
                                        <option {{$data->class === '3' ? 'selected' : ''}}>3</option>
                                        <option {{$data->class === '4' ? 'selected' : ''}}>4</option>
                                        <option {{$data->class === '5' ? 'selected' : ''}}>5</option>
                                        <option {{$data->class === '6' ? 'selected' : ''}}>6</option>
                                        <option {{$data->class === '7' ? 'selected' : ''}}>7</option>
                                        <option {{$data->class === '8' ? 'selected' : ''}}>8</option>
                                        <option {{$data->class === '9' ? 'selected' : ''}}>9</option>
                                        <option {{$data->class === '10' ? 'selected' : ''}}>10</option>
                                        <option {{$data->class === '11' ? 'selected' : ''}}>11</option>
                                        <option {{$data->class === '12' ? 'selected' : ''}}>12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" class="form-control" name="subject" value="{{$data->subject}}" />
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
                                    <input type="date" class="form-control" name="date_of_event" value="{{$data->date_of_event}}" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">

                <div class="card card-table comman-shadow">
                    <div class="card-body">

                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Students</h3>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Header -->

                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>
                                            <div class="form-check check-tables">
                                                <input class="form-check-input" type="checkbox" value="something">
                                            </div>
                                        </th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>Class ID</th>
                                        <th>Subject</th>
                                        <th class="text-end">Enter Mark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- For Loop Start -->
                                    <tr>
                                        <td>
                                            <div class="form-check check-tables">
                                                <input class="form-check-input" type="checkbox" value="something">
                                            </div>
                                        </td>
                                        <td>ID</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <!-- <a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a> -->
                                                <a>Name</a>
                                            </h2>
                                        </td>
                                        <td>Batch</td>
                                        <td>ClassID</td>
                                        <td>Subject</td>
                                        <td class="text-end">
                                            <div class="actions"><input style="width:70%;" class="form-control" name="student_mark" type="number" placeholder="Student Mark">
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- For loop ends -->
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