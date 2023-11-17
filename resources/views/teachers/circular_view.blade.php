@extends('layouts.main')
@section('title','Circulars')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')
<div class="page-wrapper" style="min-height: 742px;">
                <div class="content container-fluid">        
                    <div class="row">
                        <!-- Blog Post -->
                        <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a>
                                                    <span>
                                                        <span class="post-title">Principal</span>
                                                        <span class="post-date"><i class="far fa-clock">&nbsp;&nbsp;
                                                        </i>Date Of added</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title"><a href="blog-details.html">Sports reduced risk of obesity, Lorem Ipsum is not  </a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>										
                        </div>
                        <!-- /Blog Post -->
                    </div>
                        <!-- Modal -->
            <div class="modal fade contentmodal" id="deleteModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content doctor-profile">
                        <div class="modal-header pb-0 border-bottom-0  justify-content-end">
                            <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x-circle"></i></button>
                        </div>
                        <div class="modal-body">
                            <div class="delete-wrap text-center">
                                <div class="del-icon"><i class="feather-x-circle"></i></div>
                                <h2>Sure you want to delete</h2>
                                <div class="submit-section">
                                    <a href="blog.html" class="btn btn-success me-2">Yes</a>
                                    <a href="#" class="btn btn-danger" data-bs-dismiss="modal">No</a>
                                </div>								
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- /Modal -->
                 </div>			
			</div>
@endpush

@push('javascript')
<script>

</script>
@endpush