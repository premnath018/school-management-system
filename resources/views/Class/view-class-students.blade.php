@extends('layouts.main')
@section('title','Class Students')
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
                                    <input type="button" id="viewedit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#con-close-modal" value="Assign RollNo" />
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
                                            <td>Class Teacher:</td>
                                            <td class="font-medium text-dark-medium">{{$data->teacher_id ? $data->name : 'No Teacher has been assigned'}}</td>
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
                <div class="m-b-30" id="SearchStudent">
                    <div class="student-group-form">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search by ID ...">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search by Name ...">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="search-student-btn">
                                    <button type="btn" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
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
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 72px;">Class Name</th>
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
                                                    <td>{{$data->Class.'-'.$data->section}}</td>
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

                <!-- sample modal content -->

                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content card-body">
                        <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead class="student-thread">
                                                <tr role="row">

                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 38.8625px;">Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 75.4px;">Roll No</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- For Loop Start -->
                                                <tr role="row" class="odd">
                                                    <td>Name</td>
                                                    <td>
                                                        <input type="integer" class="form-control" placeholder="RollNo" name="fees">
                                                    </td>
                                                </tr>
                                                <!-- For loop ends -->
                                            </tbody>
                                        </table>    
                        </div>
                    </div>
                </div><!-- /.modal -->

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