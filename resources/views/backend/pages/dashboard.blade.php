@extends('backend.layouts.master')
@section('title', 'Admin Dashboard | Medicare Diagnostic Lab')
@section('content')

    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Dashboard</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <h1>Welcome, {{ Auth::user()->name }}</h1>

            @if(Auth::user()->user_type === 'admin')
                <p>You are logged in as <strong>Admin</strong>.</p>
            @elseif(Auth::user()->user_type === 'staff')
                <p>You are logged in as <strong>Staff</strong>.</p>
        @endif


        <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Total Users</h6>
                            <h4 class="mb-3">150 <span class="badge bg-light-success border border-success"><i class="ti ti-trending-up"></i> 10%</span></h4>
                            <p class="mb-0 text-muted text-sm">Added <span class="text-success">15</span> new users this month</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Ambulance Requests</h6>
                            <h4 class="mb-3">45 <span class="badge bg-light-primary border border-primary"><i class="ti ti-trending-up"></i> 5%</span></h4>
                            <p class="mb-0 text-muted text-sm">Processed <span class="text-primary">5</span> requests today</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Pharmacy Orders</h6>
                            <h4 class="mb-3">80 <span class="badge bg-light-warning border border-warning"><i class="ti ti-trending-down"></i> 3%</span></h4>
                            <p class="mb-0 text-muted text-sm">Pending <span class="text-warning">8</span> orders</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Pending Tasks</h6>
                            <h4 class="mb-3">12 <span class="badge bg-light-danger border border-danger"><i class="ti ti-trending-up"></i> 2%</span></h4>
                            <p class="mb-0 text-muted text-sm">Due <span class="text-danger">3</span> tasks today</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-8">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="mb-0">Service Requests</h5>
                        <ul class="nav nav-pills justify-content-end mb-0" id="chart-tab-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="chart-tab-home-tab" data-bs-toggle="pill" data-bs-target="#chart-tab-home" type="button" role="tab" aria-controls="chart-tab-home" aria-selected="true">Month</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="chart-tab-profile-tab" data-bs-toggle="pill" data-bs-target="#chart-tab-profile" type="button" role="tab" aria-controls="chart-tab-profile" aria-selected="false">Week</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content" id="chart-tab-tabContent">
                                <div class="tab-pane" id="chart-tab-home" role="tabpanel" aria-labelledby="chart-tab-home-tab" tabindex="0">
                                    <div id="visitor-chart-1"></div>
                                </div>
                                <div class="tab-pane show active" id="chart-tab-profile" role="tabpanel" aria-labelledby="chart-tab-profile-tab" tabindex="0">
                                    <div id="visitor-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-4">
                    <h5 class="mb-3">Revenue Overview</h5>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">This Week Revenue</h6>
                            <h3 class="mb-3">$12,500</h3>
                            <div id="income-overview-chart"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-8">
                    <h5 class="mb-3">Recent Requests</h5>
                    <div class="card tbl-card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-borderless mb-0">
                                    <thead>
                                    <tr>
                                        <th>REQUEST ID</th>
                                        <th>SERVICE TYPE</th>
                                        <th>TOTAL REQUESTS</th>
                                        <th>STATUS</th>
                                        <th class="text-end">TIMESTAMP</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="#" class="text-muted">REQ001</a></td>
                                        <td>Ambulance</td>
                                        <td>1</td>
                                        <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-danger f-10 m-r-5"></i>Rejected</span></td>
                                        <td class="text-end">09:28 PM</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="text-muted">REQ002</a></td>
                                        <td>Pharmacy</td>
                                        <td>5</td>
                                        <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-warning f-10 m-r-5"></i>Pending</span></td>
                                        <td class="text-end">09:15 PM</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="text-muted">REQ003</a></td>
                                        <td>Diagnostic</td>
                                        <td>3</td>
                                        <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span></td>
                                        <td class="text-end">08:45 PM</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="text-muted">REQ004</a></td>
                                        <td>Ambulance</td>
                                        <td>2</td>
                                        <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-danger f-10 m-r-5"></i>Rejected</span></td>
                                        <td class="text-end">08:00 PM</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="text-muted">REQ005</a></td>
                                        <td>Pharmacy</td>
                                        <td>10</td>
                                        <td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-warning f-10 m-r-5"></i>Pending</span></td>
                                        <td class="text-end">07:30 PM</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-4">
                    <h5 class="mb-3">Performance Report</h5>
                    <div class="card">
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
                                Service Response Time
                                <span class="h5 mb-0">95%</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
                                Patient Satisfaction
                                <span class="h5 mb-0">88%</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
                                Operational Efficiency
                                <span class="h5 mb-0">92%</span>
                            </a>
                        </div>
                        <div class="card-body px-2">
                            <div id="analytics-report-chart"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-8">
                    <h5 class="mb-3">Revenue Report</h5>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">This Week Revenue</h6>
                            <h3 class="mb-0">$12,500</h3>
                            <div id="sales-report-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-4">
                    <h5 class="mb-3">Activity Log</h5>
                    <div class="card">
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-s rounded-circle text-success bg-light-success">
                                            <i class="ti ti-stethoscope f-18"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Diagnostic Request</h6>
                                        <p class="mb-0 text-muted">Today, 09:28 PM</p>
                                    </div>
                                    <div class="flex-shrink-0 text-end">
                                        <h6 class="mb-1">Approved</h6>
                                        <p class="mb-0 text-muted">REQ003</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-s rounded-circle text-primary bg-light-primary">
                                            <i class="ti ti-ambulance f-18"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Ambulance Request</h6>
                                        <p class="mb-0 text-muted">Today, 09:15 PM</p>
                                    </div>
                                    <div class="flex-shrink-0 text-end">
                                        <h6 class="mb-1">Pending</h6>
                                        <p class="mb-0 text-muted">REQ002</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-s rounded-circle text-danger bg-light-danger">
                                            <i class="ti ti-prescription-bottle f-18"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Pharmacy Order</h6>
                                        <p class="mb-0 text-muted">Today, 08:45 PM</p>
                                    </div>
                                    <div class="flex-shrink-0 text-end">
                                        <h6 class="mb-1">Rejected</h6>
                                        <p class="mb-0 text-muted">REQ001</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style')
    <style>
        /*.pc-content {*/
        /*    background: linear-gradient(135deg, #F7F9FC, #EDEEF1) !important;*/
        /*}*/
        .card {
            /*background-color: #FFF8E7 !important;*/
            border: 1px solid rgba(0, 0, 0, 0.05) !important;
        }
        .text-muted {
            color: #7A7A7A !important;
        }
        /*.text-primary {*/
        /*    color: #D4A373 !important;*/
        /*}*/
        .text-success {
            color: #50C878 !important;
        }
        .text-warning {
            color: #F1C40F !important;
        }
        .text-danger {
            color: #E74C3C !important;
        }
        .badge.bg-light-primary {
            background-color: rgba(212, 163, 115, 0.1) !important;
            /*color: #D4A373 !important;*/
            /*border-color: #D4A373 !important;*/
        }
        .badge.bg-light-success {
            background-color: rgba(80, 200, 120, 0.1) !important;
            color: #50C878 !important;
            border-color: #50C878 !important;
        }
        .badge.bg-light-warning {
            background-color: rgba(241, 196, 15, 0.1) !important;
            color: #F1C40F !important;
            border-color: #F1C40F !important;
        }
        .badge.bg-light-danger {
            background-color: rgba(231, 76, 60, 0.1) !important;
            color: #E74C3C !important;
            border-color: #E74C3C !important;
        }
        .list-group-item {
            background-color: transparent !important;
            color: #4A4A4A !important;
        }
    </style>
@endsection
