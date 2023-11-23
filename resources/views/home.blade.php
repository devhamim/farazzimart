@extends('layouts.dashboard')

@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Ecommerce</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item ">Dashboard</li>
            <li class="breadcrumb-item active">Ecommerce</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-md-4 mb-3">
            <a href="#">
                <div class="card border-3 border-top border-top-success">
                    <div class="card-body">
                        @php
                            $orders_price = 0;
                            foreach ($orders_list as $order) {
                                // $total_order = $order->quantity*$order->total;
                                $orders_price += $order->total;
                            }
                            @endphp
                        <h5>Total Revenue</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">৳ {{ $orders_price }}</h1>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-md-4 mb-3">
            <a href="#">
                <div class="card border-3 border-top border-top-success">
                    <div class="card-body">
                        <h5 class="text-info">Total Staff</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">{{ $users_count }}</h1>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-md-4 mb-3">
            <a href="#">
                <div class="card border-3 border-top border-top-success">
                    <div class="card-body">
                        <h5 class="text-info">Total Order</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">{{ $orders_count }}</h1>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-md-4 mb-3">
            <a href="#">
                <div class="card border-3 border-top border-top-success">
                    <div class="card-body">
                        <h5 class="text-info">Total Product</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">{{ $products_count }}</h1>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-md-4 mb-3">
            <a href="#">
                <div class="card border-3 border-top border-top-success">
                    <div class="card-body">
                        <h5 class="text-info">Total Processing</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">{{ $total_processing }}</h1>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-md-4 mb-3">
            <a href="#">
                <div class="card border-3 border-top border-top-success">
                    <div class="card-body">
                        <h5 class="text-info">Total Pending Payment</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">{{ $total_pending }}</h1>
                        </div>
                    </div>
                </div>
            </a>
        </div> 
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-md-4 mb-3">
            <a href="#">
                <div class="card border-3 border-top border-top-success">
                    <div class="card-body">
                        <h5 class="text-info">Total Hold</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">{{ $total_hold }}</h1>
                        </div>
                    </div>
                </div>
            </a>
        </div> 
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-md-4 mb-3">
            <a href="#">
                <div class="card border-3 border-top border-top-success">
                    <div class="card-body">
                        <h5 class="text-info">Total Canceled</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">{{ $total_cancel }}</h1>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-md-4 mb-3">
            <a href="#">
                <div class="card border-3 border-top border-top-success">
                    <div class="card-body">
                        <h5 class="text-info">Total Completed</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">{{ $total_completed }}</h1>
                        </div>
                    </div>
                </div>
            </a>
        </div> 
    </div>
    <div class="row">

        <!-- chart cards start -->
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header with-elements">
                    <h6 class="card-header-title mb-0">Sale Order</h6>
                    <div class="card-header-elements ml-auto">
                        <label class="text m-0">
                            <span class="text-light text-tiny font-weight-semibold align-middle">SHOW STATS</span>
                            <span class="switcher switcher-sm d-inline-block align-middle mr-0 ml-2">
                                <input type="checkbox" class="switcher-input" checked>
                                <span class="switcher-indicator">
                                    <span class="switcher-yes"></span>
                                    <span class="switcher-no"></span>
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="row no-gutters row-bordered">
                    <div class="col-md-5 col-lg-12 col-xl-5">
                        <div class="card-body">
                            <div class="pb-4">
                                Total Sale
                                <div class="float-right">
                                    <span class="text-muted small">৳{{ $total_processing }}</span><i class="feather icon-arrow-down text-danger"></i>
                                </div>
                                <div class="progress mt-1" style="height:6px;">
                                    <div class="progress-bar bg-primary" style="width: 45%;"></div>
                                </div>
                            </div>
                            <div class="pb-4">
                                Stock
                                <div class="float-right">
                                    <span class="text-muted small">{{ $products_count }} P</span><i class="feather icon-arrow-up text-success"></i>
                                </div>
                                <div class="progress mt-1" style="height:6px;">
                                    <div class="progress-bar bg-success" style="width: 90%;"></div>
                                </div>
                            </div>
                            <div class="pb-4">
                                Total Order
                                <div class="float-right">
                                    <span class="text-muted small">{{ $orders_count }}</span><i class="feather icon-arrow-up text-success"></i>
                                </div>
                                <div class="progress mt-1" style="height:6px;">
                                    <div class="progress-bar bg-danger" style="width: 30%;"></div>
                                </div>
                            </div>
                            <div class="pb-0">
                                User
                                <div class="float-right">
                                    <span class="text-muted small">{{ $users_count }}</span><i class="feather icon-arrow-down text-danger"></i>
                                </div>
                                <div class="progress mt-1" style="height:6px;">
                                    <div class="progress-bar bg-warning" style="width: 55%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-12 col-xl-7">
                        <div class="card-body">
                            <div id="chart-pie-moris" style="height:250px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card d-flex w-100 mb-4">
                <div class="row no-gutters row-bordered row-border-light h-100">
                    <div class="d-flex col-sm-6 col-md-6 col-lg-6 align-items-center">
                        <div class="card-body media align-items-center text-dark">
                            <i class="lnr lnr-diamond display-4 d-block text-primary"></i>
                            <span class="media-body d-block ml-3">
                                <span class="text-big mr-1 text-primary">৳{{ $orders_price }}</span>
                                <br>
                                <small class="text-muted">Total Earned</small>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4 bg-pattern-2-dark">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="lnr lnr-cart display-4 text-primary"></div>
                                <div class="ml-3">
                                    @php
                                        $monthly = 0;

                                        $monthly += $month_order
                                    @endphp

                                    <div class="text-muted small">Monthly sales</div>
                                    <div class="text-large">৳{{ $monthly }}</div>
                                </div>
                            </div>
                            <div id="ecom-chart-1" class="mt-4 chart-shadow-primary" style="height:55px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4 bg-pattern-2-dark">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="lnr lnr-gift display-4 text-danger"></div>
                                <div class="ml-3">
                                    <div class="text-muted small">Products</div>
                                    <div class="text-large">{{ $products_count }}</div>
                                </div>
                            </div>
                            <div id="ecom-chart-3" class="mt-4 chart-shadow-danger" style="height:55px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- chart cards end -->

        <!-- Data card 8 Start -->
        {{-- <div class="col-xl-8 col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Latest Order</h5>
                <div class="table-responsive">
                    <table class="table table-hover table-borderless">
                        <thead>
                            <tr>
                                <th>Customer</th>
                                <th>Order ID</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders_list->take(5) as $orders)
                            @if ($orders->rel_to_product != null)
                            <tr>
                                <td>{{ $orders->customer_id }}</td>
                                <td>{{ $orders->order_id }}</td>
                                    <td>{{ $orders->rel_to_product->product_name }}</td>
                                    <td>{{ $orders->quantity }}</td>
                                    <td>{{ $orders->created_at->format('d-M-Y') }}</td>
                                <td>
                                    <label class="label label-warning">
                                        @if ($orders->status == 0)
                                            Pending
                                        @elseif ($orders->status == 1)
                                            Confirm
                                        @elseif ($orders->status == 2)
                                            Packaging
                                        @elseif ($orders->status == 3)
                                        On the way
                                        @else
                                        Delivery
                                        @endif
                                    </label>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}
        {{-- <div class="col-xl-4 col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Anual Sales Report</h5>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Brand</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands->take(5) as $brand)

                            <tr>
                                <td><img src="{{ asset('uploads/brand') }}/{{ $brand->brand_image }}" alt="" class="img-fluid rounded-circle ui-w-20"></td>
                                <td>{{ $brand->brand_name }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}
    </div>
</div>

@endsection

<script>
    function buildchart() {
    $(function() {
        var graph = Morris.Donut({
            element: 'chart-pie-moris',
            data: [{
                    value: {{ $total_processing  }},
                    label: 'Order'
                },
                {
                    value: {{ $products_count }},
                    label: 'Stock'
                },
                {
                    value: {{ $orders_count }},
                    label: 'Total Order'
                },
                {
                    value: {{ $users_count }},
                    label: 'User'
                }
            ],
            colors: ['#ff4a00', '#FF4961', '#62d493', '#f4ab55'],
            resize: true,
            formatter: function(x) {
                return x + " %"
            }
        });
        //Flot Base Build Option for bottom join
        var options_bt = {
            legend: {
                show: false
            },
            series: {
                label: "",
                shadowSize: 0,
                curvedLines: {
                    active: true,
                    nrSplinePoints: 20
                },
            },
            tooltip: {
                show: true,
                content: "x : %x | y : %y"
            },
            grid: {
                hoverable: true,
                borderWidth: 0,
                labelMargin: 0,
                axisMargin: 0,
                minBorderMargin: 0,
                margin: {
                    top: 5,
                    left: 0,
                    bottom: 0,
                    right: 0,
                }
            },
            yaxis: {
                min: 0,
                max: 30,
                color: 'transparent',
                font: {
                    size: 0,
                }
            },
            xaxis: {
                color: 'transparent',
                font: {
                    size: 0,
                }
            }
        };

        //Flot Base Build Option for Center card
        var options_ct = {
            legend: {
                show: false
            },
            series: {
                label: "",
                shadowSize: 0,
                curvedLines: {
                    active: true,
                    nrSplinePoints: 20
                },
            },
            tooltip: {
                show: true,
                content: "x : %x | y : %y"
            },
            grid: {
                hoverable: true,
                borderWidth: 0,
                labelMargin: 0,
                axisMargin: 0,
                minBorderMargin: 5,
                margin: {
                    top: 8,
                    left: 8,
                    bottom: 8,
                    right: 8,
                }
            },
            yaxis: {
                min: 0,
                max: 30,
                color: 'transparent',
                font: {
                    size: 0,
                }
            },
            xaxis: {
                color: 'transparent',
                font: {
                    size: 0,
                }
            }
        };
        //Flot Ecommerce Chart Start
        $.plot($("#ecom-chart-1"), [{
            data: [
                [0, 30],
                [1, 5],
                [2, 26],
                [3, 10],
                [4, 22],
                [5, 30],
                [6, 5],
                [7, 26],
                [8, 10],
            ],
            color: "#ff4a00",
            lines: {
                show: true,
                fill: false,
                lineWidth: 3
            },
            points: {
                show: true,
                radius: 4,
                fillColor: "#fff",
                fill: true,
            },
            curvedLines: {
                apply: false,
            }
        }], options_ct);

        $.plot($("#ecom-chart-3"), [{
            data: [
                [0, 30],
                [1, 5],
                [2, 26],
                [3, 10],
                [4, 22],
                [5, 30],
                [6, 5],
                [7, 26],
                [8, 10],
            ],
            color: "#FF4961",
            lines: {
                show: true,
                fill: false,
                lineWidth: 3
            },
            points: {
                show: true,
                radius: 4,
                fillColor: "#fff",
                fill: true,
            },
            curvedLines: {
                apply: false,
            }
        }], options_ct);
    });
}
</script>
