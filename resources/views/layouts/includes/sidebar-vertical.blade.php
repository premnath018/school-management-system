<aside class="left-sidebar with-vertical">
      <!-- ---------------------------------- -->
<!-- Start Vertical Layout Sidebar -->
<!-- ---------------------------------- -->
<div class="brand-logo d-flex align-items-center justify-content-between">
  <a href="index.html" class="text-nowrap logo-img">
    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/logos/logo-light.svg" class="dark-logo" alt="Logo-Dark" />
    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/logos/logo-dark.svg" class="light-logo" alt="Logo-light" />
  </a>
  <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
    <i class="ti ti-x"></i>
  </a>
</div>

<div class="scroll-sidebar" data-simplebar>
  <!-- Sidebar navigation-->
  <nav class="sidebar-nav">
    <ul id="sidebarnav" class="mb-0">
      <!-- ============================= -->
      <!-- Apps -->
      <!-- ============================= -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow info-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-info-subtle rounded-1">
            <iconify-icon icon="ic:baseline-admin-panel-settings" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Admin</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="/" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Index</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="/addcircular" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Add Circular</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="/addholiday" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Add Holiday</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="/holidays" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Holiday List</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="/leaveapproval" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Leave Approval</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="/addstudent" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Add Student</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="/addteacher" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Add Teacher</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="/addclasses" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Add Class</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow secondary-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-secondary-subtle rounded-1">
            <iconify-icon icon="la:chalkboard-teacher" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Teachers</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="/circulars" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Circular</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="/teachers" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Teacher List</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- =================== -->
      <!-- Exam -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow warning-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-warning-subtle rounded-1">
            <iconify-icon icon="solar:file-text-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Exam</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="/addexam" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Add Exam</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="/exams" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu"> Exam List</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- =================== -->
      <!-- Students -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow danger-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-danger-subtle rounded-1">
            <iconify-icon icon="solar:square-academic-cap-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Students</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="/students" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Student List</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="/earlycallentry" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Early Calling Entry</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- =================== -->
      <!-- Classes -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link indigo-hover-bg my-3" href="/classes" aria-expanded="false">
          <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
            <iconify-icon icon="healthicons:i-training-class" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Classes</span>
        </a>
      </li>

      <!-- =================== -->
      <!-- Attendance -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link success-hover-bg" href="/selectclass" aria-expanded="false">
          <span class="aside-icon p-2 bg-success-subtle rounded-1">
            <iconify-icon icon="mdi:calendar" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Attendance</span>
        </a>
      </li>
      <!-- =================== -->
      <!-- Fees -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link primary-hover-bg" href="/fees" aria-expanded="false">
          <span class="aside-icon p-2 bg-primary-subtle rounded-1">
            <iconify-icon icon="mdi-currency-usd-circle" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Fees</span>
        </a>
      </li>
  </nav>
  <!-- End Sidebar navigation -->
</div>

<div class=" fixed-profile mx-3 mt-3">
  <div class="card bg-primary-subtle mb-0 shadow-none">
    <div class="card-body p-4">
      <div class="d-flex align-items-center justify-content-between gap-3">
        <div class="d-flex align-items-center gap-3">
          <img src="{{asset('assets//images/profile/user-1.jpg')}}" width="45" height="45" class="img-fluid rounded-circle" alt="" />
          <div>
            <h5 class="mb-1">{{session('name')!=''?session('name'):session('email')}}</h5>
            <p class="mb-0">{{session('name')!=''?'User':'Admin'}}</p>
          </div>
        </div>
        <a href="/logout" class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
          data-bs-title="Logout">
          <iconify-icon icon="solar:logout-line-duotone" class="fs-8"></iconify-icon>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- ---------------------------------- -->
<!-- Start Vertical Layout Sidebar -->
<!-- ---------------------------------- -->
    </aside>
    <!--  Sidebar End -->