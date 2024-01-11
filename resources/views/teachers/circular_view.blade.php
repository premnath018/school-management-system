@extends('layouts.main')
@section('title','Circular View')
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
<div class="card shadow-none position-relative overflow-hidden mb-4">
  <div class="card-body d-flex align-items-center justify-content-between p-4">
    <h4 class="fw-semibold mb-0">Circulars</h4>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a class="text-muted text-decoration-none" href="/">Home</a>
        </li>
        <li class="breadcrumb-item" aria-current="page">Circulars</li>
      </ol>
    </nav>
  </div>
</div>
<ul class="nav nav-pills p-3 mb-3 rounded align-items-center card flex-row">
<li class="nav-item">
    <a href="javascript:void(0)" class="
            nav-link
        
            note-link
            d-flex
            align-items-center
            justify-content-center
            active
            px-3 px-md-3
            me-0 me-md-2 text-body-color
        " id="all-category">
    <i class="ti ti-list fill-white me-0 me-md-1"></i>
    <span class="d-none d-md-block font-weight-medium">All Circulars</span>
    </a>
</li>
<!-- <li class="nav-item">
    <a href="javascript:void(0)" class="
            nav-link
        
            note-link
            d-flex
            align-items-center
            justify-content-center
            px-3 px-md-3
            me-0 me-md-2 text-body-color
        " id="note-business">
    <i class="ti ti-briefcase fill-white me-0 me-md-1"></i>
    <span class="d-none d-md-block font-weight-medium">Business</span>
    </a>
</li>
<li class="nav-item">
    <a href="javascript:void(0)" class="
            nav-link
        
            note-link
            d-flex
            align-items-center
            justify-content-center
            px-3 px-md-3
            me-0 me-md-2 text-body-color
        " id="note-social">
    <i class="ti ti-share fill-white me-0 me-md-1"></i>
    <span class="d-none d-md-block font-weight-medium">Social</span>
    </a>
</li>
<li class="nav-item">
    <a href="javascript:void(0)" class="
            nav-link
        
            note-link
            d-flex
            align-items-center
            justify-content-center
            px-3 px-md-3
            me-0 me-md-2 text-body-color
        " id="note-important">
    <i class="ti ti-star fill-white me-0 me-md-1"></i>
    <span class="d-none d-md-block font-weight-medium">Important</span>
    </a>
</li> -->
<li class="nav-item ms-auto">
    <a href="/addcircular" class="btn btn-primary d-flex align-items-center px-3" id="add-notes">
    <i class="ti ti-file me-0 me-md-1 fs-4"></i>
    <span class="d-none d-md-block font-weight-medium fs-3">Add Circulars</span>
    </a>
</li>
</ul>
<div class="tab-content">
<div id="note-full-container" class="note-has-grid row">
@php
$colors = ['#007bff', '#6c757d', '#17a2b8', '#dc3545', '#343a40', '#28a745', '#ffc107']; // List of different colors
$colorIndex = 0; // Index for cycling through colors
@endphp
    @foreach($values as $values)
    <div class="col-md-4 single-note-item all-category note-important">
    <div class="card card-body">
        <span class="side-stick" style="background-color: <?php echo $colors[$colorIndex]; ?>"></span>
        <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Go for lunch">{{$values->title}}</h6>
        <p class="note-date fs-2">{{$values->published_at}}</p>
        <div class="note-content">
        <p class="note-inner-content">{{$values->description}}</p>
        </div>
        </div>
    </div>
    @php
        $colorIndex = ($colorIndex + 1) % count($colors);
    @endphp
    @endforeach
    </div>
</div>
</div>
@endpush

@push('javascript')
<script>
</script>
@endpush