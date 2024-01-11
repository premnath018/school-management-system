@extends('layouts.main')
@section('title','Add Circular')
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
    <h5 class="mb-3">Add Circular</h5>
    <form action="/addcircular" method="post">
        @csrf
        <div class="row">
        <div class="col-md-6">
            <div class="form-floating mb-3">
            <input type="date" class="form-control" name="published_at" value="{{ now()->format('Y-m-d') }}"/>
            <label for="tb-fname">Date</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="title"/>
            <label for="tb-email">Title</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
            <textarea rows="5" cols="5" id="tb-cpwd" class="form-control" style="height: 10rem;" name="description"></textarea>
            <label for="tb-cpwd">Content</label>
            </div>
        </div>
        <div class="col-12" style="margin-top: 1%;">
            <div class="ms-auto mt-3 mt-md-0">
                <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                <div class="d-flex align-items-center">
                    <i class="ti ti-send me-2 fs-4"></i>
                    Add Circular
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