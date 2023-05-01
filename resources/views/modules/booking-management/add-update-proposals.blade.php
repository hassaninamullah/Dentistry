@extends('master.master')
@section('page-title', 'CRM | ADD PROPOSAL')
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


            <form action="{{route('booking.listings')}}" method="GET">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 pl-10"><i class="fa fa-truck"></i> TRIP INFORMATION
                                    </h4>
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
                                            <div class="col-md-3 pt-l">
                                                <label for="example-text-input" class="col-form-label ">Trip
                                                    Type</label>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="">-- Choose Trip Type --</option>
                                                    <option value="1">Anniversary</option>
                                                    <option value="2">Business Trip</option>
                                                    <option value="2">Honeymoon</option>
                                                    <option value="2">Other</option>
                                                    <option value="2">Vacation</option>
                                                    <option value="2">Wedding</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-md-4 pt-l">
                                                <label for="example-text-input" class="col-form-label ">Start
                                                    Date</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input class="form-control" type="date" value="2011-08-19"
                                                    id="example-date-input">
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
                                                <input class="form-control" type="text" placeholder="Agent"
                                                    id="example-text-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-md-4 pt-l">
                                                <label for="example-text-input" class="col-form-label ">End
                                                    Date</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input class="form-control" type="date" value="2011-08-19"
                                                    id="example-date-input">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 offset-md-6">
                                        <div class="row mb-3">
                                            <div class="col-md-4 pt-l">
                                                <label for="example-text-input" class="col-form-label ">Trip
                                                    Status</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="">-- Choose Trip Status --
                                                    </option>
                                                    <option value="1">Active</option>
                                                    <option value="2">Booked</option>
                                                    <option value="2">Cancelled</option>
                                                    <option value="2">Paid</option>
                                                    <option value="2">Ready To Travel</option>
                                                    <option value="2">Traveled</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="row mb-3">
                                            <div class="col-md-2 pt-l">
                                                <label for="example-text-input" class="col-form-label ">Trip
                                                    Description</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text"
                                                    placeholder="Trip Description (required)" id="example-text-input">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item TabsClick" value="home">
                                            <a class="nav-link active " data-bs-toggle="tab" href="#home" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block"><i class="fa fa-plane"></i> Add
                                                    Flight</span>
                                            </a>
                                        </li>
                                        <li class="nav-item TabsClick" value="profile">
                                            <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block" style="color:#c46500"><i
                                                        class="fa fa-hotel"></i> Add Resort/
                                                    Hotel</span>
                                            </a>
                                        </li>
                                        <li class="nav-item TabsClick" value="messages">
                                            <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                <span class="d-none d-sm-block" style="color:#2f8de0"><i
                                                        class="fa fa-ship"></i>
                                                    Add Cruise </span>
                                            </a>
                                        </li>
                                        <li class="nav-item TabsClick" value="settings">
                                            <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                <span class="d-none d-sm-block" style="color:#3a4a58"><i
                                                        class="fa fa-circle"></i> Add Tour</span>
                                            </a>
                                        </li>
                                        <li class="nav-item TabsClick" value="train">
                                            <a class="nav-link" data-bs-toggle="tab" href="#train" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                <span class="d-none d-sm-block" style="color:#4911b3">
                                                    <i class="fa fa-train"></i> Add Train</p></span>
                                            </a>
                                        </li>
                                        <li class="nav-item TabsClick" value="car">
                                            <a class="nav-link" data-bs-toggle="tab" href="#car" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                <span class="d-none d-sm-block" style="color:#40ab00"><i
                                                        class="fa fa-car"></i>
                                                    Add Car Rental</p></span>
                                            </a>
                                        </li>
                                        <li class="nav-item TabsClick" value="activity">
                                            <select class="form-select1" id="activitydropdown"
                                                aria-label="Default select example">

                                                <option selected="" value="">+ Add Activity</option>
                                                <option value="dining">+ Dining</option>
                                                <option value="Excursion">+ Excursion</option>
                                                <option value="FastPass">+ FastPass</option>
                                                <option value="Info">+ General Info</option>
                                                <option value="Tickets">+ Tickets</option>
                                                <option value="Transfer">+ Transfer</option>

                                            </select>
                                        </li>

                                    </ul>
                                </div>
                                <div class="tab-content p-3 text-muted">
                                    <div class="tab-pane active TripParentTabs" id="home" role="tabpanel">

                                        <div class="row">
                                            <div class="col-md-1">
                                                <p class="">
                                                    <i class="fa fa-plane"></i><br>


                                                </p>
                                                <div class="color-red left-16">
                                                    <p><i class="fas fa-trash"></i> </p>
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Departure
                                                        Date
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="col-md-5 ">
                                                    <label for="example-text-input" class=" ">Flight
                                                        Number
                                                        *</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane TripParentTabs" id="profile" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-1 ">
                                                <p class="">
                                                    <i class="fa fa-bed"></i><br>


                                                </p>
                                                <div class="color-red left-16"><i class="fas fa-trash"></i>
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Check-in
                                                        Date
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="row mb-3">
                                                    <div class="col-md-10">
                                                        <label for="example-time-input" class=" col-form-label">Time</label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="time" value="13:45:00"
                                                            id="example-time-input">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Check-out Date
                                                            *</label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="date" value="2011-08-19"
                                                            id="example-date-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="row mb-3">
                                                    <div class="col-md-10">
                                                        <label for="example-time-input" class=" col-form-label">Time</label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="time" value="13:45:00"
                                                            id="example-time-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Confirmation
                                                            #</label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="date" value="2011-08-19"
                                                            id="example-date-input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-check1 mb-2">
                                                    <input type="radio" id="radio1" name="radio"
                                                        class="form-check-input" value="success" checked="">
                                                    <label class="form-check-label" for="radio1">Primary</label>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="col-md-6">
                                                    <label for="example-time-input" class="">Property
                                                        Name *</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input class="form-control" type="text"
                                                        placeholder="Trip Description (required)" id="example-text-input">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane TripParentTabs" id="messages" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-1 ">
                                                <p class="">
                                                    <i class="fa fa-ship"></i><br>


                                                </p>
                                                <div class="color-red left-16"><i class="fas fa-trash"></i>
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Departure
                                                        Date
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row mb-3">
                                                    <div class="col-md-10">
                                                        <label for="example-time-input" class=" col-form-label">Time
                                                            *</label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="time" value="13:45:00"
                                                            id="example-time-input">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Confirmation
                                                            #</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="date" value="2011-08-19"
                                                            id="example-date-input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-check1 mb-2">
                                                    <input type="radio" id="radio1" name="radio"
                                                        class="form-check-input" value="success" checked="">
                                                    <label class="form-check-label" for="radio1">Primary</label>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="col-md-6">
                                                    <label for="example-time-input" class="">Cruise Name
                                                        *</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input class="form-control" type="text"
                                                        placeholder="Trip Description (required)" id="example-text-input">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane TripParentTabs" id="settings" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-1 ">
                                                <p class="">
                                                    <i class="fa fa-circle"></i><br>


                                                </p>
                                                <div class="color-red left-16"><i class="fas fa-trash"></i>
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Departure
                                                        Date
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row mb-3">
                                                    <div class="col-md-10">
                                                        <label for="example-time-input" class=" col-form-label">Time
                                                            *</label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="time" value="13:45:00"
                                                            id="example-time-input">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Confirmation
                                                            #</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="date" value="2011-08-19"
                                                            id="example-date-input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-check1 mb-2">
                                                    <input type="radio" id="radio1" name="radio"
                                                        class="form-check-input" value="success" checked="">
                                                    <label class="form-check-label" for="radio1">Primary</label>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="col-md-6">
                                                    <label for="example-time-input" class="">Tour Name
                                                        *</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input class="form-control" type="text"
                                                        placeholder="Trip Description (required)" id="example-text-input">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane TripParentTabs" id="train" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-1 ">
                                                <p class="">
                                                    <i class="fa fa-ship"></i><br>
                                                </p>
                                                <div class="color-red left-16"><i class="fas fa-train"></i>
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Departure
                                                        Date
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Departure
                                                        Date
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Departure
                                                            Description</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" id="example-date-input">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">


                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Departure
                                                        Date
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Arrival
                                                        Date *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Arrival
                                                            Description</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" id="example-date-input">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="tab-pane TripParentTabs" id="car" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <p class="">
                                                    <i class="fa fa-car"></i><br>

                                                </p>
                                                <div class="color-red left-16"><i class="fas fa-trash"></i>
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Pick-up
                                                        Date *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Time
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Pick-up
                                                            Description</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" id="example-date-input">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">


                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Return
                                                        Date *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Time *
                                                    </label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Return
                                                            Description</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" id="example-date-input">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="tab-pane activitytabs" id="dining" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-1 ">
                                                <p class="">
                                                    <i class=" ri-dingding-fill"></i><br>

                                                </p>
                                                <div class="color-red left-16"><i class="fas fa-trash"></i>
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Activity
                                                        Date
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Time
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Activity
                                                            Name *
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text"
                                                            placeholder="Select Dining (3 characters minimum)"
                                                            id="example-date-input">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">


                                            </div>
                                            <div class="col-md-4">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Confirmation #
                                                    </label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text"
                                                        placeholder="Confirmation Number" id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Description/
                                                            Instructions</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" id="example-date-input">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="tab-pane activitytabs" id="Excursion" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <p class="">
                                                    <i class="fas fa-passport"></i><br>

                                                </p>
                                                <div class="color-red left-16"><i class="fas fa-trash"></i>
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Activity
                                                        Date
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Time
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Activity
                                                            Name *
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text"
                                                            placeholder="Select Dining (3 characters minimum)"
                                                            id="example-date-input">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">


                                            </div>
                                            <div class="col-md-4">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Confirmation #
                                                    </label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text"
                                                        placeholder="Confirmation Number" id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Description/
                                                            Instructions</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" id="example-date-input">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="tab-pane activitytabs" id="FastPass" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <p class="">
                                                    <i class="fas fa-fast-forward"></i><br>


                                                </p>
                                                <div class="color-red left-16"><i class="fas fa-trash"></i>
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Activity
                                                        Date
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Time
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Activity
                                                            Name *
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text"
                                                            placeholder="Select Dining (3 characters minimum)"
                                                            id="example-date-input">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">


                                            </div>
                                            <div class="col-md-4">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Confirmation #
                                                    </label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text"
                                                        placeholder="Confirmation Number" id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Description/
                                                            Instructions</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" id="example-date-input">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="tab-pane activitytabs" id="Info" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-1 ">
                                                <p class="">
                                                    <i class="fa fa-info-circle" aria-hidden="true"></i><br>
                                                </p>
                                                <div class="color-red left-16"><i class="fas fa-trash"></i>
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Activity
                                                        Date
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Time
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Activity
                                                            Name *
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text"
                                                            placeholder="Select Dining (3 characters minimum)"
                                                            id="example-date-input">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">


                                            </div>
                                            <div class="col-md-4">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Confirmation #
                                                    </label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text"
                                                        placeholder="Confirmation Number" id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Description/
                                                            Instructions</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" id="example-date-input">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="tab-pane activitytabs" id="Tickets" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <p class="">
                                                    <i class="fas fa-ticket-alt" aria-hidden="true"></i><br>

                                                </p>
                                                <div class="color-red left-16"><i class="fas fa-trash"></i>
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Activity
                                                        Date
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Time
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Activity
                                                            Name *
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text"
                                                            placeholder="Select Dining (3 characters minimum)"
                                                            id="example-date-input">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">


                                            </div>
                                            <div class="col-md-4">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Confirmation #
                                                    </label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text"
                                                        placeholder="Confirmation Number" id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Description/
                                                            Instructions</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" id="example-date-input">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="tab-pane activitytabs" id="Transfer" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <p class="">
                                                    <i class="fas fa-truck" aria-hidden="true"></i><br>

                                                </p>
                                                <div class="color-red left-16"><i class="fas fa-trash"></i>
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Activity
                                                        Date
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Time
                                                        *</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" value="2011-08-19"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Activity
                                                            Name *
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text"
                                                            placeholder="Select Dining (3 characters minimum)"
                                                            id="example-date-input">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">


                                            </div>
                                            <div class="col-md-4">
                                                <div class="col-md-10">
                                                    <label for="example-text-input" class=" ">Confirmation #
                                                    </label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text"
                                                        placeholder="Confirmation Number" id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="example-time-input" class=" col-form-label">Description/
                                                            Instructions</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="text" id="example-date-input">
                                                    </div>
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
                                                <ul class="float-end">
                                                    <li class="list-inline-item"><button type="submit"
                                                            class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                                                    </li>
                                                </ul>
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
                </div>
            </form>
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
