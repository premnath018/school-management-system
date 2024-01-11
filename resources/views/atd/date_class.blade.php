@extends('layouts.main')
@section('title','Update Exam Marks')
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
@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
     <span>   {{ session('error') }} </span>
    </div>
@endif
<div class="card">
    <div class="card-body">
    <h5 class="mb-3">Enter Attendance</h5>
    <form action="classattendance" method="post">
    @csrf
        <div class="row">
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <select class="form-control select select2-hidden-accessible" aria-hidden="true" name="selected_class">
                <option>Please Select Class</option>
                @foreach($values as $class)
                    <option value="{{ $class->id }}">{{$class->ClassID}}</option>         
                @endforeach
            </select>
            <label for="tb-fname">Class</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="date" class="form-control" id="tb-email" value="{{ now()->format('Y-m-d') }}" disabled/>
            <input type="hidden" name="date" value="{{ now()->format('Y-m-d') }}" />
            <label for="tb-email">Date</label>
            </div>
        </div>
        <div class="col-12" style="margin-top: 1%;">
            <div class="ms-auto mt-3 mt-md-0">
                <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                <div class="d-flex align-items-center">
                    <i class="ti ti-send me-2 fs-4"></i>
                    Enter Attendance
                </div>
                </button>
            </div>
        </div>
        </div>
    </form>
    </div>
</div>
<div class="card">
    <div class="card-body">
    <h5 class="mb-3">View Attendance</h5>
    <form action="viewattendance" method="post">
    @csrf
        <div class="row">
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <select class="form-control select select2-hidden-accessible" aria-hidden="true" name="selected_class">
                <option>Please Select Class</option>
                @foreach($values as $class)
                    <option value="{{ $class->id }}">{{$class->ClassID}}</option>         
                @endforeach
            </select>
            <label for="tb-fname">Class</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="date" class="form-control" id="tb-email" name='date' max="{{ now()->format('Y-m-d') }}"/>
            <label for="tb-email">Date</label>
            </div>
        </div>
        <div class="col-12" style="margin-top: 1%;">
            <div class="ms-auto mt-3 mt-md-0">
                <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                <div class="d-flex align-items-center">
                    <i class="ti ti-send me-2 fs-4"></i>
                    View Attendance
                </div>
                </button>
            </div>
        </div>
        </div>
    </form>
    </div>
</div>
@endpush
@push('javascript')
<script>

</script>
@endpush