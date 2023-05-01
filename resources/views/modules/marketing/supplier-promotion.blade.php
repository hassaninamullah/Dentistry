@extends('master.master')
@section('page-title', 'CRM | SUPPLIER PROMOTIONS')
@section('custom-style')
@endsection

@section('page-content')

    <!--[ Start:: page title and breadcrumb ]-->
    <div class="page-title">
      <div class="container-fluid">
        <ol class="breadcrumb bg-transparent w-100 li_animate mb-3 mb-md-1">
          <li class="breadcrumb-item"><a href="{{route('dashboard.analytics')}}">Dashboard</a></li>
          <!-- <li class="breadcrumb-item"><a href="#">App</a></li> -->
          <li class="breadcrumb-item active" aria-current="page">Create Email</li>
        </ol>
      </div>
    </div>
    <!--[ Start:: page body area ]-->
    <main class="page-body">
      <div class="container-fluid">
        <div class="row g-xl-4 g-lg-3 g-2 justify-content-between">
          <div class="col-xxl-9 col-xl-12 col-lg-12">

            <!--[ Start:: Compose new email ]-->
            <div class=" xxl" tabindex="-1" id="Compose">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title">New Message</h5>
                <!-- <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
              </div>
              <div class="offcanvas-body">
                <div class="form-floating mb-1">
                  <input type="email" class="form-control" placeholder="Email To">
                  <label>Email To</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" placeholder="Subject">
                  <label>Subject</label>
                </div>

                <div class="form-floating mb-3">
                  <select class="form-control">
                    @for ($i=0; $i< 100; $i++)
                    <option value="template 2">template {{$i+1}}</option>
                    @endfor
                  </select>
                  <label>Template</label>
                </div>
                <div class="summernote"> Hello ((name)), <br />
                  <p>The toolbar can be customized and it also supports various callbacks such as <code>oninit</code>, <code>onfocus</code>, <code>onpaste</code> and many more.</p>
                  <p>Please try <b>paste some texts</b> here</p>
                </div>
                <div class="mt-3 d-flex">
                  <ul class="navbar-nav flex-row me-auto">
                    <li class="nav-item me-1"><a class="btn btn-light" href="#"><i class="fa fa-paperclip"></i></a></li>
                    <li class="nav-item me-1"><a class="btn btn-light" href="#"><i class="fa fa-smile-o"></i></a></li>
                    <li class="nav-item"><a class="btn btn-light" href="#"><i class="fa fa-photo"></i></a></li>
                  </ul>
                  <a href="#!" class="btn btn-outline-secondary">Discard</a>
                  <a href="#!" class="btn ms-1 btn-outline-secondary">Schedule Send</a>
                  <a href="#!" class="btn ms-1 btn-primary">Send</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-12 col-lg-12 d-none d-xxl-inline-block">
            <div class="card ms-xxl-2">
              <div class="card-header">
                <h5 class="card-title mb-0 fw-normal">Email statistics</h5>
                <div class="card-action">
                  <div class="dropdown">
                    <a href="#" class="dropdown-toggle after-none gray-8" data-bs-toggle="dropdown" aria-expanded="false" title="Card Filter">
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-opacity="0.4" d="M1.5 0.5C1.5 0.367392 1.55268 0.240215 1.64645 0.146447C1.74021 0.0526784 1.86739 0 2 0H14C14.1326 0 14.2598 0.0526784 14.3536 0.146447C14.4473 0.240215 14.5 0.367392 14.5 0.5V4.5C14.5 4.62331 14.4544 4.74226 14.372 4.834L10 9.692V14.5C9.99992 14.6049 9.96685 14.7071 9.90547 14.7922C9.8441 14.8772 9.75752 14.9409 9.658 14.974L6.658 15.974C6.58287 15.999 6.50288 16.0058 6.4246 15.9939C6.34632 15.982 6.272 15.9516 6.20775 15.9053C6.1435 15.859 6.09116 15.7982 6.05504 15.7277C6.01893 15.6572 6.00006 15.5792 6 15.5V9.692L1.628 4.834C1.54561 4.74226 1.50002 4.62331 1.5 4.5V0.5ZM2.5 1V4.308L6.872 9.166C6.95439 9.25774 6.99998 9.37669 7 9.5V14.806L9 14.14V9.5C9.00002 9.37669 9.04561 9.25774 9.128 9.166L13.5 4.308V1H2.5Z" />
                        <rect fill-opacity="0.9" x="4" y="2" width="8" height="3" rx="1" />
                      </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end shadow border-0 p-4 rounded-4" style="width: 300px;">
                      <h6>Filter Options</h6>
                      <div class="row g-3 mt-3">
                        <div class="col-12">
                          <label class="form-label small text-muted">Sorted by:</label>
                          <input type="email" class="form-control" placeholder="Search">
                        </div>
                        <div class="col-12">
                          <label class="form-label small text-muted">Status:</label>
                          <select class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                          </select>
                        </div>
                        <div class="col-12">
                          <label class="form-label small text-muted">Notifications:</label>
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="n_Enabled">
                            <label class="form-check-label" for="n_Enabled">Enabled</label>
                          </div>
                        </div>
                        <div class="col-12 text-end mt-4">
                          <button type="reset" class="btn btn-sm btn-light me-1">Reset</button>
                          <button type="submit" class="btn btn-sm btn-primary">Apply</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row g-3">
                  <div class="col-xxl-12 col-xl-3 col-lg-3 col-md-3 col-12 mb-2">
                    <h6 class="mb-0 d-flex justify-content-between">Opened <small class="text-muted">10,510</small></h6>
                    <div class="progress mt-2" style="height: 4px;">
                      <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-xxl-12 col-xl-3 col-lg-3 col-md-3 col-12 mb-2">
                    <h6 class="mb-0 d-flex justify-content-between">Clicked <small class="text-muted">7,510</small></h6>
                    <div class="progress mt-2" style="height: 4px;">
                      <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 22%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-xxl-12 col-xl-3 col-lg-3 col-md-3 col-12 mb-2">
                    <h6 class="mb-0 d-flex justify-content-between">Bounce <small class="text-muted">980</small></h6>
                    <div class="progress mt-2" style="height: 4px;">
                      <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 9%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-xxl-12 col-xl-3 col-lg-3 col-md-3 col-12 mb-2">
                    <h6 class="mb-0 d-flex justify-content-between">Spam <small class="text-muted">56</small></h6>
                    <div class="progress mt-2" style="height: 4px;">
                      <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 12%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!--[ .row end ]-->
      </div>
    </main>
@endsection

@section('custom-script')

<script>
    $('.page-inner-layout .user-list a').on('click', function() {
      $('.page-inner-layout .order-2').toggleClass('open');
    });
    $('.close-toggle').on('click', function() {
      $('.page-inner-layout .order-2').toggleClass('open');
    });
    $(document).ready(function() {
      $('.summernote').summernote({
        tabsize: 2,
        height: 300
      });
      $('.note-editor .note-btn').on('click', function() {
        $(this).next().toggleClass("show");
      });
    });
  </script>
@endsection
