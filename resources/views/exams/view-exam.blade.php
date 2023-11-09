@extends('layouts.main')
@section('title','All Exams')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="page-title">Exam</h3>
            </div>
          </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
          <div class="col-sm-12">
            <div class="card card-table">
              <div class="card-body">
                <!-- Page Header -->
                <div class="page-header">
                  <div class="row align-items-center">
                    <div class="col">
                      <h3 class="page-title">Exam</h3>
                    </div>
                    <div class="col-auto text-end float-end ms-auto download-grp">
                      <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
                      <a href="add-exam.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                    </div>
                  </div>
                </div>
                <!-- /Page Header -->
                <div class="table-responsive">
                  <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                    <thead class="student-thread">
                      <tr>
                        <th>Exam Name</th>
                        <th>Class</th>
                        <th>Subject</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Date</th>
                        <th class="text-end">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($values as $values)
                      <tr>
                        <td>
                          <h2>
                            <a>{{$values->exam_name}}</a>
                          </h2>
                        </td>
                        <td>{{$values->class}}</td>
                        <td>{{$values->subject}}</td>
                        <td>{{$values->start_time}}</td>
                        <td>{{$values->end_time}}</td>
                        <td>{{$values->date_of_event}}</td>
                        <td class="text-end">
                          <div class="actions">
                            <a href="/editexam/{{$values->id}}" class="btn btn-sm bg-danger-light">
                              <i class="feather-edit"></i>
                            </a>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                      <!-- <tr>
                          <td>
                            <h2>
                              <a>Half Yearly</a>
                            </h2>
                          </td>
                          <td>1</td>
                          <td>Botony</td>
                          <td>10:00 AM</td>
                          <td>01:00 PM</td>
                          <td>23 Apr 2020</td>
                          <td class="text-end">
                            <div class="actions">
                              <a
                                href="javascript:;"
                                class="btn btn-sm bg-success-light me-2"
                              >
                                <i class="feather-eye"></i>
                              </a>
                              <a
                                href="edit-exam.html"
                                class="btn btn-sm bg-danger-light"
                              >
                                <i class="feather-edit"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2>
                              <a>Quaterly</a>
                            </h2>
                          </td>
                          <td>9</td>
                          <td>Biology</td>
                          <td>01:00 PM</td>
                          <td>04:00 PM</td>
                          <td>26 Nov 2020</td>
                          <td class="text-end">
                            <div class="actions">
                              <a
                                href="javascript:;"
                                class="btn btn-sm bg-success-light me-2"
                              >
                                <i class="feather-eye"></i>
                              </a>
                              <a
                                href="edit-exam.html"
                                class="btn btn-sm bg-danger-light"
                              >
                                <i class="feather-edit"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2>
                              <a>Class Test</a>
                            </h2>
                          </td>
                          <td>8</td>
                          <td>Science</td>
                          <td>01:00 PM</td>
                          <td>04:00 PM</td>
                          <td>18 Sep 2020</td>
                          <td class="text-end">
                            <div class="actions">
                              <a
                                href="javascript:;"
                                class="btn btn-sm bg-success-light me-2"
                              >
                                <i class="feather-eye"></i>
                              </a>
                              <a
                                href="edit-exam.html"
                                class="btn btn-sm bg-danger-light"
                              >
                                <i class="feather-edit"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2>
                              <a>Quaterly</a>
                            </h2>
                          </td>
                          <td>7</td>
                          <td>History</td>
                          <td>01:00 PM</td>
                          <td>04:00 PM</td>
                          <td>23 Jul 2020</td>
                          <td class="text-end">
                            <div class="actions">
                              <a
                                href="javascript:;"
                                class="btn btn-sm bg-success-light me-2"
                              >
                                <i class="feather-eye"></i>
                              </a>
                              <a
                                href="edit-exam.html"
                                class="btn btn-sm bg-danger-light"
                              >
                                <i class="feather-edit"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2>
                              <a>Class Test</a>
                            </h2>
                          </td>
                          <td>2</td>
                          <td>Biology</td>
                          <td>10:00 AM</td>
                          <td>01:00 PM</td>
                          <td>15 Oct 2020</td>
                          <td class="text-end">
                            <div class="actions">
                              <a
                                href="javascript:;"
                                class="btn btn-sm bg-success-light me-2"
                              >
                                <i class="feather-eye"></i>
                              </a>
                              <a
                                href="edit-exam.html"
                                class="btn btn-sm bg-danger-light"
                              >
                                <i class="feather-edit"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2>
                              <a>Half Yearly</a>
                            </h2>
                          </td>
                          <td>6</td>
                          <td>Botony</td>
                          <td>10:00 AM</td>
                          <td>01:00 PM</td>
                          <td>02 Jun 2020</td>
                          <td class="text-end">
                            <div class="actions">
                              <a
                                href="javascript:;"
                                class="btn btn-sm bg-success-light me-2"
                              >
                                <i class="feather-eye"></i>
                              </a>
                              <a
                                href="edit-exam.html"
                                class="btn btn-sm bg-danger-light"
                              >
                                <i class="feather-edit"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2>
                              <a>Class Test</a>
                            </h2>
                          </td>
                          <td>12</td>
                          <td>Mathematics</td>
                          <td>10:00 AM</td>
                          <td>01:00 PM</td>
                          <td>23 Apr 2020</td>
                          <td class="text-end">
                            <div class="actions">
                              <a
                                href="javascript:;"
                                class="btn btn-sm bg-success-light me-2"
                              >
                                <i class="feather-eye"></i>
                              </a>
                              <a
                                href="edit-exam.html"
                                class="btn btn-sm bg-danger-light"
                              >
                                <i class="feather-edit"></i>
                              </a>
                            </div>
                          </td>
                        </tr> -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <footer>
        <p>Copyright © 2022 Dreamguys.</p>
      </footer>
      <!-- /Footer -->
    </div>
    <!-- /Page Wrapper -->
@endpush

@push('javascript')
<script>

</script>
@endpush