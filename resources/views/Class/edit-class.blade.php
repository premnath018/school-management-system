@extends('layouts.main')
@section('title','Edit Class')
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
                                    <h3 class="page-title">Class Info</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <input type="button" onclick="AddTea()" id="AddTea" class="btn btn-primary" value="Assign Teacher" />
                                    <input type="button" onclick="AddStd()" id="AddStd" class="btn btn-primary" value="Add Student" />
                                    <input type="button" id="viewedit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#con-close-modal" value="Edit Info" />
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
                                            <td>Class ID:</td>
                                            <td class="font-medium text-dark-medium">{{$data->ClassID}}</td>
                                        </tr>
                                        <tr>
                                            <td>Class:</td>
                                            <td class="font-medium text-dark-medium">{{$data->Class}}</td>
                                        </tr>
                                        <tr>
                                            <td>Section:</td>
                                            <td class="font-medium text-dark-medium">{{$data->section}}</td>
                                        </tr>
                                        <tr>
                                            <td>Fees:</td>
                                            <td class="font-medium text-dark-medium">{{$data->fees}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- sample modal content -->

                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content card-body">
                            <form action="{{url('updateclass',$data->id)}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title student-info">Edit Class <span><a href="javascript:;"></a></span></h5>
                                    </div>
                                    <!-- Changes -->
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms">
                                            <label>Class Name<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="ClassID" value="{{$data->ClassID}}" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms">
                                            <label>Class <span class="login-danger">*</span></label>
                                            <select class="form-control" name="Class">
                                                <option>Select Section</option>
                                                <option value="I" {{$data->Class === 'I' ? 'selected' : ''}}>I</option>
                                                <option value="II" {{  $data->Class === 'II' ? 'selected' : ''}}>II</option>
                                                <option value="III" {{  $data->Class === 'III' ? 'selected' : ''}}>III</option>
                                                <option value="IV" {{  $data->Class === 'IV' ? 'selected' : ''}}>IV</option>
                                                <option value="V" {{  $data->Class === 'V' ? 'selected' : ''}}>V</option>
                                                <option value="VI" {{  $data->Class === 'VI' ? 'selected' : ''}}>VI</option>
                                                <option value="VII" {{  $data->Class === 'VII' ? 'selected' : ''}}>VII</option>
                                                <option value="VIII" {{  $data->Class === 'VIII' ? 'selected' : ''}}>VIII</option>
                                                <option value="IX" {{  $data->Class === 'IX' ? 'selected' : ''}}>IX</option>
                                                <option value="X" {{  $data->Class === 'X' ? 'selected' : ''}}>X</option>
                                                <option value="XI" {{  $data->Class === 'XI' ? 'selected' : ''}}>XI</option>
                                                <option value="XII" {{  $data->Class === 'XII' ? 'selected' : ''}}>XII</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms">
                                            <label>Class Section
                                                <span class="login-danger">*</span></label>
                                            <select class="form-control" name="section">
                                                <option>Select Section</option>
                                                <option value="A" {{  $data->section === 'A' ? 'selected' : ''}}>A</option>
                                                <option value="B" {{  $data->section === 'B' ? 'selected' : ''}}>B</option>
                                                <option value="C" {{  $data->section === 'C' ? 'selected' : ''}}>C</option>
                                                <option value="D" {{  $data->section === 'D' ? 'selected' : ''}}>D</option>
                                                <option value="E" {{  $data->section === 'E' ? 'selected' : ''}}>E</option>
                                                <option value="F" {{  $data->section === 'F' ? 'selected' : ''}}>F</option>
                                                <option value="G" {{  $data->section === 'G' ? 'selected' : ''}}>G</option>
                                                <option value="H" {{  $data->section === 'H' ? 'selected' : ''}}>H</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms">
                                            <label>Fees<span class="login-danger">*</span></label>
                                            <input type="integer" class="form-control" value="{{$data->fees}}" name="fees" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary m-r-10">Submit</button>
                                            <button type="button" class="btn btn-primary border-0 bg-danger text-white" data-bs-toggle="modal" data-bs-target="#info-alert-modal">Delete Class</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.modal -->

                <div id="info-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-body p-4">
                                <div class="text-center">
                                    <i class="dripicons-information h1 text-info"></i>
                                    <h4 class="mt-2">Heads up!</h4>
                                    <p class="mt-3">Do you want to Delete class or remove all the students?</p>
                                    <button type="button" class="btn btn-danger m-r-10 my-2" data-bs-dismiss="modal">Remove Students</button>
                                    <form action="{{url('deleteclass',$data->id)}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger my-2" data-bs-dismiss="modal">Delete Class</button><br>
                                    </form>
                                    <button type="button" class="btn btn-success my-2" data-bs-dismiss="modal">Decline</button>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div class="hideEdit m-b-30" id="SearchStudent">
                <div class="student-group-form">
                    <form action="{{ route('editstudents.search', ['id' => $data->id]) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <input type="text" name="id" class="form-control" placeholder="Search by ID ...">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Search by Name ...">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <input type="text" name='enrollment_number' class="form-control" placeholder="Search by Enrollment number ...">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="search-student-btn">
                                <button type="btn" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead class="student-thread">
                                                <tr role="row">

                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 38.8625px;">Batch</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 75.4px;">Student ID </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Class: activate to sort column ascending" style="width: 37.2625px;">Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending" style="width: 51.1125px;">Enrollment No</th>
                                                    <th class="text-end sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 72px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- For Loop Start -->
                                                @foreach($values as $values)
                                                <tr role="row" class="odd">
                                                    <td>{{$values->batch}}</td>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="student-details.html">{{$values->id}}</a>
                                                        </h2>
                                                    </td>
                                                    <td>{{$values->name}}</td>
                                                    <td>{{$values->enrollment_number}}</td>
                                                    <td class="text-end">
                                                        <form action="{{url('studentclassadd', ['id_student' => $data->id . '-' . $values->id]) }}" method="post">
                                                            @csrf
                                                            <div class="actions ">
                                                                <button type="submit" class="btn btn-primary">Add</button>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                <!-- For loop ends -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hideEdit m-b-30" id="SearchTeacher">
                    <div class="student-group-form">
                    <form action="{{ route('editteachers.search', ['id' => $data->id]) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <input type="text" name="id" class="form-control" placeholder="Search by ID ...">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Search by Name ...">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="search-student-btn">
                                <button type="btn" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                    </form>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead class="student-thread">
                                                <tr role="row">

                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 38.8625px;">Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 75.4px;">Teacher ID </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Class: activate to sort column ascending" style="width: 37.2625px;">Email</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending" style="width: 51.1125px;">Contact No</th>
                                                    <th class="text-end sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 72px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- For Loop Start -->
                                                @foreach($details as $details)
                                                <tr role="row" class="odd">
                                                    <td>{{$details->name}}</td>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="student-details.html">{{$details->teacher_id}}</a>
                                                        </h2>
                                                    </td>
                                                    <td>{{$details->email}}</td>
                                                    <td>{{$details->contact_number}}</td>
                                                    <td class="text-end">
                                                        <form action="{{url('teacherclassadd', ['id_teacher' => $data->id . '-' . $details->id]) }}" method="post">
                                                            @csrf
                                                            <div class="actions ">
                                                                <button type="submit" class="btn btn-primary">Assign</button>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                <!-- For loop ends -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hideEdit card-body" id="editform">
                    <form action="{{url('updateclass',$data->id)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title student-info">Edit Class <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                            </div>
                            <!-- Changes -->
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Class Name<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" name="ClassID" value="{{$data->ClassID}}" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Class <span class="login-danger">*</span></label>
                                    <select class="form-control select" name="Class">
                                        <option>Select Section</option>
                                        <option value="I" {{$data->Class === 'I' ? 'selected' : ''}}>I</option>
                                        <option value="II" {{  $data->Class === 'II' ? 'selected' : ''}}>II</option>
                                        <option value="III" {{  $data->Class === 'III' ? 'selected' : ''}}>III</option>
                                        <option value="IV" {{  $data->Class === 'IV' ? 'selected' : ''}}>IV</option>
                                        <option value="V" {{  $data->Class === 'V' ? 'selected' : ''}}>V</option>
                                        <option value="VI" {{  $data->Class === 'VI' ? 'selected' : ''}}>VI</option>
                                        <option value="VII" {{  $data->Class === 'VII' ? 'selected' : ''}}>VII</option>
                                        <option value="VIII" {{  $data->Class === 'VIII' ? 'selected' : ''}}>VIII</option>
                                        <option value="IX" {{  $data->Class === 'IX' ? 'selected' : ''}}>IX</option>
                                        <option value="X" {{  $data->Class === 'X' ? 'selected' : ''}}>X</option>
                                        <option value="XI" {{  $data->Class === 'XI' ? 'selected' : ''}}>XI</option>
                                        <option value="XII" {{  $data->Class === 'XII' ? 'selected' : ''}}>XII</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Class Section
                                        <span class="login-danger">*</span></label>
                                    <select class="form-control select" name="section">
                                        <option>Select Section</option>
                                        <option value="A" {{  $data->section === 'A' ? 'selected' : ''}}>A</option>
                                        <option value="B" {{  $data->section === 'B' ? 'selected' : ''}}>B</option>
                                        <option value="C" {{  $data->section === 'C' ? 'selected' : ''}}>C</option>
                                        <option value="D" {{  $data->section === 'D' ? 'selected' : ''}}>D</option>
                                        <option value="E" {{  $data->section === 'E' ? 'selected' : ''}}>E</option>
                                        <option value="F" {{  $data->section === 'F' ? 'selected' : ''}}>F</option>
                                        <option value="G" {{  $data->section === 'G' ? 'selected' : ''}}>G</option>
                                        <option value="H" {{  $data->section === 'H' ? 'selected' : ''}}>H</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-primary border-0 bg-danger text-white" data-bs-toggle="modal" data-bs-target="#centermodal">Remove Students</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>


<!-- /Page Wrapper -->


@endpush

@push('javascript')
<script>
    document.getElementById("AddStd").addEventListener('click', function() {
        document.getElementById('SearchStudent').classList.toggle("hideEdit");
        if (document.getElementById("AddStd").value == 'Add Student') {
            document.getElementById("AddStd").value = 'Close Add Student'
        } else {
            document.getElementById("AddStd").value = 'Add Student'
        }
    });
    document.getElementById("AddTea").addEventListener('click', function() {
        document.getElementById('SearchTeacher').classList.toggle("hideEdit");
        if (document.getElementById("AddTea").value == 'Assign Teacher') {
            document.getElementById("AddTea").value = 'Close Assign Teacher'
        } else {
            document.getElementById("AddTea").value = 'Assign Teacher'
        }
    });
    setTimeout(function() {
        $(".alert").alert('close');
    }, 3000);
</script>
@endpush