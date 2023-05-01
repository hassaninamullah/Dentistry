@extends('master.master')
@section('page-title', 'CRM | TRIP LISTINGS')
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
                <li class="breadcrumb-item active" aria-current="page">TRIPS</li>
            </ol>
            <a href="#" onclick="history.go(-1)"
                class="fa fa-arrow-circle-left me-3 fs-5 gray-5 text-decoration-none"></a>
            <h1 class="mb-0 text-gradient font-heading">TRIPS</h1>
        </div>
    </div>
    <!--[ Start:: page body area ]-->
    <main class="page-body">
        <div class="container-fluid">
            <div class="row g-xl-4 g-lg-3 g-2 justify-content-between">
                <div class="col-xxl-12 col-xl-12 col-lg-12 order-1 order-xl-0">
                    <div class="card mb-4">
                        <div class="card-header">
                            {{--<button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#exampleModalLive"><i class="fa fa-plus"></i> New Trip</button>--}}
                        </div>
                        <div class="card-body">
                            <table class="my_data_table table display dataTable table-hover">
                                <thead>
                                    <tr>
                                        <th>Client Name</th>
                                        <th>Agent Name</th>
                                        <th>Trip Type</th>
                                        <th>Start Date</th>
                                        <th>End date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @for ($i=0; $i< 100; $i++)
                                        <tr>
                                            <td class="sorting_1">Michelle</td>
                                            <td>Chris</td>
                                            <td>Vacation</td>
                                            <td>2023-04-25</td>
                                            <td>2023-04-30</td>
                                            <td>PAID</td>
                                        </tr>
                                    @endfor
                                </tbody>
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
                    <div class="row mb-3">
                        <div class="col-md-1 w-12">
                            <label for="example-text-input" class="col-form-label">Subject </label>
                        </div>

                        <div class="col-md-10">
                            <input class="form-control" type="text" placeholder="Task Subject (required)"
                                id="example-text-input">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="example-text-input" class=" col-form-label">Due Date
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <div class="input-group" id="datepicker2">
                                        <input type="text" class="form-control" placeholder="dd M, yyyy"
                                            data-date-format="dd M, yyyy" data-date-container='#datepicker2'
                                            data-provide="datepicker" data-date-autoclose="true">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                <!-- input-group -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="example-text-input" class=" col-form-label">Reminder
                                        :</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3">

                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">No reminder</option>
                                            <option value="1">Date due</option>
                                            <option value="2">1 day</option>
                                            <option value="3">2 days</option>
                                            <option value="4">3 days</option>
                                            <option value="7">7 days</option>
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
                                    <label for="example-text-input" class=" col-form-label">Assigned
                                        To </label>
                                </div>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" placeholder="Search Agent"
                                        id="example-text-input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-1 w-12">
                            <div class="mt-3">
                                <label class="mb-1 col-form-label">Textarea</label>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="example-text-input" class=" col-form-label">Task
                                        Type :</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="mb-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">-- Choose Task Type --</option>
                                            <option value="1">General</option>
                                            <option value="2">Payment</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="example-text-input" class=" col-form-label">Task
                                        Status :</label>
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
