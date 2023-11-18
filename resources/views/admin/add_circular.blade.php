@extends('layouts.main')
@section('title','Add Circular')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')

<div class="page-wrapper" style="min-height: 742px;">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xl-12">
            
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Add Circular</h3>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <div class="card">
                    <form action="add_circular" method="post">
                        @csrf 
                        <div class="card-body">
                            <div class="bank-inner-details">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" id="date" class="form-control" name="published_at" value="{{ now()->format('Y-m-d') }}">
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Title<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="title" placeholder="Enter Title" >
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label class="col-form-label col-md-2">Content<span class="text-danger">*</span></label>
                                            <div class="col-md-10">
                                                <textarea rows="5" cols="5" class="form-control" placeholder="Enter Circular content" name="description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" blog-categories-btn pt-0">
                            <div class="bank-details-btn ">
                                <button type="submit" class="btn btn-primary">Add Circular</button>
                            </div>
                        </div>
                    </form>
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