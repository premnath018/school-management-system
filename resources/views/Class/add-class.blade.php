@extends('layouts.main')
@section('title','Add Class')
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
    <h5 class="mb-3">Add Class</h5>
    <form action="addclass" method="post">
    @csrf
        <div class="row">
        <div class="col-md-3">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="ClassID" id="tb-fname"/>
            <label for="tb-fname">Class Name</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating mb-3">
            <select class="form-control select" id="class" name="Class">
                <option>Select Section</option>
                <option>I</option>
                <option>II</option>
                <option>III</option>
                <option>IV</option>
                <option>V</option>
                <option>VI</option>
                <option>VII</option>
                <option>VIII</option>
                <option>IX</option>
                <option>X</option>
                <option>XI</option>
                <option>XII</option>
            </select>
            <label for="class">Class</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating mb-3">
            <select class="form-control select" id="section" name="section">
                <option>Select Section</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
                <option>E</option>
                <option>F</option>
                <option>G</option>
                <option>H</option>
            </select>
            <label for="section">Section</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
            <input type="integer" class="form-control" name="fees" id="tb-cpwd"/>
            <label for="tb-cpwd">Fees</label>
            </div>
        </div>
        <div class="col-12" style="margin-top: 1%;">
            <div class="ms-auto mt-3 mt-md-0">
                <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                <div class="d-flex align-items-center">
                    <i class="ti ti-send me-2 fs-4"></i>
                    Add Class
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