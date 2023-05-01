@extends('master.master')
@section('page-title', 'CRM | ADD CLIENT')
@section('custom-style')
@endsection

@section('page-content')

    <!--[ Start:: page title and breadcrumb ]-->
    <div class="page-title mb-lg-4">

    </div>
    <!--[ Start:: page body area ]-->
    <div class="row AddClient">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">CLIENTS</h4>
                    </div>
                </div>
            </div>


            <div class="row mt-13">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">                       
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
                                <div class="row">
                                    <div class="border"></div>
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
                <div class="col-md-6 ">
                    <div class="card w-98 mb-5">
                        <div class="card-body ">
                            <div class="page-title-box d-flex align-items-center justify-content-between ">
                                <h4 class="mb-0 "><i class="fa fa-cubes"></i> WORKSPACE EXTENSIONS
                                </h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item ">
                                            <a class="" href="#"><button type="button"
                                                    class="btn btn-light"><i class="fa fa-plus"></i> Add Extension
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
                    <div class="card w-98 mb-5">
                        <div class="card-body">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 "><i class="fa fa-paw"></i> CONTACT DETAIL</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item ">
                                            <a class="" href="#"><button type="button"
                                                    class="btn btn-light"><i class="fa fa-plus"></i> Add CONTACT DETAIL
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
                    <div class="card w-98">
                        <div class="card-body">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 "><i class="fa fa-paw"></i> ADDITIONAL NOTES</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item ">
                                            <a class="" href="#">
                                                <i class=" ri-refresh-line"></i></a>
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
                                            <code>add client notes </code> once the client has been
                                            saved.
                                        </p>

                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="card w-98">
                        <div class="card-body">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 "><i class="fa fa-google-wallet"></i> PASSPORT
                                    DETAILS</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item ">
                                            <!-- <a class="" href="#"><button type="button"
                                                            class="btn btn-primary1 waves-effect waves-light "><i
                                                                class="fa fa-plus"></i> Add  CONTACT DETAIL </button></a> -->
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
                                            <code>widget </code>will be available once the contact
                                            has been
                                            created
                                        </p>

                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('custom-script')
@endsection
