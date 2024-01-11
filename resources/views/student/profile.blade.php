@extends('layouts.main')
@section('title','Student Profile')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')
<div class="card shadow-none position-relative overflow-hidden mb-4">
  <div class="card-body d-flex align-items-center justify-content-between p-4">
    <h4 class="fw-semibold mb-0">User Profile2</h4>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a class="text-muted text-decoration-none" href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item" aria-current="page">User Profile2</li>
      </ol>
    </nav>
  </div>
</div>
<div class="position-relative overflow-hidden">
<div class="position-relative overflow-hidden rounded-3">
    <img src="../assets/images/backgrounds/profilebg-2.jpg" alt="" class="w-100">
</div>
<div class="card mx-9 mt-n5">
    <div class="card-body pb-0">
    <div class="d-md-flex align-items-center justify-content-between text-center text-md-start">
        <div class="d-md-flex align-items-center">
        <div class="rounded-circle position-relative mb-9 mb-md-0 d-inline-block">
            <img src="../assets/images/profile/user-4.jpg" alt="" class="img-fluid rounded-circle" width="100"
            height="100">
            <span
            class="text-bg-primary rounded-circle text-white d-flex align-items-center justify-content-center position-absolute bottom-0 end-0 p-1 border border-2 border-white"><i
                class="ti ti-plus"></i></span>
        </div>
        <div class="ms-0 ms-md-3 mb-9 mb-md-0">
            <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-1">
            <h4 class="me-7 mb-0 fs-7">Jonathan Doe</h4>
            <span
                class="badge fs-2 fw-bold rounded-pill bg-primary-subtle text-primary border-primary border">Admin</span>
            </div>
            <p class="fs-4 mb-1">Dream big. Think different. Do great!</p>
            <div class="d-flex align-items-center justify-content-center justify-content-md-start">
            <span class="bg-success p-1 rounded-circle"></span>
            <h6 class="mb-0 ms-2">Active</h6>
            </div>
        </div>
        </div>
        <a href="#" class="btn btn-primary px-3 shadow-none">Edit Profile</a>
    </div>
    <ul class="nav nav-pills user-profile-tab mt-4 justify-content-center justify-content-md-start"
        id="pills-tab" role="tablist">
        <li class="nav-item me-2 me-md-3" role="presentation">
        <button
            class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent py-6"
            id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
            role="tab" aria-controls="pills-profile" aria-selected="true">
            <i class="ti ti-user-circle me-0 me-md-6  fs-6"></i>
            <span class="d-none d-md-block">My Profile</span>
        </button>
        </li>
        <li class="nav-item me-2 me-md-3" role="presentation">
        <button
            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent py-6"
            id="pills-followers-tab" data-bs-toggle="pill" data-bs-target="#pills-followers" type="button"
            role="tab" aria-controls="pills-followers" aria-selected="false">
            <i class="ti ti-users me-0 me-md-6  fs-6"></i>
            <span class="d-none d-md-block">Teams</span>
        </button>
        </li>
        <li class="nav-item me-2 me-md-3" role="presentation">
        <button
            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent py-6"
            id="pills-friends-tab" data-bs-toggle="pill" data-bs-target="#pills-friends" type="button"
            role="tab" aria-controls="pills-friends" aria-selected="false">
            <i class="ti ti-layout-grid-add me-0 me-md-6  fs-6"></i>
            <span class="d-none d-md-block">Projects</span>
        </button>
        </li>
        <li class="nav-item" role="presentation">
        <button
            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent py-6"
            id="pills-gallery-tab" data-bs-toggle="pill" data-bs-target="#pills-gallery" type="button"
            role="tab" aria-controls="pills-gallery" aria-selected="false">
            <i class="ti ti-id me-0 me-md-6  fs-6"></i>
            <span class="d-none d-md-block">Connections</span>
        </button>
        </li>
    </ul>
    </div>
