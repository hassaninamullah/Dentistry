@extends('master.master')
@section('page-title', 'CRM | EMAIL TEMPLATES')
@section('custom-style')
@endsection

@section('page-content')


    <!--[ Start:: page title and breadcrumb ]-->
    <div class="page-title">
      <div class="container-fluid">
        <ol class="breadcrumb bg-transparent w-100 li_animate mb-3 mb-md-1">
          <li class="breadcrumb-item"><a href="{{route('dashboard.analytics')}}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="#">App</a></li>
          <li class="breadcrumb-item active" aria-current="page">Inbox</li>
        </ol>
      </div>
    </div>
    <!--[ Start:: page body area ]-->
    <main class="page-body">
      <div class="container-fluid">
        <div class="row g-xl-4 g-lg-3 g-2 justify-content-between">
          <div class="col-xxl-12 col-xl-12 col-lg-12 order-1 order-xl-0">
            <div class="card mb-4">
              <div class="card-header">
                {{--<button type="button" class="btn btn-secondary" data-bs-toggle="offcanvas" data-bs-target="#Compose"><i class="fa fa-plus"></i> New Template</button>
              --}}
            </div>
              <div class="card-body">
                <table class="my_data_table table display dataTable table-hover">
                  <thead>
                    <tr>
                      <th>Template Name</th>
                      <th>Template For</th>
                      <th>Options</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    @for ($i=0; $i< 100; $i++)
                        <tr>
                            <td class="sorting_1">Template {{$i+1}}</td>
                            <td>Suppliers</td>
                            <td>((name)),((contact)),((email))</td>
                            <td>2011/04/25</td>
                        </tr>
                    @endfor
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-xxl-9 col-xl-12 col-lg-12">
            <!--[ Start:: Compose new email ]-->
            <div class="offcanvas offcanvas-end xxl" tabindex="-1" id="Compose">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title">New Template</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <div class="form-floating mb-1">
                  <input type="text" class="form-control" placeholder="Template Name">
                  <label>Template Name</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" placeholder="Example: client">
                  <label>Template For (Example: client)</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" placeholder="Example: ((name))">
                  <label>Options (Example: ((name)))</label>
                </div>
                <div class="summernote"> Hello ((name)), <br />
                  <p>The toolbar can be customized and it also supports various callbacks such as <code>oninit</code>, <code>onfocus</code>, <code>onpaste</code> and many more.</p>
                  <p>Please try <b>paste some texts</b> here</p>
                </div>
                <div class="mt-3 d-flex">
                  <a href="#!" class="btn ms-1 btn-primary">Save</a>
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
