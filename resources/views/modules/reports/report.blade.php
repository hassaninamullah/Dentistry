@extends('master.master')
@section('page-title', 'CRM | REPORTS')
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
            <li class="breadcrumb-item active" aria-current="page">Reports</li>
        </ol>
        <a href="#" onclick="history.go(-1)" class="fa fa-arrow-circle-left me-3 fs-5 gray-5 text-decoration-none"></a>
        <h1 class="mb-0 text-gradient font-heading">Reports</h1>
    </div>
</div>
<!--[ Start:: page body area ]-->
<main class="page-body">
    <div class="container-fluid">
        <div class="row g-xl-4 g-lg-3 g-2 justify-content-between">
            <div class="col-xxl-12 col-xl-12 col-lg-12 order-1 order-xl-0">
                <div class="card mb-4">
                    <div class="card-header">
                        {{--<button type="button" class="btn btn-secondary"> Send</button>
                        <button type="button" class="btn btn-secondary"> Delete</button>--}}
                    </div>
                    <div class="card-body">
                        <table class="my_data_table table display dataTable table-hover">
                            <thead>
                                <tr>
                                    <th>Promotion Reports</th>
                                    <th>Check History</th>
                                    <th>Commission Reports</th>
                                    <th>Sales </th>
                                    <th>Projected Income</th>
                                    <th>Commission Earned</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>

                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Daily Report</td>
                                    <td>Daily</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Weekly Report</td>
                                    <td>Weekly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                                <tr>
                                    <td>Monthly Report</td>
                                    <td>Monthly</td>
                                    <td>324$</td>
                                    <td>33222$</td>
                                    <td>3232344$</td>
                                    <td>2311221$</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div> <!--[ .row end ]-->
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
                <div class="row mb-3">

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3 ">
                                <label for="example-text-input" class="col-form-label">Name
                                    :</label>
                            </div>

                            <div class="col-md-9">
                                <input class="form-control" type="text" placeholder="Name" id="example-text-input">
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

                                    <select class="form-select" aria-label="Default select example">
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
                                <input class="form-control" type="number" placeholder="number" id="example-text-input">
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
                                <input class="form-control" type="text" placeholder="Address" id="example-text-input">
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
                                <input class="form-control" type="email" placeholder="Emails" id="example-text-input">
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
                                <input class="form-control" type="number" placeholder="Agency Contacts"
                                    id="example-text-input">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="example-text-input" class=" col-form-label">Weblinks :</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" placeholder="Weblinks " id="example-text-input">
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
                                <input class="form-control" type="file" placeholder="Weblinks " id="example-text-input">
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
                                    <select class="form-select" aria-label="Default select example">
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
</div>
@endsection

@section('custom-script')
@endsection
