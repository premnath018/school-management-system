@extends('layouts.main')
@section('title','Recent Activity')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')

<div class="page-wrapper" style="min-height: 786px;">
    <div class="content container-fluid">  
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
                    <input type="text" name="enrollment_number" class="form-control" placeholder="Search by Enrollment number ...">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="search-student-btn">
                    <button type="btn" class="btn btn-primary">Search</button>
                </div>
            </div>
        </div>      
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Time</th>
                                        <th>Name</th>
                                        <th>Activity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Time</td>
                                        <td>Name</td>
                                        <td>Activity</td>
                                    </tr>
                                    <tr>
                                        <td>29.10.2023</td>
                                        <td>Praveen</td>
                                        <td>Created a class</td>
                                    </tr>
                                    <tr>
                                        <td>30.10.2023</td>
                                        <td>Premnath</td>
                                        <td>Created a Test</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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