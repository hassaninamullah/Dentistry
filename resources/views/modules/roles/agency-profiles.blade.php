@extends('master.master')
@section('page-title', 'CRM | AGENCY PROFILES')
@section('custom-style')
@endsection

@section('page-content')
<!--[ Start:: page title and breadcrumb ]-->
<div class="page-title mb-lg-4">
    <div class="container-fluid">
      <ol class="breadcrumb bg-transparent w-100 li_animate mb-3 mb-md-1">
        <li class="breadcrumb-item"><a href="{{route('dashboard.analytics')}}">Dashboard</a></li>
        <!-- <li class="breadcrumb-item"><a href="index.html">Docs</a></li>
        <li class="breadcrumb-item"><a href="plugins.html">Vendor</a></li> -->
        <li class="breadcrumb-item active" aria-current="page">Agency Profiles</li>
      </ol>
      <a href="#" onclick="history.go(-1)" class="fa fa-arrow-circle-left me-3 fs-5 gray-5 text-decoration-none"></a>
      <h1 class="mb-0 text-gradient font-heading">Agencies</h1>
    </div>
  </div>
<!--[ Start:: page body area ]-->
<div class="row AddClient">
    <div class="col-12">
        {{--<div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">CLIENTS</h4>
                </div>
            </div>
        </div>--}}
        {{--<div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 pl-10"><i class="fa fa-truck"></i> Marketing</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item ">
                                        <!-- <li class="list-inline-item"><i class="fa fa-download"></i></li>
                                   <li class="list-inline-item"><i class=" ri-refresh-line"></i></li> -->
                                    </li>

                                </ol>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-4 pt-l">
                                        <label for="example-text-input" class="col-form-label ">Supplier</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" placeholder="Supplier"
                                            id="example-text-input">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-4 pt-l">
                                        <label for="example-text-input" class="col-form-label ">Title</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" placeholder="Title"
                                            id="example-text-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-4 pt-l">
                                        <label for="example-text-input" class="col-form-label ">Booking
                                            Window</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input class="form-control" type="date" value="2011-08-19"
                                            id="example-date-input">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-4 pt-l">
                                        <label for="example-text-input" class="col-form-label ">Travel
                                            Window</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input class="form-control" type="date" value="2011-08-19"
                                            id="example-date-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-3">
                                    <div class="col-md-3 pt-l">
                                        <label for="example-text-input" class="col-form-label ">Description</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" placeholder="Commission"
                                            id="example-text-input">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-3">
                                    <div class="col-md-3 pt-l">
                                        <label for="example-text-input" class="col-form-label ">Exclusions</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" placeholder="Exclusions"
                                            id="example-text-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card w-98">
                    <div class="card-body">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 "><i class="fa fa-cubes"></i> WORKSPACE EXTENSIONS
                            </h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item ">
                                        <a class="" href="#"><button type="button"
                                                class="btn btn-primary1 waves-effect waves-light "><i
                                                    class="fa fa-plus"></i> Add Extension
                                            </button></a>
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="border"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <p class="card-title-desc1 mb-3">You will be able to
                                        <code>add extensions</code> once the trip has been
                                        created.
                                    </p>

                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>--}}
        <div class="card">
            <div class="card-body">
                <table id="agency-table" class="agency-table table display table-hover">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Time Zone</th>
                        <th>Created AT</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-script')

<script type="text/javascript">
    $(function () {
      const table = $('.agency-table').DataTable({
          processing: true,
          responsive:true,
          serverSide: true,
          ajax: "{{ route('administration.agency') }}",
          error: (error)=>{
                console.log('response',error);
            },
          columns: [
              {data: 'name', name: 'name'},
              {data: 'phone', name: 'phone'},
              {data: 'email', name: 'email'},
              {data: 'address', name: 'address'},
              {data: 'time_zone', name: 'time_zone'},
              {data: 'created_at', name: 'created_at'},
              {data: 'action', name: 'action'},
          ]
      });
      $(document).on("click",".delete-entity",function() {
        if(confirm('Are you sure you want to delete this agency?')){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: $(this).data('path'),
                type: 'DELETE',
                success:(result)=> {
                    table.ajax.reload();
                },
                error:(error)=> {
                    console.log(error);
                },
            });
        }
    });
    });
  
  </script>
  
@endsection
