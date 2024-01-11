@extends('layouts.main')
@section('title','Holiday List')
@push('internalCss')
@endpush

@push('bodycontent')
<div class="card shadow-none position-relative overflow-hidden mb-4">
  <div class="card-body d-flex align-items-center justify-content-between p-4">
    <h4 class="fw-semibold mb-0">Total Days</h4>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <h4 class="breadcrumb-item" aria-current="page">{{$data}}</h4>
      </ol>
    </nav>
  </div>
</div>
<div class="row">
    <div class="card">
        <div class="card-body">
        <div class="mb-2">
            <h5 class="mb-0">Holiday List</h5>
        </div>
        <div class="table-responsive">
            <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
            <thead>
                <tr>
                <th><h5>S.No</h5></th>
                <th><h5>Name</h5></th>
                <th><h5>Date</h5></th>
                <th><h5>To Date</h5></th>
                <th><h5>Number Of Days</h5></th>
                </tr>
            </thead>
            <tbody>
                @foreach($values as $values)
                <tr>
                <td><h6>{{$values->id}}</h6></td>
                <td>{{$values->holiday_name}}</td>
                <td>{{$values->fromdate}}</td>
                <td>{{$values->todate}}</td>
                <td><h6>{{$values->number_of_days}}</h6></td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>
@endpush

@push('javascript')
@endpush
