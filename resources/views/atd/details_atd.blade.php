@extends('layouts.main')
@section('title','Welcome')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')

<div class="page-wrapper" style="min-height: 739px;">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Attendance Details</h5>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <table class="table text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>Date:</td>
                                        <td class="font-medium text-dark-medium">10 A</td>
                                    </tr>
                                    <tr>
                                        <td>Total Student:</td>
                                        <td class="font-medium text-dark-medium">X</td>
                                    </tr>
                                    <tr>
                                        <td>Present:</td>
                                        <td class="font-medium text-dark-medium">A</td>
                                    </tr>
                                    <tr>
                                        <td>Absent:</td>
                                        <td class="font-medium text-dark-medium">45000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Std_Name</th>
                                        <th>STD_ID</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $data)
                                    <tr class="{{$data['class']}}">
                                        <td>{{$data['name']}}</td>
                                        <td>{{$data['id']}}</td>
                                        <td>{{$data['status']}}</td>
                                    </tr>
                                    @endforeach
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