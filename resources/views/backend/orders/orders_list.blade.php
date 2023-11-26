@extends('layouts.dashboard')
@section('content')
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">All Orders</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a
                                                href="{{ url('/') }}"
                                                class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">All Orders</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mb-md-4 mb-3">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-md-4 mb-3">
                        <a href="#">
                            <div class="card border-3 border-top border-top-success">
                                <div class="card-body">
                                    <h5>Total Order</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{ $total_orders }}</h1>
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
                                    <h5 class="text-secondary">Total Pending Payment</h5>
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
                                    <h5 class="text-warning">Total Hold</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{ $total_hold }}</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-md-4 mb-3">
                        <a href="##">
                            <div class="card border-3 border-top border-top-success">
                                <div class="card-body">
                                    <h5 class="text-danger">Total Canceled</h5>
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
                                    <h5 class="text-success">Total Completed</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{ $total_completed }}</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="row mb-2">
                    <div class="col-md-2 col-12">
                        <a href="{{ route('orders.add') }}"
                           class="btn btn-success btn-sm">Add Order</a>
                    </div>
                        {{-- <div class="col-md-10 col-12 mt-md-0 mt-2">
                            <form action="https://ecom.prodevsltd.com/admin-p_orders" method="get" class="form-inline float-md-right">
                                <div class="form-group">
                                    <input type="hidden" name="status" value="">
                                    <select name="courier_id" id="courier_id" class="form-control mr-2">
                                        <option value="">Select Courier</option>
                                                                                    <option value="1" >Stead Fast
                                            </option>
                                                                                    <option value="2" >Redx
                                            </option>
                                                                                    <option value="3" >Pathao
                                            </option>
                                                                                    <option value="4" >Paper Fly
                                            </option>
                                                                            </select>
                                    <input type="text" class="form-control mr-2" placeholder="Search By Phone Number"
                                           value=""
                                           name="query">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-dark btn-sm mr-1">Search</button>
                                    <a href="https://ecom.prodevsltd.com/admin-p_orders" class="btn btn-info btn-sm">Reset</a>
                                </div>
                            </form>
                        </div> --}}
                </div>
                    {{-- <div class="row mb-2">
                        <div class="col-md-2 col-12">
                            <form action="https://ecom.prodevsltd.com/admin-orders/all-status" method="post" id="all_status_form">
                                <input type="hidden" name="_token" value="ktLkxYSgW2CFqo1LaSSBAFMYLYEfg60BNopr8gRu">                                <input type="hidden" id="all_status" name="all_status">
                                <select name="status" id="status" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="0">On Hold</option>
                                    <option value="2">Processing</option>
                                    <option value="3">Pending Payment</option>
                                    <option value="1">Delivered</option>
                                    <option value="4">Canceled</option>
                                </select>
                            </form>
                        </div>

                        <div class="col-md-1 col-12">
                            <form action="https://ecom.prodevsltd.com/admin-orders/bulk-print" method="post" id="all_print_form">
                                <input type="hidden" name="_token" value="ktLkxYSgW2CFqo1LaSSBAFMYLYEfg60BNopr8gRu">                                <div class="form-group">
                                    <button type="button" id="bulk_print_btn" class="btn btn-info btn-sm">Print Invoice
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-9 col-12">
                            <form action="https://ecom.prodevsltd.com/admin-orders/courier_csv" method="post" id="all_courier_csv">
                                <input type="hidden" name="_token" value="ktLkxYSgW2CFqo1LaSSBAFMYLYEfg60BNopr8gRu">                                <div class="form-group">
                                    <input type="hidden" name="status" id="courier_status">
                                    <input type="hidden" id="all_ord_id" name="all_ord_id">
                                    <button type="button" id="steadfast_csv" class="btn btn-success btn-sm">Stead Fast
                                        Export
                                    </button>
                                    <button type="button" id="redex_csv" class="btn btn-danger btn-sm">Redex Export
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div> --}}
                   <div class="row">
                    <div class="col-12">
                        <div class="card ">
                            <div class="card-body table-responsive">
                                <table class="table table-bordered table-striped text-center">
                                    <thead>
                                    <tr>
                                        {{-- <th><input type="checkbox" id="master"></th> --}}
                                        <th>SL.</th>
                                        <th>Invoice ID</th>
                                        <th>Customer Info</th>
                                        <th>Products</th>
                                        <th>Total</th>
                                        <th>Courier</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Note</th>
                                        {{-- <th>Assigned</th> --}}
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order_id as $sl=>$order)
                                        <tr id="tr_12">
                                            {{-- <td><input type="checkbox" class="sub_chk" data-id="12"> --}}
                                            </td>
                                            <td>{{ $sl+1 }}</td>
                                            <td>{{ $order->order_id }}</td>
                                            <td>
                                                <span> {{ $order->rel_to_billing ? $order->rel_to_billing->customer_name : 'No Billing Details' }}</span> <br>
                                                <a href="tel: {{ $order->rel_to_billing ? $order->rel_to_billing->customer_phone : 'No Billing Details' }}"><span>{{ $order->rel_to_billing ? $order->rel_to_billing->customer_phone : 'No Billing Details' }}</span></a>
                                                <br>
                                                <span>{{ $order->rel_to_billing ? $order->rel_to_billing->customer_address : 'No Billing Details' }}</span>
                                                <br>
                                                
                                            </td>
                                            <td >
                                                @foreach ($order->rel_to_orderpro as $OrderProduct) 
                                                    {{ $OrderProduct->quantity }} x {{ $OrderProduct->rel_to_product->product_name }} <br>
                                                @endforeach
                                            </td>
                                            <td>৳ {{ $order->total }}</td>
                                            @if ($order->courier_id != null)
                                                <td>{{ $order->rel_to_courier->name }}</td>
                                            @else
                                                <td>Null</td>
                                            @endif
                                            <td>{{$order->order_date}}
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown mx-1">
                                                    <button type="button" class="border-0  sharp dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        @if ($order->status == 0)
                                                            <div class="btn btn-info">On Hold</div>
                                                        @elseif ($order->status == 1)
                                                            <div class="btn btn-primary">Processing</div>
                                                        @elseif ($order->status == 2)
                                                            <div class="btn btn-success">Completed</div>
                                                        @elseif ($order->status == 3)
                                                            <div class="btn btn-warning">Pending Payment</div>
                                                        @else
                                                            <div class="btn btn-danger">Canceled</div>
                                                        @endif
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <form action="{{ route('status.update') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="order_id" value="{{ $order->id }}">
                                                            <button name="status" value="0" class="dropdown-item status">On Hold</button>
                                                            <button name="status" value="1" class="dropdown-item status">Processing</button>
                                                            <button name="status" value="2" class="dropdown-item status">Completed</button>
                                                            <button name="status" value="3" class="dropdown-item status">Pending Payment</button>
                                                            <button name="status" value="4" class="dropdown-item status">Canceled</button>
                                                        </form>
                                                    </div>
                                                </div>                                                
                                            </td>
                                            <td>{{ $order->order_note }}</td>
                                            {{-- <td>Mr. Employee</td> --}}

                                            <td class="text-center">
                                                <a href="{{ route('invoice.download', $order->id) }}" class="d-block mb-1 print" data-id="12"><i class="fa fa-print"></i></a>
                                                
                                                <a href="{{ route('orders.edit', $order->order_id) }}" class="d-block mb-1">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ route('orders.delete', $order->id) }}" class="d-block mb-1" onclick="return confirm('Are you sure to delete this?')">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>                                       
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="mt-3">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        $('.print').on('click', function () {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: 'https://ecom.prodevsltd.com/admin-orders/print',
                type: 'POST',
                data: {_token: CSRF_TOKEN, id: $(this).data('id')},
                success: function (data) {
                    newWin = window.open("");
                    newWin.document.write(data);
                    newWin.document.close();
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {


            $('#master').on('click', function (e) {
                if ($(this).is(':checked', true)) {
                    $(".sub_chk").prop('checked', true);
                } else {
                    $(".sub_chk").prop('checked', false);
                }
            });


            $('#status').on('change', function (e) {
                var allVals = [];
                $(".sub_chk:checked").each(function () {
                    allVals.push($(this).attr('data-id'));
                });

                if (allVals.length <= 0) {
                    alert("Please select row.");
                } else {
                    $('#all_status').val(allVals);
                    $('#all_status_form').submit();
                }
            });

            $('#bulk_print_btn').on('click', function (e) {
                var allVals = [];
                $(".sub_chk:checked").each(function () {
                    allVals.push($(this).attr('data-id'));
                });

                if (allVals.length <= 0) {
                    alert("Please select row.");
                } else {

                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: 'https://ecom.prodevsltd.com/admin-orders/bulk-print',
                        type: 'POST',
                        data: {_token: CSRF_TOKEN, all_inv_id: allVals},
                        success: function (data) {
                            newWin = window.open("");
                            newWin.document.write(data);
                            newWin.document.close();
                        }
                    });
                }
            });

            //courier export
            $('#steadfast_csv').on('click', function (e) {
                var allVals = [];
                $(".sub_chk:checked").each(function () {
                    allVals.push($(this).attr('data-id'));
                });

                if (allVals.length <= 0) {
                    alert("Please select row.");
                } else {
                    $('#all_ord_id').val(allVals);
                    $('#courier_status').val(1);
                    $('#all_courier_csv').submit();
                }
            });

            $('#redex_csv').on('click', function (e) {
                var allVals = [];
                $(".sub_chk:checked").each(function () {
                    allVals.push($(this).attr('data-id'));
                });

                if (allVals.length <= 0) {
                    alert("Please select row.");
                } else {
                    $('#all_ord_id').val(allVals);
                    $('#courier_status').val(2);
                    $('#all_courier_csv').submit();
                }
            });
        });
    </script>
</body>
</html>


@endsection
