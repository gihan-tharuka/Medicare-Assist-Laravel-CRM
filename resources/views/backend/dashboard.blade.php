@extends('backend.layouts.app')

@section('content')
    <div class="pagetitle pl-5">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    {{-- show all the below content only if the admin is logged --}}
    @if (auth()->user()->role->value != 6)
        <section class="section dashboard pl-5">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8" style="flex: 1;">
                    <div class="row">

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Users and Customers</h5>

                                    <!-- Column Chart -->
                                    <div id="columnChart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            const data = {
                                                months: @json($months),
                                                users: @json($users),
                                                customers: @json($customers)
                                            };

                                            new ApexCharts(document.querySelector("#columnChart"), {
                                                series: [{
                                                    name: 'Users',
                                                    data: data.users,
                                                }, {
                                                    name: 'Customers',
                                                    data: data.customers
                                                }],
                                                chart: {
                                                    type: 'bar',
                                                    height: 350
                                                },
                                                plotOptions: {
                                                    bar: {
                                                        horizontal: false,
                                                        columnWidth: '55%',
                                                        endingShape: 'rounded'
                                                    },
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    show: true,
                                                    width: 2,
                                                    colors: ['transparent']
                                                },
                                                xaxis: {
                                                    categories: data.months,
                                                },
                                                yaxis: {
                                                    title: {
                                                        text: 'Count'
                                                    }
                                                },
                                                fill: {
                                                    opacity: 1
                                                },
                                                tooltip: {
                                                    y: {
                                                        formatter: function(val) {
                                                            return val + " counts"
                                                        }
                                                    }
                                                }
                                            }).render();
                                        });
                                    </script>
                                    <!-- End Column Chart -->

                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Subscriptions</h5>

                                    <!-- Pie Chart -->
                                    <div id="pieChart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            const subscriptionData = {
                                                basic: @json($subscriptionData['basic']),
                                                standard: @json($subscriptionData['standard']),
                                                premium: @json($subscriptionData['premium'])
                                            };

                                            new ApexCharts(document.querySelector("#pieChart"), {
                                                series: [subscriptionData.basic, subscriptionData.standard, subscriptionData.premium],
                                                chart: {
                                                    height: 350,
                                                    type: 'pie',
                                                    toolbar: {
                                                        show: true
                                                    }
                                                },
                                                labels: ['Basic Plan', 'Standard Plan', 'Premium Plan']
                                            }).render();
                                        });
                                    </script>
                                    <!-- End Pie Chart -->

                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Sales Data</h5>

                                    <!-- Line Chart -->
                                    <div id="lineChart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            const salesData = @json($sales);
                                            const months = @json($months);

                                            new ApexCharts(document.querySelector("#lineChart"), {
                                                series: [{
                                                    name: "Sales",
                                                    data: salesData
                                                }],
                                                chart: {
                                                    height: 350,
                                                    type: 'line',
                                                    zoom: {
                                                        enabled: false
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    curve: 'straight'
                                                },
                                                grid: {
                                                    row: {
                                                        colors: ['#f3f3f3', 'transparent'],
                                                        opacity: 0.5
                                                    },
                                                },
                                                xaxis: {
                                                    categories: months,
                                                },
                                                yaxis: {
                                                    title: {
                                                        text: 'Total Sales ($)'
                                                    }
                                                }
                                            }).render();
                                        });
                                    </script>
                                    <!-- End Line Chart -->

                                </div>
                            </div>
                        </div>


                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <div class="col-xxl-4" style="width: 100%;">

                        <div class="card info-card revenue-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>

                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Sales <span>| This Year</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Rs.{{ number_format($totalSales, 2) }}</h6>
                                        {{-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-xxl-4 " style="width: 100%;">
                        <div class="card info-card sales-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>

                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Customers <span>| Total</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalCustomers }}</h6>
                                        <span class="text-success small pt-1 fw-bold">Total Customers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4 " style="width: 100%;">
                        <div class="card info-card sales-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>

                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Users <span>| Total</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalUsers }}</h6>
                                        <span class="text-success small pt-1 fw-bold">Total Users</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div><!-- End Right side columns -->

            </div>
        </section>
    @endif
@endsection
