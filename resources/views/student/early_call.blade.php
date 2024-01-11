@extends('layouts.main')
@section('title','Early Calling Entry')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')
<div class="card">
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
     <span>   {{ session('success') }} </span>
    </div>
@endif
    <div class="card-body">
    <h5 class="mb-3">Early Calling Register</h5>
    <form action="/earlycall" method="post">
    @csrf
        <div class="row">
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" id="tb-fname"/>
            <label for="tb-fname">Student Name</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <select class="form-control select select2-hidden-accessible" aria-hidden="true" id="tb-email" name="class_id">
                <option>Select Option</option>
                    <!-- Loop Start -->
                    @foreach($values as $values)
                    <option value="{{$values->id}}">{{$values->ClassID}}</option>
                    @endforeach
                    <!-- Loop Ends  -->
            </select>
            <label for="tb-email">Class ID</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input name="date" type="date" value="{{ now()->format('Y-m-d') }}" class="form-control" id="tb-pwd"/>
            <label for="tb-pwd">Date</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input type="time" name="time" class="form-control" id="tb-cpwd"/>
            <label for="tb-cpwd">Time</label>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-floating mb-3">
            <input type="text" name="reason" class="form-control" id="tb-email1"/>
            <label for="tb-email1">Reason</label>
            </div>
        </div>
        <div class="col-12" style="margin-top: 1%;">
            <div class="ms-auto mt-3 mt-md-0">
                <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                <div class="d-flex align-items-center">
                    <i class="ti ti-send me-2 fs-4"></i>
                    Add Entry
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
    <div class="mb-4 pb-2 align-items-center">
    <h5 class="mb-0">Registered List</h5>
    </div>
    <div class="table-responsive pb-4">
    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
    <thead>
    <tr>
        <th>Name</th>
        <th>Class ID</th>
        <th>Date</th>
        <th>Time</th>
        <th>Reason</th>
    </tr>
    </thead>
    <tbody>
    @foreach($calls as $call)
    <tr>
        <td><h6>{{$call->name}}</h6></td>
        <td>{{$call->class_id}}</td>
        <td>{{$call->date}}</td>
        <td>{{$call->time}}</td>
        <td>{{$call->reason}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    </div>
</div>
@endpush
@push('javascript')
<script>

</script>
@endpush