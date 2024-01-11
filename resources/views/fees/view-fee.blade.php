@extends('layouts.main')
@section('title','Fees List')
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
@if(session('message'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
	<span>   {{ session('message') }} </span>
    </div>
@endif
<div class="card shadow-none position-relative overflow-hidden mb-4">
  <div class="card-body d-flex align-items-center justify-content-between p-4">
    <h4 class="fw-semibold mb-0">Fee Details</h4>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a class="text-muted text-decoration-none" href="/">Home</a>
        </li>
        <li class="breadcrumb-item" aria-current="page">Fee Details</li>
      </ol>
    </nav>
  </div>
</div>
<div class="card">
<div class="card-body">
    <div class="mb-4 pb-2 align-items-center">
    <h5 class="mb-0">All Students Fee Details</h5>
    </div>
    <div class="table-responsive">
        <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
        <thead>
        <tr>
            <th>Name</th>
            <th>Class</th>
            <th>Total Amount</th>
            <th>Paid Amount</th>
            <th>Status</th>
            <th>Enter Amount</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($values as $values)
            <tr>
                <td>{{$values->name}}</td>
                <td><h5>{{$values->class_name}}</h5></td>
                <td>{{$values->fees+$values->extra_fees}}</td>
                <td>{{$values->paid_fees+$values->extra_paid_fees}}</td>
                <td>{{$values->fee_status}}</td>
                <form action="updatefee/{{$values->id}}" method="post">
                    @csrf
                    <td><input class="form-control" name="update_amount" type="number" placeholder="Enter Amount"></td>
                    <td class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </td>
                </form>
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
