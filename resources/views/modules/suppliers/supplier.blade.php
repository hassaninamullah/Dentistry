@extends('master.master')
@section('page-title', 'CRM | SUPPLIERS')
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
          <li class="breadcrumb-item active" aria-current="page">SUPPLIERS</li>
        </ol>
        <a href="#" onclick="history.go(-1)" class="fa fa-arrow-circle-left me-3 fs-5 gray-5 text-decoration-none"></a>
        <h1 class="mb-0 text-gradient font-heading">SUPPLIERS</h1>
      </div>
    </div>
    <!--[ Start:: page body area ]-->
    <main class="page-body">
      <div class="container-fluid">
        <div class="row g-xl-4 g-lg-3 g-2 justify-content-between">
          <div class="col-xxl-12 col-xl-12 col-lg-12 order-1 order-xl-0">
            <div class="card mb-4">
              <div class="card-header">
                {{--<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalLive"><i class="fa fa-plus"></i> Add Suppliers</button>
              --}}</div>
              <div class="card-body">
                <table id="supplier-table" class="supplier-table table display table-hover">
                    <thead>
                        <tr>
                          <th>Supplier ID </th>
                          <th>Name </th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>SSN</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody></tbody>
                </table>
              </div>
            </div>
          </div>

        </div> <!--[ .row end ]-->
      </div>
    </main>

    {{--<div class="modal fade" id="exampleModalLive" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLiveLabel">Family Tab</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row mb-3">

                <div class="col-md-6">
                    <div class="row">
                    <div class="col-md-3 ">
                        <label for="example-text-input" class="col-form-label">Name
                            :</label>
                    </div>

                    <div class="col-md-9">
                        <input class="form-control" type="text" placeholder="Name"
                            id="example-text-input">
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="example-text-input" class=" col-form-label">Type
                                :</label>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-3">

                                <select class="form-select"
                                    aria-label="Default select example">
                                    <option selected="">Type 1</option>
                                    <option value="1">Type 2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="example-text-input" class=" col-form-label">Phone Number
                                :
                            </label>
                        </div>
                        <div class="col-md-9">
                            <input class="form-control" type="number"
                                placeholder="number" id="example-text-input">
                        </div>
                        <!-- input-group -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="example-text-input" class=" col-form-label">Address
                                :</label>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" type="text"
                            placeholder="Address" id="example-text-input">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="example-text-input" class=" col-form-label">Emails :</label>
                        </div>
                        <div class="col-md-9">
                            <input class="form-control" type="email"
                                placeholder="Emails" id="example-text-input">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="example-text-input" class=" col-form-label">Agency Contacts :</label>
                        </div>
                        <div class="col-md-9">
                            <input class="form-control" type="number"
                                placeholder="Agency Contacts" id="example-text-input">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="example-text-input" class=" col-form-label">Weblinks :</label>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" type="text"
                                placeholder="Weblinks " id="example-text-input">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2 w-12">
                    <div class="mt-3">
                        <label class="mb-1">Notes :</label>
                    </div>
                </div>
                <div class="col-md-9">
                    <textarea id="textarea" class="form-control" maxlength="225" rows="3"
                        placeholder="Notes"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2 w-12">
                    <div class="mt-3">
                        <label class="mb-1">Tags :</label>
                    </div>
                </div>
                <div class="col-md-9">
                    <textarea id="textarea" class="form-control" maxlength="225" rows="3"
                        placeholder="Description"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="example-text-input" class=" col-form-label">Image :</label>
                        </div>
                        <div class="col-md-9">
                            <input class="form-control" type="file"
                                placeholder="Weblinks " id="example-text-input">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="example-text-input" class=" col-form-label">Promotions :</label>
                        </div>
                        <div class="col-md-7">
                            <div class="mb-3">
                                <select class="form-select"
                                    aria-label="Default select example">
                                    <option selected="">Active</option>
                                    <option value="1">Cancelled</option>
                                    <option value="2">Completed</option>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>--}}
@endsection

@section('custom-script')
<script type="text/javascript">
    $(function () {
      const table = $('.supplier-table').DataTable({
          processing: true,
          responsive:true,
          serverSide: true,
          ajax: "{{ route('suppliers') }}",
          error: (error)=>{
                console.log('response',error);
            },
          columns: [
              {data: 'id', name: 'id'},
              {data: 'name', name: 'name'},
              {data: 'phone', name: 'phone'},
              {data: 'email', name: 'email'},
              {data: 'address', name: 'address'},
              {data: 'ssn', name: 'ssn'},
              {data: 'action', name: 'action'},
          ]
      });
      $(document).on("click",".delete-entity",function() {
        if(confirm('Are you sure you want to delete this agent?')){
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
