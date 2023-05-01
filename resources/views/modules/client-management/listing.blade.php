@extends('master.master')
@section('page-title', 'CRM | CLIENTS')
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
                <li class="breadcrumb-item active" aria-current="page">Clients</li>
            </ol>
            <a href="#" onclick="history.go(-1)"
                class="fa fa-arrow-circle-left me-3 fs-5 gray-5 text-decoration-none"></a>
            <h1 class="mb-0 text-gradient font-heading">Clients</h1>
        </div>
    </div>
    <!--[ Start:: page body area ]-->
    <main class="page-body">
        <div class="container-fluid">
            <div class="row g-xl-4 g-lg-3 g-2 justify-content-between">
                <div class="col-xxl-12 col-xl-12 col-lg-12 order-1 order-xl-0">
                    <div class="card mb-4">
                        <div class="card-header">
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#exampleModalLive"><i class="fa fa-plus"></i> Add Family</button>
                        </div>
                        <div class="card-body">
                            <table id="client-table" class="client-table table display dataTable table-hover">
                                <thead>
                                    <tr>
                                        <th>FIRST NAME </th>
                                        <th>LAST NAME</th>
                                        <th>EMAIL</th>
                                        <th>TELEPHONE</th>
                                        <th>AGENT</th>
                                        <th>Status</th>
                                        <th>Is Family Member</th>
                                        <th>TRIPS</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--[ .row end ]-->
        </div>
    </main>

    <div class="modal fade" id="exampleModalLive" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLiveLabel">Family Tab</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('client.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-3 pt-l">
                                        <label for="example-text-input" class="col-form-label ">First
                                            Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input value="{{ old('first_name') }}" class="form-control @error('first_name') is-invalid @enderror" name="first_name" type="text"placeholder="First Name (required)" id="example-text-input" required>
                                        @error('first_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-3 pt-l">
                                        <label for="example-text-input" class="col-form-label ">Last
                                            Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input value="{{ old('last_name') }}" class="form-control @error('last_name') is-invalid @enderror" name="last_name" type="text"placeholder="Last Name (required)" id="example-text-input" required>
                                        @error('last_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-3 pt-l">
                                        <label for="example-text-input" class="col-form-label ">Middle
                                            Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input value="{{ old('middle_name') }}" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" type="text"placeholder="Middle Name (required)" id="example-text-input" required>
                                        @error('middle_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-3 pt-l">
                                        <label for="example-text-input" class="col-form-label ">Nick
                                            Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input value="{{ old('nick_name') }}" class="form-control @error('nick_name') is-invalid @enderror" name="nick_name" type="text"placeholder="Nick Name (required)" id="example-text-input" required>
                                        @error('nick_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-3 pt-l">
                                        <label for="example-text-input" class="col-form-label ">Cell
                                            Phone</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" name="phone" type="tel" placeholder="Cell Phone  (required)" id="example-text-input" required>
                                        @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-3 pt-l">
                                        <label for="example-text-input" class="col-form-label ">Email
                                            Address</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" type="text"placeholder="Email (required)" id="example-text-input" required>
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-3 pt-l">
                                        <label for="example-text-input" class="col-form-label ">Address</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input value="{{ old('address') }}" class="form-control @error('address') is-invalid @enderror" name="address" type="text"placeholder="Address (required)" id="example-text-input" required>
                                        @error('address')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-3 pt-l">
                                        <label for="example-text-input" class="col-form-label ">City</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input value="{{ old('city') }}" class="form-control @error('city') is-invalid @enderror" name="city" type="text" placeholder="City (required)" id="example-text-input" required>
                                        @error('city')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-3 pt-l">
                                        <label for="example-text-input" class="col-form-label ">State</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input value="{{ old('state') }}" class="form-control @error('state') is-invalid @enderror" name="state" type="text"placeholder="State (required)" id="example-text-input" required>
                                        @error('state')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-3 pt-l">
                                        <label for="example-text-input" class="col-form-label ">ZipCode</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input value="{{ old('zip_code') }}" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code" type="number" placeholder="Zip Code (required)" id="example-text-input" required>
                                        @error('zip_code')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-3 pt-l">
                                        <label for="example-text-input" class="col-form-label ">Birth
                                            Date</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input value="{{ old('dob') }}" class="form-control @error('dob') is-invalid @enderror" name="dob" type="date" placeholder="Birth Day (required)" id="example-text-input" required>
                                        @error('dob')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-3 pt-l">
                                        <label for="example-text-input" class="col-form-label ">Anniversary
                                            Date</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input value="{{ old('anniversary') }}" class="form-control @error('anniversary') is-invalid @enderror" name="anniversary" type="date" placeholder="Anniversary (required)" id="example-text-input" required>
                                        @error('anniversary')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-3 pt-l">
                                        <label for="example-text-input" class="col-form-label ">Agent</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input value="{{ old('agent_id') }}" class="form-control @error('agent_id') is-invalid @enderror" name="agent_id" value="{{ old('agent_id') }}" type="number" placeholder="Agent (required)" id="example-text-input" required>
                                        @error('agent_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-3 pt-l">
                                        <label for="example-text-input" class="col-form-label ">Client
                                            Status</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-select @error('isActive') is-invalid @enderror" name="isActive" required aria-label="Default select example">
                                            <option disabled selected="">-- Choose Client Status --
                                            </option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                        @error('isActive')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-10">
                                <div class="form-check form-switch mb-3" dir="ltr">
                                    <input type="checkbox" class="form-check-input @error('isClient') is-invalid @enderror" name="isClient" id="customSwitch1" checked>
                                    <label class="form-check-label" for="customSwitch1">Save As Client</label>
                                    @error('isClient')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row pt-15 mt-5">
                            <div class="row pt-15">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary"><i class=" fas fa-file-contract"></i>Save</button>
                                </div>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>

@endsection

@section('custom-script')
<script type="text/javascript">
    $(function () {
      const table = $('.client-table').DataTable({
          processing: true,
          responsive:true,
          serverSide: true,
          ajax: "{{ route('client.listing') }}",
          error: (error)=>{
                console.log('response',error);
            },
          columns: [
              {data: 'first_name', name: 'first_name'},
              {data: 'last_name', name: 'last_name'},
              {data: 'email', name: 'email'},
              {data: 'phone', name: 'phone'},
              {data: 'agent', name: 'agent'},
              {data: 'status', name: 'status'},
              {data: 'family', name: 'family'},
              {data: 'trips', name: 'trips'},
              {data: 'action', name: 'action'}
          ]
      });
      $(document).on("click",".delete-entity",function() {
        if(confirm('Are you sure you want to delete this client?')){
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
