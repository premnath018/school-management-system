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

        <div class="row">
            <div class="col-sm-12">
            <div class="card comman-shadow">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Mark List</h3>                                
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
                                            <td>Exam Code:</td>
                                            <td class="font-medium text-dark-medium">SOC22</td>
                                        </tr>
                                        <tr>
                                            <td>Class:</td>
                                            <td class="font-medium text-dark-medium">9 C</td>
                                        </tr>
                                        <tr>
                                            <td>Subject:</td>
                                            <td class="font-medium text-dark-medium">Social Science</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

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
                                        <th>Name</th>
                                        <th class="text-end">Enter Mark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form action="{{url('updateMarks',$data->id)}}" method="post">
                                        @csrf
                                        <!-- For Loop Start -->
                                        @foreach($values as $student)
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a>{{ $student->name }}</a>
                                                </h2>
                                            </td>
                                            <td class="text-end">
                                                <div class="actions"><input style="width:70%;" class="form-control" name="student_marks[{{ $student->id }}]" type="number" placeholder="Student Mark">
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach

                                        <!-- For loop ends -->
                                </tbody>
                            </table>
                            <br>
                            <div class="student-submit text-end">
                                <button type="submit" class="btn btn-primary">Enter Marks</button>
                            </div>
                        </div>
                        </form>

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