@extends('master.master')
@section('page-title', 'CRM | DASHBOARD')
@section('custom-style')
    <link rel="stylesheet" href="{{asset('assets/css/newstyle.css')}}">
@endsection

@section('page-content')
    <!--[ Start:: page title and breadcrumb ]-->
    <div class="page-title mb-lg-4">
        <div class="container-fluid">
            <h1 class="mb-0 text-gradient font-heading text-uppercase">{{ auth()->user()->role }}'s WORKSPACE</h1>
            <div class="ms-sm-auto mt-2 mt-sm-0">
            </div>
        </div>
    </div>

    @if (auth()->user()->role == 'super-admin' || auth()->user()->role =='system-user')
        <!--[ Start:: page body area ]-->
        <div class="page-row">
            <div class="row">
                <div class="col-lg-4">
                    <!---->
                    <div ng-include="'js/modules/dashboard/views/dashboard.trips.in.progress.html'">
                        <div class="block" data-cg-busy="[ctrl.promise]"
                            ng-controller="DashboardTripsInProgressController as ctrl">
                            <div class="block-head">
                                <h2><i class="fa fa-plane"></i> Trips in progress/ upcoming</h2>
                                <ul class="buttons">
                                    <li uib-dropdown="" tess-feature-button="" feature-name="views.trips.addtrip"
                                        class="dropdown" style="display: block;">
                                        <a href="#" class="block-refresh btn btn-success dropdown-toggle"
                                            uib-dropdown-toggle=""aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <ul uib-dropdown-menu="" class="dropdown-menu-lg pull-right header dropdown-menu"
                                            style="width: 400px;">
                                            <li><a href="#"
                                                    data-ng-click="ctrl.addTrip($event, { 'TripMainTypeID': 1, 'TripMainTypeName': 'Regular Trip' })"><i
                                                        class="dropdown-icon fa fa-truck"></i>&nbsp;&nbsp;Regular Trip</a>
                                            </li>
                                            <!--<li><a href="" data-ng-click="ctrl.addTrip($event, { 'TripMainTypeID': 2, 'TripMainTypeName': 'Group/ Contract' })"><i class="dropdown-icon fa fa-suitcase"></i>&nbsp;&nbsp;Group/ Contract</a></li>-->
                                            <li><a href="#"
                                                    data-ng-click="ctrl.addTrip($event, { 'TripMainTypeID': 3, 'TripMainTypeName': 'Group/ No Contract' })"><i
                                                        class="dropdown-icon fa fa-ship"></i>&nbsp;&nbsp;Group/ No
                                                    Contract</a></li>


                                        </ul>
                                    </li>
                                    <li><a href="#" class="block-refresh" data-ng-click="ctrl.getData()"><i
                                                class="fa fa-refresh"></i></a></li>
                                </ul>
                            </div>
                            <!---->
                            <!---->
                            <div class="block-content np" style="min-height: 80px;"
                                data-ng-if="ctrl.data.CountFiltered === 0">
                                <div class="element">
                                    <div>
                                        <i class="fa fa-warning text-warning"></i> You do not have any trips in progress or
                                        upcoming.
                                    </div>
                                    <div>
                                        Let's add a trip by clicking the <code>Add Trip</code> button on the top right hand
                                        side.
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="" ng-show="$cgBusyIsActive()" aria-hidden="true" style=""></div>

                        </div>
                    </div>
                    <!---->
                    <div ng-include="'js/modules/dashboard/views/dashboard.tasks.due.html'">
                        <div class="block"
                            data-cg-busy="[ctrl.promise, ctrl.identitypromise, ctrl.taskstatuspromise, ctrl.tasktypepromise]"
                            ng-controller="TaskController as ctrl" ng-init="ctrl.initialize(5)">
                            <div class="block-head">
                                <h2><i class="fa fa-clock-o"></i> My Tasks due</h2>
                                <ul class="buttons">
                                    <li><a href="#" class="block-refresh" data-ng-click="ctrl.getData(true)"><span
                                                class="fa fa-refresh"></span></a></li>
                                </ul>
                            </div>
                            <!---->
                            <!---->
                            <div class="block-content np" style="min-height: 80px;"
                                data-ng-if="ctrl.data.CountFiltered === 0">
                                <div class="element">
                                    <div>
                                        <i class="fa fa-warning text-warning"></i> You do not have any tasks
                                        <code>due</code>.
                                    </div>
                                    <div>
                                        Tasks can be added by clicking on the Tasks menu option, or from within a trip or a
                                        booking.
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="" ng-show="$cgBusyIsActive()" aria-hidden="true" style=""></div>

                        </div>
                    </div>
                    <!---->
                    <div ng-include="'js/modules/dashboard/views/dashboard.client.portal.tasks.html'">
                        <div class="block" data-cg-busy="[ctrl.promise]"
                            ng-controller="DashboardClientPortalTaskController as ctrl">
                            <div class="block-head">
                                <h2><i class="fa fa-clock-o"></i> Client Portal Tasks</h2>
                                <ul class="buttons">
                                    <li><a href="#" ng-disabled="!ctrl.data.CountFiltered"
                                            data-ng-click="ctrl.exportTasks()" disabled="disabled"><span
                                                class="fa fa-download"></span></a></li>
                                    <li><a href="#" class="block-refresh" data-ng-click="ctrl.getData(true)"><span
                                                class="fa fa-refresh"></span></a></li>
                                </ul>
                            </div>
                            <!---->
                            <!---->
                            <div class="block-content np" style="min-height: 80px;"
                                data-ng-if="ctrl.data.CountFiltered === 0">
                                <div class="element">
                                    <div>
                                        <i class="fa fa-warning text-warning"></i> You do not have any
                                        <code>client portal tasks</code>.
                                    </div>
                                    <div>
                                        Client Portal Tasks can be added by creating a client portal task email from within
                                        trip.
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="" ng-show="$cgBusyIsActive()" aria-hidden="true" style=""></div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <!---->
                            <div ng-include="'js/modules/dashboard/views/dashboard.summary.sales.html'">
                                <div class="block" data-cg-busy="[ctrl.promise]"
                                    ng-controller="DashboardSummarySalesController as ctrl">
                                    <div class="widget widget-dark widget-item-icon">
                                        <div class="widget-item-left" style="height: 100%;">
                                            <div class="text-warning">SALES</div>
                                            <div class="widget-title">2022</div>
                                        </div>
                                        <div class="widget-data" style="text-align: center;">
                                            <div class="widget-subtitle">Month-to-Date</div>
                                            <div class="widget-title text-warning">$20.00</div>
                                            <div class="widget-subtitle">Year-to-Date</div>
                                            <div class="widget-title text-warning">$20.00</div>
                                        </div>
                                        <div class="widget-controls">
                                            <a href="#" class="widget-control-right"
                                                data-ng-click="ctrl.getData()"><span class="fa fa-refresh"></span></a>
                                        </div>
                                    </div>
                                    <div class="" ng-show="$cgBusyIsActive()" aria-hidden="true" style="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!---->
                            <div ng-include="'js/modules/dashboard/views/dashboard.summary.commission.received.html'">
                                <div class="block" data-cg-busy="[ctrl.promise]"
                                    ng-controller="DashboardSummaryCommissionReceivedController as ctrl">
                                    <div class="widget widget-default widget-item-icon">
                                        <div class="widget-item-left" style="height: 100%;">
                                            <div class="text-primary">COMMISSION RECEIVED</div>
                                            <div class="widget-title">2022</div>
                                        </div>
                                        <div class="widget-data" style="text-align: center;">
                                            <div class="widget-subtitle">Month-to-Date</div>
                                            <div class="widget-title text-primary">$30.00</div>
                                            <div class="widget-subtitle">Year-to-Date</div>
                                            <div class="widget-title text-primary">$30.00</div>
                                        </div>
                                        <div class="widget-controls">
                                            <a href="#" class="widget-control-right"
                                                data-ng-click="ctrl.getData()"><span class="fa fa-refresh"></span></a>
                                        </div>
                                    </div>
                                    <div class="" ng-show="$cgBusyIsActive()" aria-hidden="true" style="">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div ng-include="'js/modules/dashboard/views/dashboard.chart.top.sales.html'"></div>
                    <!---->
                    <div ng-include="'js/modules/dashboard/views/dashboard.chart.sales.html'">
                        <div class="block" data-cg-busy="[ctrl.promise]"
                            ng-controller="DashboardChartSalesController as ctrl">
                            <div class="block-head">
                                <h2><i class="fa fa-money"></i> Sales</h2>
                                <ul class="buttons">
                                    <li>
                                        <div class="input-group date-picker dp-blue"
                                            ng-class="{ 'is-opened': opened == true }">
                                            <input name="elementyear" type="text" placeholder="Date"
                                                datepicker-options="{ minMode: 'year' }" ng-change="ctrl.getData()"
                                                uib-datepicker-popup="yyyy" ng-model="ctrl.elementmodel" is-open="opened"
                                                required="" readonly=""
                                                class="ng-pristine ng-untouched ng-valid-date ng-not-empty ng-valid ng-valid-required"
                                                aria-invalid="false" style="">
                                            <div class="date-picker dp-blue ng-valid ng-not-empty"
                                                uib-datepicker-popup-wrap="" ng-model="date"
                                                ng-change="dateSelection(date)"
                                                template-url="uib/template/datepickerPopup/popup.html"
                                                aria-invalid="false" style="">
                                                <!---->
                                            </div>
                                            <span class="input-group-btn">
                                                <a href="#" class="btn btn-info" ng-click="opened = !opened"><i
                                                        class="fa fa-calendar"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li><a href="#" class="block-refresh" data-ng-click="ctrl.getData()"><span
                                                class="fa fa-refresh"></span></a></li>
                                </ul>
                            </div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <!---->
                                        <div class="progress-list" data-ng-repeat="item in ctrl.data.LastFour.Groups"
                                            style="">
                                            <div class="pull-left" data-ng-class="{ 'text-warning': $index === 3 }">
                                                <strong>April 2022</strong>
                                            </div>
                                            <div class="pull-right" data-ng-class="{ 'text-warning': $index === 3 }">
                                                $40.00
                                            </div>
                                            <div class="progress progress-small progress-striped">
                                                <div class="progress-bar progress-bar-dark"
                                                    data-ng-class="{ 'progress-bar-warning': $index === 3, 'progress-bar-dark': $index !== 3 }"
                                                    role="progressbar" aria-valuenow="{ item.Percentage }"
                                                    aria-valuemin="0" aria-valuemax="100"
                                                    data-ng-style="{'width': item.Percentage + '%'}" style="width: 0%;">0%
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                        <div class="progress-list" data-ng-repeat="item in ctrl.data.LastFour.Groups">
                                            <div class="pull-left" data-ng-class="{ 'text-warning': $index === 3 }">
                                                <strong>May 2022</strong>
                                            </div>
                                            <div class="pull-right" data-ng-class="{ 'text-warning': $index === 3 }">
                                                $40.00
                                            </div>
                                            <div class="progress progress-small progress-striped">
                                                <div class="progress-bar progress-bar-dark"
                                                    data-ng-class="{ 'progress-bar-warning': $index === 3, 'progress-bar-dark': $index !== 3 }"
                                                    role="progressbar" aria-valuenow="{ item.Percentage }"
                                                    aria-valuemin="0" aria-valuemax="100"
                                                    data-ng-style="{'width': item.Percentage + '%'}" style="width: 0%;">0%
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                        <div class="progress-list" data-ng-repeat="item in ctrl.data.LastFour.Groups">
                                            <div class="pull-left" data-ng-class="{ 'text-warning': $index === 3 }">
                                                <strong>June 2022</strong>
                                            </div>
                                            <div class="pull-right" data-ng-class="{ 'text-warning': $index === 3 }">
                                                $40.00
                                            </div>
                                            <div class="progress progress-small progress-striped">
                                                <div class="progress-bar progress-bar-dark"
                                                    data-ng-class="{ 'progress-bar-warning': $index === 3, 'progress-bar-dark': $index !== 3 }"
                                                    role="progressbar" aria-valuenow="{ item.Percentage }"
                                                    aria-valuemin="0" aria-valuemax="100"
                                                    data-ng-style="{'width': item.Percentage + '%'}" style="width: 0%;">0%
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                        <div class="progress-list" data-ng-repeat="item in ctrl.data.LastFour.Groups">
                                            <div class="pull-left text-warning"
                                                data-ng-class="{ 'text-warning': $index === 3 }"><strong>July 2022</strong>
                                            </div>
                                            <div class="pull-right text-warning"
                                                data-ng-class="{ 'text-warning': $index === 3 }">$40.00</div>
                                            <div class="progress progress-small progress-striped">
                                                <div class="progress-bar progress-bar-warning"
                                                    data-ng-class="{ 'progress-bar-warning': $index === 3, 'progress-bar-dark': $index !== 3 }"
                                                    role="progressbar" aria-valuenow="{ item.Percentage }"
                                                    aria-valuemin="0" aria-valuemax="100"
                                                    data-ng-style="{'width': item.Percentage + '%'}" style="width: 0%;">0%
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                        <!---->
                                        <p class="fs-12"><span class="fa fa-warning"></span>
                                            Switch to year view. <button type="button"
                                                class="btn btn-warning btn-sm pull-right"
                                                data-ng-click="ctrl.changeView()">Year view</button></p>
                                        <!---->
                                        <!---->
                                    </div>
                                    <div class="col-sm-8">
                                        <!---->
                                        <div data-ng-if="ctrl.data.Chart.HasData === false" style="min-height: 160px;"
                                            class="">
                                            <div class="element">
                                                <div>
                                                    <i class="fa fa-warning text-warning"></i> There is no
                                                    <code>Sales</code> data available for the year 2022.
                                                </div>
                                                <div>
                                                    Please select a different time period by clicking on the calendar icon
                                                    above.
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="" ng-show="$cgBusyIsActive()" aria-hidden="true" style=""></div>
                            <div class="" ng-show="$cgBusyIsActive()" aria-hidden="true" style="">

                            </div>
                        </div>
                    </div>
                    <!---->
                    <div ng-include="'js/modules/dashboard/views/dashboard.chart.commission.received.html'">
                        <div class="block" data-cg-busy="[ctrl.promise]"
                            ng-controller="DashboardChartCommissionReceivedController as ctrl">
                            <div class="block-head">
                                <h2><i class="fa fa-money"></i> Commission Received</h2>
                                <ul class="buttons">
                                    <li>
                                        <div class="input-group date-picker dp-blue"
                                            ng-class="{ 'is-opened': opened == true }">
                                            <input name="elementyear" type="text" placeholder="Date"
                                                datepicker-options="{ minMode: 'year' }" ng-change="ctrl.getData()"
                                                uib-datepicker-popup="yyyy" ng-model="ctrl.elementmodel" is-open="opened"
                                                required="" readonly=""
                                                class="ng-pristine ng-untouched ng-valid-date ng-not-empty ng-valid ng-valid-required"
                                                aria-invalid="false" style="">
                                            <div class="date-picker dp-blue ng-valid ng-not-empty"
                                                uib-datepicker-popup-wrap="" ng-model="date"
                                                ng-change="dateSelection(date)"
                                                template-url="uib/template/datepickerPopup/popup.html"
                                                aria-invalid="false" style="">
                                                <!---->
                                            </div>
                                            <span class="input-group-btn">
                                                <a href="#" class="btn btn-info" ng-click="opened = !opened"><i
                                                        class="fa fa-calendar"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li><a href="#" class="block-refresh" data-ng-click="ctrl.getData()"><span
                                                class="fa fa-refresh"></span></a></li>
                                </ul>
                            </div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <!---->
                                        <div class="progress-list" data-ng-repeat="item in ctrl.data.LastFour.Groups"
                                            style="">
                                            <div class="pull-left" data-ng-class="{ 'text-primary': $index === 3 }">
                                                <strong>April 2022</strong>
                                            </div>
                                            <div class="pull-right" data-ng-class="{ 'text-primary': $index === 3 }">
                                                $40.00
                                            </div>
                                            <div class="progress progress-small progress-striped">
                                                <div class="progress-bar progress-bar-dark"
                                                    data-ng-class="{ 'progress-bar-primary': $index === 3, 'progress-bar-dark': $index !== 3 }"
                                                    role="progressbar" aria-valuenow="{ item.Percentage }"
                                                    aria-valuemin="0" aria-valuemax="100"
                                                    data-ng-style="{'width': item.Percentage + '%'}" style="width: 0%;">0%
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                        <div class="progress-list" data-ng-repeat="item in ctrl.data.LastFour.Groups">
                                            <div class="pull-left" data-ng-class="{ 'text-primary': $index === 3 }">
                                                <strong>May 2022</strong>
                                            </div>
                                            <div class="pull-right" data-ng-class="{ 'text-primary': $index === 3 }">
                                                $40.00
                                            </div>
                                            <div class="progress progress-small progress-striped">
                                                <div class="progress-bar progress-bar-dark"
                                                    data-ng-class="{ 'progress-bar-primary': $index === 3, 'progress-bar-dark': $index !== 3 }"
                                                    role="progressbar" aria-valuenow="{ item.Percentage }"
                                                    aria-valuemin="0" aria-valuemax="100"
                                                    data-ng-style="{'width': item.Percentage + '%'}" style="width: 0%;">0%
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                        <div class="progress-list" data-ng-repeat="item in ctrl.data.LastFour.Groups">
                                            <div class="pull-left" data-ng-class="{ 'text-primary': $index === 3 }">
                                                <strong>June 2022</strong>
                                            </div>
                                            <div class="pull-right" data-ng-class="{ 'text-primary': $index === 3 }">
                                                $40.00
                                            </div>
                                            <div class="progress progress-small progress-striped">
                                                <div class="progress-bar progress-bar-dark"
                                                    data-ng-class="{ 'progress-bar-primary': $index === 3, 'progress-bar-dark': $index !== 3 }"
                                                    role="progressbar" aria-valuenow="{ item.Percentage }"
                                                    aria-valuemin="0" aria-valuemax="100"
                                                    data-ng-style="{'width': item.Percentage + '%'}" style="width: 0%;">0%
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                        <div class="progress-list" data-ng-repeat="item in ctrl.data.LastFour.Groups">
                                            <div class="pull-left text-primary"
                                                data-ng-class="{ 'text-primary': $index === 3 }"><strong>July 2022</strong>
                                            </div>
                                            <div class="pull-right text-primary"
                                                data-ng-class="{ 'text-primary': $index === 3 }">$40.00</div>
                                            <div class="progress progress-small progress-striped">
                                                <div class="progress-bar progress-bar-primary"
                                                    data-ng-class="{ 'progress-bar-primary': $index === 3, 'progress-bar-dark': $index !== 3 }"
                                                    role="progressbar" aria-valuenow="{ item.Percentage }"
                                                    aria-valuemin="0" aria-valuemax="100"
                                                    data-ng-style="{'width': item.Percentage + '%'}" style="width: 0%;">0%
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                        <!---->
                                        <p class="fs-12"><span class="fa fa-warning"></span>
                                            Switch to year view. <button type="button"
                                                class="btn btn-primary btn-sm pull-right"
                                                data-ng-click="ctrl.changeView()">Year view</button></p>
                                        <!---->
                                        <!---->
                                    </div>
                                    <div class="col-sm-8">
                                        <!---->
                                        <div data-ng-if="ctrl.data.Chart.HasData === false" style="min-height: 160px;"
                                            class="">
                                            <div class="element">
                                                <div>
                                                    <i class="fa fa-warning text-warning"></i> There is no
                                                    <code>Commission Received</code> data available for the year 2022.
                                                </div>
                                                <div>
                                                    Please select a different time period by clicking on the calendar icon
                                                    above.
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="" ng-show="$cgBusyIsActive()" aria-hidden="true" style=""></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('custom-script')
@endsection