</div>
</div>
<div class="tab-content mx-10" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
    aria-labelledby="pills-profile-tab" tabindex="0">
    <div class="row">
    <div class="col-lg-4">
        <div class="card ">
        <div class="card-body p-4">
            <h4 class="fs-6 mb-9">About me</h4>
            <p class="mb-0 pb-9 text-dark">
            Hello, I’m Jonathan Doe. I’m a professional
            who designs, develops, tests, and maintains
            software applications and systems.
            </p>
            <div class="py-9 border-top">
            <h5 class="mb-9">Contact</h5>
            <div class="d-flex align-items-center mb-9">
                <div
                class="bg-danger-subtle text-danger fs-14 round-40 rounded-circle d-flex align-items-center justify-content-center">
                <i class="ti ti-phone"></i>
                </div>
                <div class="ms-6">
                <h6 class="mb-1">Call</h6>
                <p class="mb-0">(123) 456-7890</p>
                </div>
            </div>
            <div class="d-flex align-items-center mb-9">
                <div
                class="bg-success-subtle text-success fs-14 round-40 rounded-circle d-flex align-items-center justify-content-center">
                <i class="ti ti-mail"></i>
                </div>
                <div class="ms-6">
                <h6 class="mb-1">Email</h6>
                <p class="mb-0">jonathan@spike.com</p>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div
                class="bg-primary-subtle text-primary fs-14 round-40 rounded-circle d-flex align-items-center justify-content-center">
                <i class="ti ti-brand-skype"></i>
                </div>
                <div class="ms-6">
                <h6 class="mb-1">Skype</h6>
                <p class="mb-0">jonathan.doe</p>
                </div>
            </div>
            </div>
            <div class="pt-9 border-top">
            <h5 class="mb-9">Other</h5>
            <div class="d-flex align-items-center mb-9">
                <div
                class="bg-warning-subtle text-warning fs-14 round-40 rounded-circle d-flex align-items-center justify-content-center">
                <i class="ti ti-map-pin"></i>
                </div>
                <div class="ms-6">
                <h6 class="mb-1">Location</h6>
                <p class="mb-0">Newyork, USA - 100001</p>
                </div>
            </div>
            <div class="d-flex align-items-center mb-9">
                <div
                class="bg-success-subtle text-success fs-14 round-40 rounded-circle d-flex align-items-center justify-content-center">
                <i class="ti ti-school"></i>
                </div>
                <div class="ms-6">
                <h6 class="mb-1">Education</h6>
                <p class="mb-0">Saint Josef Institute of Science</p>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div
                class="bg-indigo-subtle text-indigo fs-14 round-40 rounded-circle d-flex align-items-center justify-content-center">
                <i class="ti ti-language"></i>
                </div>
                <div class="ms-6">
                <h6 class="mb-1">Language</h6>
                <p class="mb-0">English</p>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="card">
        <div class="card-body">
            <h5 class="mb-9">Teams</h5>
            <div class="d-flex align-items-center mb-9">
            <div
                class="bg-info-subtle text-info fs-14 round-40 rounded-circle d-flex align-items-center justify-content-center">
                <i class="ti ti-brand-github"></i>
            </div>
            <div class="ms-6">
                <h6 class="mb-1">Backend Developer</h6>
                <p class="mb-0">120 members</p>
            </div>
            </div>
            <div class="d-flex align-items-center mb-9">
            <div
                class="bg-primary-subtle text-primary fs-14 round-40 rounded-circle d-flex align-items-center justify-content-center">
                <i class="ti ti-brand-react"></i>
            </div>
            <div class="ms-6">
                <h6 class="mb-1">React Developer</h6>
                <p class="mb-0">86 members</p>
            </div>
            </div>
            <a href="#" class="fw-bold">View all</a>
        </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="row">
        <div class="col-md-4">
            <div class="card">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                <div
                    class="bg-primary-subtle text-primary p-6 fs-7 rounded-circle d-flex align-items-center justify-content-center">
                    <i class="ti ti-template"></i>
                </div>
                <div class="ms-6">
                    <h6 class="mb-1 fs-6">680</h6>
                    <p class="mb-0">Tasks Done</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                <div
                    class="bg-success-subtle text-success p-6 fs-7 rounded-circle d-flex align-items-center justify-content-center">
                    <i class="ti ti-layout-grid-add"></i>
                </div>
                <div class="ms-6">
                    <h6 class="mb-1 fs-6">42</h6>
                    <p class="mb-0">Projects</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                <div
                    class="bg-danger-subtle text-danger p-6 fs-7 rounded-circle d-flex align-items-center justify-content-center">
                    <i class="ti ti-id"></i>
                </div>
                <div class="ms-6">
                    <h6 class="mb-1 fs-6">$780</h6>
                    <p class="mb-0">Sales</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="card">
        <div class="card-body p-4">
            <ul class="nav nav-tabs nav-tabs-user-profile mb-4" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link shadow-none active" data-bs-toggle="tab" href="#feeds" role="tab"
                aria-selected="false" tabindex="-1">
                <span>Feeds</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link shadow-none" data-bs-toggle="tab" href="#timeline" role="tab"
                aria-selected="false" tabindex="-1">
                <span>Timeline</span>
                </a>
            </li>
            </ul>
            <div class="tab-content">
            <div class="tab-pane active" id="feeds" role="tabpanel">
                <div class="card border">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                    <img src="../assets/images/profile/user-4.jpg" alt="" width="32" height="32" class="rounded-circle">
                    <h6 class="mb-0 ms-6">Jonathan Doe</h6>
                    </div>
                    <div class="userprofile-quill-editors mb-3 d-flex flex-column-reverse">
                    <div id="editor-feeds">
                        <p>What are your thoughts?</p>
                    </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                    <ul class="quill-editor-metalink d-flex align-items-center gap-3 gap-sm-4 mb-0">
                        <li><a class="text-muted fs-4" href="#"><i class="ti ti-paperclip me-2 fs-5"></i><span
                            class="d-none d-sm-inline-flex">Attachment</span></a></li>
                        <li><a class="text-muted fs-4" href="#"><i class="ti ti-link me-2 fs-5"></i><span
                            class="d-none d-sm-inline-flex">Link</span></a></li>
                        <li><a class="text-muted fs-4" href="#"><i class="ti ti-mood-smile me-2 fs-5"></i><span
                            class="d-none d-sm-inline-flex">Emoji</span></a></li>
                    </ul>
                    <a href="#" class="btn btn-primary shadow-none">Post</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="tab-pane" id="timeline" role="tabpanel">
                <div class="card border">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                    <img src="../assets/images/profile/user-1.jpg" alt="" width="32" height="32" class="rounded-circle">
                    <h6 class="mb-0 ms-6">Jonathan Doe</h6>
                    </div>
                    <div class="userprofile-quill-editors mb-3 d-flex flex-column-reverse">
                    <div id="editor-timeline">
                        <p>What are your thoughts?</p>
                    </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                    <ul class="quill-editor-metalink d-flex align-items-center gap-3 gap-sm-4 mb-0">
                        <li><a class="text-muted fs-4" href="#"><i class="ti ti-paperclip me-2 fs-5"></i><span
                            class="d-none d-sm-inline-flex">Attachment</span></a></li>
                        <li><a class="text-muted fs-4" href="#"><i class="ti ti-link me-2 fs-5"></i><span
                            class="d-none d-sm-inline-flex">Link</span></a></li>
                        <li><a class="text-muted fs-4" href="#"><i class="ti ti-mood-smile me-2 fs-5"></i><span
                            class="d-none d-sm-inline-flex">Emoji</span></a></li>
                    </ul>
                    <a href="#" class="btn btn-primary shadow-none">Post</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="border-bottom pb-4 mb-4">
            <div class="d-flex align-items-center justify-content-between mb-9">
                <div class="d-flex align-items-center">
                <img src="../assets/images/profile/user-1.jpg" alt=""
                    class="rounded-circle img-fluid flex-shrink-0" width="40" height="40">
                <div class="ms-6">
                    <h6 class="mb-1 fs-4">Ralph Edwards</h6>
                    <p class="mb-0">1 month ago</p>
                </div>
                </div>
                <div class="dropdown">
                <button id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                    class="rounded-circle btn-transparent btn-sm px-1 btn shadow-none">
                    <i class="ti ti-dots-vertical fs-6 d-block"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1" >
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li>
                    <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul>
                </div>
            </div>
            <p class="text-dark mb-9 fs-4">This could be a real app for sure. but you need to pay
                royalties though</p>
            <div class="position-relative overflow-hidden rounded-1 mb-9">
                <img src="../assets/images/products/s13.jpg" alt="" class="w-100">
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <ul class="d-flex align-items-center gap-4 mb-0">
                <li><a class="d-flex align-items-center text-dark fs-4" href="#"><i
                        class="ti ti-thumb-up me-2 fs-7"></i>26</a></li>
                <li><a class="d-flex align-items-center text-dark fs-4" href="#"><i
                        class="ti ti-message-circle me-2 fs-7"></i>4</a></li>
                </ul>
                <a href="#" class="fs-4">Reply</a>
            </div>
            </div>
            <div class="pb-4">
            <div class="d-flex align-items-center justify-content-between mb-9">
                <div class="d-flex align-items-center">
                <img src="../assets/images/profile/user-2.jpg" alt=""
                    class="rounded-circle img-fluid flex-shrink-0" width="40" height="40">
                <div class="ms-6">
                    <h6 class="mb-1 fs-4">Floyd Miles</h6>
                    <p class="mb-0">1 month ago</p>
                </div>
                </div>
                <div class="dropdown">
                <button id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                    class="rounded-circle btn-transparent btn-sm px-1 btn shadow-none">
                    <i class="ti ti-dots-vertical fs-6 d-block"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1" >
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li>
                    <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul>
                </div>
            </div>
            <p class="text-dark mb-9 fs-4">
                Great Work !!! Just to tell you that when I open your prototype I was swiping to see what's
                on the other
                slide instead of clicking continue.
            </p>
            <div class="position-relative overflow-hidden rounded-1 mb-9">
                <img src="../assets/images/products/s14.jpg" alt="" class="w-100">
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <ul class="d-flex align-items-center gap-4 mb-0">
                <li><a class="d-flex align-items-center text-dark fs-4" href="#"><i
                        class="ti ti-thumb-up me-2 fs-7"></i>12</a></li>
                <li><a class="d-flex align-items-center text-dark fs-4" href="#"><i
                        class="ti ti-message-circle me-2 fs-7"></i>2</a></li>
                </ul>
                <a href="#" class="fs-4">Reply</a>
            </div>
            </div>
            <div class="border-start ps-4">
            <div class="border-bottom pb-9 mb-9">
                <div class="d-flex align-items-center justify-content-between mb-9">
                <div class="d-flex align-items-center">
                    <img src="../assets/images/profile/user-3.jpg" alt=""
                    class="rounded-circle img-fluid flex-shrink-0" width="40" height="40">
                    <div class="ms-6">
                    <h6 class="mb-1 fs-4">Darrell Steward</h6>
                    <p class="mb-0">1 month ago</p>
                    </div>
                </div>
                <div class="dropdown">
                    <button id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                    class="rounded-circle btn-transparent btn-sm px-1 btn shadow-none">
                    <i class="ti ti-dots-vertical fs-6 d-block"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1"
                    >
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li>
                        <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                    </ul>
                </div>
                </div>
                <p class="text-dark mb-9 fs-4">
                Great Work !!! Just to tell you that when I open your prototype I was swiping to see
                what's on the
                other slide instead of clicking continue.
                </p>
                <div class="d-flex align-items-center justify-content-between">
                <ul class="d-flex align-items-center gap-4 mb-0">
                    <li><a class="d-flex align-items-center text-dark fs-4" href="#"><i
                        class="ti ti-thumb-up me-2 fs-7"></i>3</a></li>
                </ul>
                <a href="#" class="fs-4">Reply</a>
                </div>
            </div>
            <div class="pb-9 mb-9">
                <div class="d-flex align-items-center justify-content-between mb-9">
                <div class="d-flex align-items-center">
                    <img src="../assets/images/profile/user-4.jpg" alt=""
                    class="rounded-circle img-fluid flex-shrink-0" width="40" height="40">
                    <div class="ms-6">
                    <h6 class="mb-1 fs-4">Kathryn Murphy</h6>
                    <p class="mb-0">1 month ago</p>
                    </div>
                </div>
                <div class="dropdown">
                    <button id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                    class="rounded-circle btn-transparent btn-sm px-1 btn shadow-none">
                    <i class="ti ti-dots-vertical fs-6 d-block"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1"
                    >
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li>
                        <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                    </ul>
                </div>
                </div>
                <p class="text-dark mb-9 fs-4">
                Great Work !!! Just to tell you that when I open your prototype I was swiping to see
                what's on the
                other slide instead of clicking continue.
                </p>
                <div class="d-flex align-items-center justify-content-between">
                <ul class="d-flex align-items-center gap-4 mb-0">
                    <li><a class="d-flex align-items-center text-dark fs-4" href="#"><i
                        class="ti ti-thumb-up me-2 fs-7"></i>8</a></li>
                </ul>
                <a href="#" class="fs-4">Reply</a>
                </div>
            </div>
            </div>
            <div class="border-top pt-4">
            <div class="d-flex align-items-center justify-content-between mb-9">
                <div class="d-flex align-items-center">
                <img src="../assets/images/profile/user-5.jpg" alt=""
                    class="rounded-circle img-fluid flex-shrink-0" width="40" height="40">
                <div class="ms-6">
                    <h6 class="mb-1 fs-4">Bessie Cooper</h6>
                    <p class="mb-0">1 month ago</p>
                </div>
                </div>
                <div class="dropdown">
                <button id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                    class="rounded-circle btn-transparent btn-sm px-1 btn shadow-none">
                    <i class="ti ti-dots-vertical fs-6 d-block"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1" >
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li>
                    <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul>
                </div>
            </div>
            <p class="text-dark mb-9 fs-4">
                Awesome work! I love that the case study was laid out as a story that was perfectly told.
                Thanks for sharing.
            </p>
            <div class="row">
                <div class="col-md-6">
                <div class="position-relative overflow-hidden rounded-1 mb-9">
                    <img src="../assets/images/products/s15.jpg" alt="" class="w-100">
                </div>
                </div>
                <div class="col-md-6">
                <div class="position-relative overflow-hidden rounded-1 mb-9">
                    <img src="../assets/images/products/s16.jpg" alt="" class="w-100">
                </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <ul class="d-flex align-items-center gap-4 mb-0">
                <li><a class="d-flex align-items-center text-dark fs-4" href="#"><i
                        class="ti ti-thumb-up me-2 fs-7"></i>128</a></li>
                <li><a class="d-flex align-items-center text-dark fs-4" href="#"><i
                        class="ti ti-message-circle me-2 fs-7"></i>12</a></li>
                </ul>
                <a href="#" class="fs-4">Reply</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="tab-pane fade" id="pills-followers" role="tabpanel" aria-labelledby="pills-followers-tab"
    tabindex="0">
    <div class="d-sm-flex align-items-center justify-content-between mt-3 mb-4">
    <h3 class="mb-3 mb-sm-0 fw-semibold d-flex align-items-center">Followers <span
        class="badge text-bg-secondary fs-2 rounded-4 py-1 px-2 ms-2">20</span></h3>
    <form class="position-relative">
        <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
        placeholder="Search Followers">
        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y text-dark ms-3"></i>
    </form>
    </div>
    <div class="row">
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-1.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Betty Adams</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>Sint
                Maarten</span>
            </div>
            <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
        </div>
        </div>
    </div>
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-2.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Virginia Wong</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>Tunisia</span>
            </div>
            <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
        </div>
        </div>
    </div>
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-3.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Birdie Burgess</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>Algeria</span>
            </div>
            <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
        </div>
        </div>
    </div>
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-4.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Steven Lindsey</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>Malaysia</span>
            </div>
            <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
        </div>
        </div>
    </div>
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-5.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Hannah Rhodes</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>Grenada</span>
            </div>
            <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
        </div>
        </div>
    </div>
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-6.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Effie Gross</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>Azerbaijan</span>
            </div>
            <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
        </div>
        </div>
    </div>
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-1.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Mark Barton</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>French Southern Territories</span>
            </div>
            <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
        </div>
        </div>
    </div>
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-2.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Carolyn Knight</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>Nauru</span>
            </div>
            <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
        </div>
        </div>
    </div>
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-3.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Elizabeth Malone</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>Djibouti</span>
            </div>
            <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
        </div>
        </div>
    </div>
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-4.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Jon Cohen</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>United States</span>
            </div>
            <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
        </div>
        </div>
    </div>
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-1.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Mary Hernandez</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>Equatorial Guinea</span>
            </div>
            <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
        </div>
        </div>
    </div>
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-2.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Willie Peterson</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>Solomon Islands</span>
            </div>
            <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
        </div>
        </div>
    </div>
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-3.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Harvey Baldwin</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>Uruguay</span>
            </div>
            <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
        </div>
        </div>
    </div>
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-4.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Alice George</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>Madagascar</span>
            </div>
            <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
        </div>
        </div>
    </div>
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-5.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Beulah Simpson</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>Bahrain</span>
            </div>
            <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
        </div>
        </div>
    </div>
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-6.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Francis Barber</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>Colombia</span>
            </div>
            <button class="btn btn-outline-primary py-1 px-2 ms-auto">Follow</button>
        </div>
        </div>
    </div>
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-1.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Christian Morales</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>Maldives</span>
            </div>
            <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
        </div>
        </div>
    </div>
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-2.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Laura Nelson</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>St.
                Helena</span>
            </div>
            <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
        </div>
        </div>
    </div>
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-3.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Blanche Strickland</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>South Africa</span>
            </div>
            <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
        </div>
        </div>
    </div>
    <div class=" col-md-6 col-xl-4">
        <div class="card">
        <div class="card-body p-4 d-flex align-items-center gap-3">
            <img src="../assets/images/profile/user-4.jpg" alt="" class="rounded-circle" width="40"
            height="40">
            <div>
            <h5 class="fw-semibold mb-0">Adam Washington</h5>
            <span class="fs-2 d-flex align-items-center"><i
                class="ti ti-map-pin text-dark fs-3 me-1"></i>Suriname</span>
            </div>
            <button class="btn btn-primary py-1 px-2 ms-auto">Followed</button>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="tab-pane fade" id="pills-friends" role="tabpanel" aria-labelledby="pills-friends-tab"
    tabindex="0">
    <div class="d-sm-flex align-items-center justify-content-between mt-3 mb-4">
    <h3 class="mb-3 mb-sm-0 fw-semibold d-flex align-items-center">Friends <span
        class="badge text-bg-secondary fs-2 rounded-4 py-1 px-2 ms-2">20</span></h3>
    <form class="position-relative">
        <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
        placeholder="Search Friends">
        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y text-dark ms-3"></i>
    </form>
    </div>
    <div class="row">
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-1.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Betty Adams</h5>
            <span class="text-dark fs-2">Medical Secretary</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-2.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Inez Lyons</h5>
            <span class="text-dark fs-2">Medical Technician</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-3.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Lydia Bryan</h5>
            <span class="text-dark fs-2">Preschool Teacher</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-4.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Carolyn Bryant</h5>
            <span class="text-dark fs-2">Legal Secretary</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-5.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Paul Benson</h5>
            <span class="text-dark fs-2">Safety Engineer</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-6.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Robert Francis</h5>
            <span class="text-dark fs-2">Nursing Administrator</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-1.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Billy Rogers</h5>
            <span class="text-dark fs-2">Legal Secretary</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-2.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Rosetta Brewer</h5>
            <span class="text-dark fs-2">Comptroller</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-3.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Patrick Knight</h5>
            <span class="text-dark fs-2">Retail Store Manager</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-4.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Francis Sutton</h5>
            <span class="text-dark fs-2">Astronomer</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-1.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Bernice Henry</h5>
            <span class="text-dark fs-2">Security Consultant</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-2.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Estella Garcia</h5>
            <span class="text-dark fs-2">Lead Software Test Engineer</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-3.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Norman Moran</h5>
            <span class="text-dark fs-2">Engineer Technician</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-4.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Jessie Matthews</h5>
            <span class="text-dark fs-2">Lead Software Engineer</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-5.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Elijah Perez</h5>
            <span class="text-dark fs-2">Special Education Teacher</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-6.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Robert Martin</h5>
            <span class="text-dark fs-2">Transportation Manager</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-1.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Elva Wong</h5>
            <span class="text-dark fs-2">Logistics Manager</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-2.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Edith Taylor</h5>
            <span class="text-dark fs-2">Union Representative</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-3.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Violet Jackson</h5>
            <span class="text-dark fs-2">Agricultural Inspector</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card hover-img overflow-hidden">
        <div class="card-body p-4 text-center border-bottom">
            <img src="../assets/images/profile/user-4.jpg" alt="" class="rounded-circle mb-3"
            width="80" height="80">
            <h5 class="fw-semibold mb-0">Phoebe Owens</h5>
            <span class="text-dark fs-2">Safety Engineer</span>
        </div>
        <ul
            class="px-2 py-2 text-bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
            <li class="position-relative">
            <a class="text-primary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold"
                href="javascript:void(0)">
                <i class="ti ti-brand-facebook"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-danger d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-instagram"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-info d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-github"></i>
            </a>
            </li>
            <li class="position-relative">
            <a class="text-secondary d-flex align-items-center justify-content-center p-2 fs-5 rounded-circle fw-semibold "
                href="javascript:void(0)">
                <i class="ti ti-brand-twitter"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    </div>
</div>
<div class="tab-pane fade" id="pills-gallery" role="tabpanel" aria-labelledby="pills-gallery-tab"
    tabindex="0">
    <div class="d-sm-flex align-items-center justify-content-between mt-3 mb-4">
    <h3 class="mb-3 mb-sm-0 fw-semibold d-flex align-items-center">Gallery <span
        class="badge text-bg-secondary fs-2 rounded-4 py-1 px-2 ms-2">12</span></h3>
    <form class="position-relative">
        <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
        placeholder="Search Friends">
        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y text-dark ms-3"></i>
    </form>
    </div>
    <div class="row">
    <div class="col-md-6 col-lg-4">
        <div class="card hover-img overflow-hidden rounded-2">
        <div class="card-body p-0">
            <img src="../assets/images/products/s1.jpg" alt="" class="img-fluid w-100 object-fit-cover"
            style="height: 220px;">
            <div class="p-4 d-flex align-items-center justify-content-between">
            <div>
                <h6 class="fw-semibold mb-0 fs-4">Isuava wakceajo fe.jpg</h6>
                <span class="text-dark fs-2">Wed, Dec 14, 2023</span>
            </div>
            <div class="dropdown">
                <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ti ti-dots-vertical"></i>
                </a>
                <ul class="dropdown-menu overflow-hidden">
                <li><a class="dropdown-item" href="javascript:void(0)">Isuava wakceajo fe.jpg</a></li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card hover-img overflow-hidden rounded-2">
        <div class="card-body p-0">
            <img src="../assets/images/products/s2.jpg" alt="" class="img-fluid w-100 object-fit-cover"
            style="height: 220px;">
            <div class="p-4 d-flex align-items-center justify-content-between">
            <div>
                <h6 class="fw-semibold mb-0 fs-4">Ip docmowe vemremrif.jpg</h6>
                <span class="text-dark fs-2">Wed, Dec 14, 2023</span>
            </div>
            <div class="dropdown">
                <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ti ti-dots-vertical"></i>
                </a>
                <ul class="dropdown-menu overflow-hidden">
                <li><a class="dropdown-item" href="javascript:void(0)">Ip docmowe vemremrif.jpg</a></li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card hover-img overflow-hidden rounded-2">
        <div class="card-body p-0">
            <img src="../assets/images/products/s3.jpg" alt="" class="img-fluid w-100 object-fit-cover"
            style="height: 220px;">
            <div class="p-4 d-flex align-items-center justify-content-between">
            <div>
                <h6 class="fw-semibold mb-0 fs-4">Duan cosudos utaku.jpg</h6>
                <span class="text-dark fs-2">Wed, Dec 14, 2023</span>
            </div>
            <div class="dropdown">
                <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ti ti-dots-vertical"></i>
                </a>
                <ul class="dropdown-menu overflow-hidden">
                <li><a class="dropdown-item" href="javascript:void(0)">Duan cosudos utaku.jpg</a></li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card hover-img overflow-hidden rounded-2">
        <div class="card-body p-0">
            <img src="../assets/images/products/s4.jpg" alt="" class="img-fluid w-100 object-fit-cover"
            style="height: 220px;">
            <div class="p-4 d-flex align-items-center justify-content-between">
            <div>
                <h6 class="fw-semibold mb-0 fs-4">Fu netbuv oggu.jpg</h6>
                <span class="text-dark fs-2">Wed, Dec 14, 2023</span>
            </div>
            <div class="dropdown">
                <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ti ti-dots-vertical"></i>
                </a>
                <ul class="dropdown-menu overflow-hidden">
                <li><a class="dropdown-item" href="javascript:void(0)">Fu netbuv oggu.jpg</a></li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card hover-img overflow-hidden rounded-2">
        <div class="card-body p-0">
            <img src="../assets/images/products/s5.jpg" alt="" class="img-fluid w-100 object-fit-cover"
            style="height: 220px;">
            <div class="p-4 d-flex align-items-center justify-content-between">
            <div>
                <h6 class="fw-semibold mb-0 fs-4">Di sekog do.jpg</h6>
                <span class="text-dark fs-2">Wed, Dec 14, 2023</span>
            </div>
            <div class="dropdown">
                <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ti ti-dots-vertical"></i>
                </a>
                <ul class="dropdown-menu overflow-hidden">
                <li><a class="dropdown-item" href="javascript:void(0)">Di sekog do.jpg</a></li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card hover-img overflow-hidden rounded-2">
        <div class="card-body p-0">
            <img src="../assets/images/products/s6.jpg" alt="" class="img-fluid w-100 object-fit-cover"
            style="height: 220px;">
            <div class="p-4 d-flex align-items-center justify-content-between">
            <div>
                <h6 class="fw-semibold mb-0 fs-4">Lo jogu camhiisi.jpg</h6>
                <span class="text-dark fs-2">Thu, Dec 15, 2023</span>
            </div>
            <div class="dropdown">
                <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ti ti-dots-vertical"></i>
                </a>
                <ul class="dropdown-menu overflow-hidden">
                <li><a class="dropdown-item" href="javascript:void(0)">Lo jogu camhiisi.jpg</a></li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card hover-img overflow-hidden rounded-2">
        <div class="card-body p-0">
            <img src="../assets/images/products/s7.jpg" alt="" class="img-fluid w-100 object-fit-cover"
            style="height: 220px;">
            <div class="p-4 d-flex align-items-center justify-content-between">
            <div>
                <h6 class="fw-semibold mb-0 fs-4">Orewac huosazud robuf.jpg</h6>
                <span class="text-dark fs-2">Fri, Dec 16, 2023</span>
            </div>
            <div class="dropdown">
                <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ti ti-dots-vertical"></i>
                </a>
                <ul class="dropdown-menu overflow-hidden">
                <li><a class="dropdown-item" href="javascript:void(0)">Orewac huosazud robuf.jpg</a></li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card hover-img overflow-hidden rounded-2">
        <div class="card-body p-0">
            <img src="../assets/images/products/s8.jpg" alt="" class="img-fluid w-100 object-fit-cover"
            style="height: 220px;">
            <div class="p-4 d-flex align-items-center justify-content-between">
            <div>
                <h6 class="fw-semibold mb-0 fs-4">Nira biolaizo tuzi.jpg</h6>
                <span class="text-dark fs-2">Sat, Dec 17, 2023</span>
            </div>
            <div class="dropdown">
                <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ti ti-dots-vertical"></i>
                </a>
                <ul class="dropdown-menu overflow-hidden">
                <li><a class="dropdown-item" href="javascript:void(0)">Nira biolaizo tuzi.jpg</a></li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card hover-img overflow-hidden rounded-2">
        <div class="card-body p-0">
            <img src="../assets/images/products/s9.jpg" alt="" class="img-fluid w-100 object-fit-cover"
            style="height: 220px;">
            <div class="p-4 d-flex align-items-center justify-content-between">
            <div>
                <h6 class="fw-semibold mb-0 fs-4">Peri metu ejvu.jpg</h6>
                <span class="text-dark fs-2">Sun, Dec 18, 2023</span>
            </div>
            <div class="dropdown">
                <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ti ti-dots-vertical"></i>
                </a>
                <ul class="dropdown-menu overflow-hidden">
                <li><a class="dropdown-item" href="javascript:void(0)">Peri metu ejvu.jpg</a></li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card hover-img overflow-hidden rounded-2">
        <div class="card-body p-0">
            <img src="../assets/images/products/s10.jpg" alt=""
            class="img-fluid w-100 object-fit-cover" style="height: 220px;">
            <div class="p-4 d-flex align-items-center justify-content-between">
            <div>
                <h6 class="fw-semibold mb-0 fs-4">Vurnohot tajraje isusufuj.jpg</h6>
                <span class="text-dark fs-2">Mon, Dec 19, 2023</span>
            </div>
            <div class="dropdown">
                <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ti ti-dots-vertical"></i>
                </a>
                <ul class="dropdown-menu overflow-hidden">
                <li><a class="dropdown-item" href="javascript:void(0)">Vurnohot tajraje isusufuj.jpg</a>
                </li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card hover-img overflow-hidden rounded-2">
        <div class="card-body p-0">
            <img src="../assets/images/products/s11.jpg" alt=""
            class="img-fluid w-100 object-fit-cover" style="height: 220px;">
            <div class="p-4 d-flex align-items-center justify-content-between">
            <div>
                <h6 class="fw-semibold mb-0 fs-4">Juc oz ma.jpg</h6>
                <span class="text-dark fs-2">Tue, Dec 20, 2023</span>
            </div>
            <div class="dropdown">
                <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ti ti-dots-vertical"></i>
                </a>
                <ul class="dropdown-menu overflow-hidden">
                <li><a class="dropdown-item" href="javascript:void(0)">Juc oz ma.jpg</a></li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card hover-img overflow-hidden rounded-2">
        <div class="card-body p-0">
            <img src="../assets/images/products/s12.jpg" alt=""
            class="img-fluid w-100 object-fit-cover" style="height: 220px;">
            <div class="p-4 d-flex align-items-center justify-content-between">
            <div>
                <h6 class="fw-semibold mb-0 fs-4">Povipvez marjelliz zuuva.jpg</h6>
                <span class="text-dark fs-2">Wed, Dec 21, 2023</span>
            </div>
            <div class="dropdown">
                <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ti ti-dots-vertical"></i>
                </a>
                <ul class="dropdown-menu overflow-hidden">
                <li><a class="dropdown-item" href="javascript:void(0)">Povipvez marjelliz zuuva.jpg</a>
                </li>
                </ul>
            </div>
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