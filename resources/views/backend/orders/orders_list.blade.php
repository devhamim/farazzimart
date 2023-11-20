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
                        <a href="https://ecom.prodevsltd.com/admin-orders">
                            <div class="card border-3 border-top border-top-success">
                                <div class="card-body">
                                    <h5>Total Order</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">12</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-md-4 mb-3">
                        <a href="https://ecom.prodevsltd.com/admin-orders/status/processing">
                            <div class="card border-3 border-top border-top-success">
                                <div class="card-body">
                                    <h5 class="text-info">Total Processing</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">10</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-md-4 mb-3">
                        <a href="https://ecom.prodevsltd.com/admin-orders/status/pending_payment">
                            <div class="card border-3 border-top border-top-success">
                                <div class="card-body">
                                    <h5 class="text-secondary">Total Pending Payment</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">0</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-md-4 mb-3">
                        <a href="https://ecom.prodevsltd.com/admin-orders/status/hold">
                            <div class="card border-3 border-top border-top-success">
                                <div class="card-body">
                                    <h5 class="text-warning">Total Hold</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">0</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-md-4 mb-3">
                        <a href="https://ecom.prodevsltd.com/admin-orders/status/canceled">
                            <div class="card border-3 border-top border-top-success">
                                <div class="card-body">
                                    <h5 class="text-danger">Total Canceled</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">1</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-md-4 mb-3">
                        <a href="https://ecom.prodevsltd.com/admin-orders/status/completed">
                            <div class="card border-3 border-top border-top-success">
                                <div class="card-body">
                                    <h5 class="text-success">Total Completed</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">1</h1>
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
                                            <div class="col-md-10 col-12 mt-md-0 mt-2">
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
                        </div>
                                                                            </div>
                                    <div class="row mb-2">
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
                    </div>
                                                                <div class="row">
                    <div class="col-12">
                        <div class="card ">
                            <div class="card-body table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th><input type="checkbox" id="master"></th>
                                        <th>SL.</th>
                                        <th>Invoice ID</th>
                                        <th>Customer Info</th>
                                        <th>Products</th>
                                        <th>Total</th>
                                        <th>Courier</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Note</th>
                                        <th>Assigned</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                                                                                                                                                                                            <tr id="tr_12">
                                                    <td><input type="checkbox" class="sub_chk" data-id="12">
                                                    </td>
                                                    <td>1</td>
                                                    <td>INV12</td>
                                                    <td>
                                                        <span>fahim</span> <br>
                                                        <a href="tel:01858858417"><span>01858858417</span></a>
                                                        <br>
                                                        <span>sekbdjfjd</span>
                                                    </td>
                                                    <td>
                                                                                                                    1 x Mini Portable Pocket Shaver <br>
                                                                                                                                                                        </td>
                                                    <td>৳ 650</td>
                                                    <td>Pathao</td>
                                                    <td>
                                                        13 Nov, 2023<br>
                                                        02:39:20 PM
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button"
                                                                class="btn  btn-info status_btn  btn-sm dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                                                                                                                                                                                                    Processing
                                                                                                                                                                                                                                            </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/12/0/status">On
                                                                Hold</a>
                                                            <a class="dropdown-item d-none"
                                                               href="https://ecom.prodevsltd.com/admin-orders/12/2/status">Processing</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/12/1/status">Completed</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/12/3/status">Pending
                                                                Payment</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/12/4/status">Canceled</a>
                                                        </div>
                                                    </td>
                                                    <td>nr</td>
                                                    <td>Mr. Employee</td>

                                                    <td class="text-center">
                                                        <a href="javascript:void(0)" class="d-block mb-1 print"
                                                           data-id="12"><i
                                                                class="fa fa-print"></i></a>
                                                                                                                    <a href="https://ecom.prodevsltd.com/admin-orders/12/edit"
                                                               class="d-block mb-1">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="https://ecom.prodevsltd.com/admin-orders/delete/12"
                                                               class="d-block mb-1"
                                                               onclick="return confirm('Are you sure to delete this?')"><i
                                                                    class="fa fa-trash"></i></a>
                                                        
                                                                                                            </td>
                                                </tr>
                                                                                            <tr id="tr_11">
                                                    <td><input type="checkbox" class="sub_chk" data-id="11">
                                                    </td>
                                                    <td>2</td>
                                                    <td>INV11</td>
                                                    <td>
                                                        <span>mahmud</span> <br>
                                                        <a href="tel:01710222897"><span>01710222897</span></a>
                                                        <br>
                                                        <span>mirpur-1o</span>
                                                    </td>
                                                    <td>
                                                                                                                    1 x Crossbody Bags <br>
                                                                                                                                                                                1 x মোল্ড ক্লিনার জেল <br>
                                                                                                                                                                        </td>
                                                    <td>৳ 1329</td>
                                                    <td>Not Selected</td>
                                                    <td>
                                                        04 Nov, 2023<br>
                                                        10:27:59 AM
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button"
                                                                class="btn  btn-info status_btn  btn-sm dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                                                                                                                                                                                                    Processing
                                                                                                                                                                                                                                            </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/11/0/status">On
                                                                Hold</a>
                                                            <a class="dropdown-item d-none"
                                                               href="https://ecom.prodevsltd.com/admin-orders/11/2/status">Processing</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/11/1/status">Completed</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/11/3/status">Pending
                                                                Payment</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/11/4/status">Canceled</a>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td>Mr. Employee</td>

                                                    <td class="text-center">
                                                        <a href="javascript:void(0)" class="d-block mb-1 print"
                                                           data-id="11"><i
                                                                class="fa fa-print"></i></a>
                                                                                                                    <a href="https://ecom.prodevsltd.com/admin-orders/11/edit"
                                                               class="d-block mb-1">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="https://ecom.prodevsltd.com/admin-orders/delete/11"
                                                               class="d-block mb-1"
                                                               onclick="return confirm('Are you sure to delete this?')"><i
                                                                    class="fa fa-trash"></i></a>
                                                        
                                                                                                            </td>
                                                </tr>
                                                                                            <tr id="tr_10">
                                                    <td><input type="checkbox" class="sub_chk" data-id="10">
                                                    </td>
                                                    <td>3</td>
                                                    <td>INV10</td>
                                                    <td>
                                                        <span>Test</span> <br>
                                                        <a href="tel:017888788858"><span>017888788858</span></a>
                                                        <br>
                                                        <span>Gghh</span>
                                                    </td>
                                                    <td>
                                                                                                                    1 x shoe store <br>
                                                                                                                                                                                                <span
                                                                        class="text-primary">Color - Green</span>
                                                                    <br>
                                                                                                                                                                                                                                        </td>
                                                    <td>৳ 4057</td>
                                                    <td>Not Selected</td>
                                                    <td>
                                                        16 Oct, 2023<br>
                                                        03:08:22 PM
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button"
                                                                class="btn  btn-info status_btn  btn-sm dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                                                                                                                                                                                                    Processing
                                                                                                                                                                                                                                            </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/10/0/status">On
                                                                Hold</a>
                                                            <a class="dropdown-item d-none"
                                                               href="https://ecom.prodevsltd.com/admin-orders/10/2/status">Processing</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/10/1/status">Completed</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/10/3/status">Pending
                                                                Payment</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/10/4/status">Canceled</a>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td>Mr. Employee</td>

                                                    <td class="text-center">
                                                        <a href="javascript:void(0)" class="d-block mb-1 print"
                                                           data-id="10"><i
                                                                class="fa fa-print"></i></a>
                                                                                                                    <a href="https://ecom.prodevsltd.com/admin-orders/10/edit"
                                                               class="d-block mb-1">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="https://ecom.prodevsltd.com/admin-orders/delete/10"
                                                               class="d-block mb-1"
                                                               onclick="return confirm('Are you sure to delete this?')"><i
                                                                    class="fa fa-trash"></i></a>
                                                        
                                                                                                            </td>
                                                </tr>
                                                                                            <tr id="tr_9">
                                                    <td><input type="checkbox" class="sub_chk" data-id="9">
                                                    </td>
                                                    <td>4</td>
                                                    <td>INV9</td>
                                                    <td>
                                                        <span>Test</span> <br>
                                                        <a href="tel:017888788858"><span>017888788858</span></a>
                                                        <br>
                                                        <span>Gghhj</span>
                                                    </td>
                                                    <td>
                                                                                                                    1 x shoe store <br>
                                                                                                                                                                        </td>
                                                    <td>৳ 4057</td>
                                                    <td>Not Selected</td>
                                                    <td>
                                                        16 Oct, 2023<br>
                                                        02:59:09 PM
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button"
                                                                class="btn  btn-info status_btn  btn-sm dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                                                                                                                                                                                                    Processing
                                                                                                                                                                                                                                            </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/9/0/status">On
                                                                Hold</a>
                                                            <a class="dropdown-item d-none"
                                                               href="https://ecom.prodevsltd.com/admin-orders/9/2/status">Processing</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/9/1/status">Completed</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/9/3/status">Pending
                                                                Payment</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/9/4/status">Canceled</a>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td>Mr. Employee</td>

                                                    <td class="text-center">
                                                        <a href="javascript:void(0)" class="d-block mb-1 print"
                                                           data-id="9"><i
                                                                class="fa fa-print"></i></a>
                                                                                                                    <a href="https://ecom.prodevsltd.com/admin-orders/9/edit"
                                                               class="d-block mb-1">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="https://ecom.prodevsltd.com/admin-orders/delete/9"
                                                               class="d-block mb-1"
                                                               onclick="return confirm('Are you sure to delete this?')"><i
                                                                    class="fa fa-trash"></i></a>
                                                        
                                                                                                            </td>
                                                </tr>
                                                                                            <tr id="tr_8">
                                                    <td><input type="checkbox" class="sub_chk" data-id="8">
                                                    </td>
                                                    <td>5</td>
                                                    <td>INV8</td>
                                                    <td>
                                                        <span>Md kobir hossain</span> <br>
                                                        <a href="tel:01764796745"><span>01764796745</span></a>
                                                        <br>
                                                        <span>Md kobir hossain 1.5ton, 2 ton pink Gopalgonj,khayerhat,kashiani. Miya para jame morshjid 01764796745</span>
                                                    </td>
                                                    <td>
                                                                                                                    1 x shoe store <br>
                                                                                                                                                                        </td>
                                                    <td>৳ 4118</td>
                                                    <td>Not Selected</td>
                                                    <td>
                                                        10 Oct, 2023<br>
                                                        12:47:35 AM
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button"
                                                                class="btn  btn-info status_btn  btn-sm dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                                                                                                                                                                                                    Processing
                                                                                                                                                                                                                                            </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/8/0/status">On
                                                                Hold</a>
                                                            <a class="dropdown-item d-none"
                                                               href="https://ecom.prodevsltd.com/admin-orders/8/2/status">Processing</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/8/1/status">Completed</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/8/3/status">Pending
                                                                Payment</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/8/4/status">Canceled</a>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td>Mr. Employee</td>

                                                    <td class="text-center">
                                                        <a href="javascript:void(0)" class="d-block mb-1 print"
                                                           data-id="8"><i
                                                                class="fa fa-print"></i></a>
                                                                                                                    <a href="https://ecom.prodevsltd.com/admin-orders/8/edit"
                                                               class="d-block mb-1">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="https://ecom.prodevsltd.com/admin-orders/delete/8"
                                                               class="d-block mb-1"
                                                               onclick="return confirm('Are you sure to delete this?')"><i
                                                                    class="fa fa-trash"></i></a>
                                                        
                                                                                                            </td>
                                                </tr>
                                                                                            <tr id="tr_7">
                                                    <td><input type="checkbox" class="sub_chk" data-id="7">
                                                    </td>
                                                    <td>6</td>
                                                    <td>INV7</td>
                                                    <td>
                                                        <span>Tahmid</span> <br>
                                                        <a href="tel:0123456789sdd"><span>0123456789sdd</span></a>
                                                        <br>
                                                        <span>Balgonj</span>
                                                    </td>
                                                    <td>
                                                                                                                    1 x shoe store <br>
                                                                                                                                                                                                <span
                                                                        class="text-primary">Color - Green</span>
                                                                    <br>
                                                                                                                                                                                                                                        </td>
                                                    <td>৳ 4118</td>
                                                    <td>Not Selected</td>
                                                    <td>
                                                        27 Sep, 2023<br>
                                                        07:47:01 PM
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button"
                                                                class="btn  btn-info status_btn  btn-sm dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                                                                                                                                                                                                    Processing
                                                                                                                                                                                                                                            </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/7/0/status">On
                                                                Hold</a>
                                                            <a class="dropdown-item d-none"
                                                               href="https://ecom.prodevsltd.com/admin-orders/7/2/status">Processing</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/7/1/status">Completed</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/7/3/status">Pending
                                                                Payment</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/7/4/status">Canceled</a>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td>Mr. Employee</td>

                                                    <td class="text-center">
                                                        <a href="javascript:void(0)" class="d-block mb-1 print"
                                                           data-id="7"><i
                                                                class="fa fa-print"></i></a>
                                                                                                                    <a href="https://ecom.prodevsltd.com/admin-orders/7/edit"
                                                               class="d-block mb-1">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="https://ecom.prodevsltd.com/admin-orders/delete/7"
                                                               class="d-block mb-1"
                                                               onclick="return confirm('Are you sure to delete this?')"><i
                                                                    class="fa fa-trash"></i></a>
                                                        
                                                                                                            </td>
                                                </tr>
                                                                                            <tr id="tr_6">
                                                    <td><input type="checkbox" class="sub_chk" data-id="6">
                                                    </td>
                                                    <td>7</td>
                                                    <td>INV6</td>
                                                    <td>
                                                        <span>Hu</span> <br>
                                                        <a href="tel:52256778944"><span>52256778944</span></a>
                                                        <br>
                                                        <span>Nbfxvbb</span>
                                                    </td>
                                                    <td>
                                                                                                                    1 x Mini Portable Pocket Shaver <br>
                                                                                                                                                                        </td>
                                                    <td>৳ 650</td>
                                                    <td>Not Selected</td>
                                                    <td>
                                                        27 Sep, 2023<br>
                                                        07:11:41 PM
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button"
                                                                class="btn  btn-info status_btn  btn-sm dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                                                                                                                                                                                                    Processing
                                                                                                                                                                                                                                            </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/6/0/status">On
                                                                Hold</a>
                                                            <a class="dropdown-item d-none"
                                                               href="https://ecom.prodevsltd.com/admin-orders/6/2/status">Processing</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/6/1/status">Completed</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/6/3/status">Pending
                                                                Payment</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/6/4/status">Canceled</a>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td>Mr. Employee</td>

                                                    <td class="text-center">
                                                        <a href="javascript:void(0)" class="d-block mb-1 print"
                                                           data-id="6"><i
                                                                class="fa fa-print"></i></a>
                                                                                                                    <a href="https://ecom.prodevsltd.com/admin-orders/6/edit"
                                                               class="d-block mb-1">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="https://ecom.prodevsltd.com/admin-orders/delete/6"
                                                               class="d-block mb-1"
                                                               onclick="return confirm('Are you sure to delete this?')"><i
                                                                    class="fa fa-trash"></i></a>
                                                        
                                                                                                            </td>
                                                </tr>
                                                                                            <tr id="tr_5">
                                                    <td><input type="checkbox" class="sub_chk" data-id="5">
                                                    </td>
                                                    <td>8</td>
                                                    <td>INV5</td>
                                                    <td>
                                                        <span>vbxcvxcv</span> <br>
                                                        <a href="tel:43534453534"><span>43534453534</span></a>
                                                        <br>
                                                        <span>gdfdfd</span>
                                                    </td>
                                                    <td>
                                                                                                                    1 x Fold-able Stainless Steel Sink Racks <br>
                                                                                                                                                                        </td>
                                                    <td>৳ 850</td>
                                                    <td>Not Selected</td>
                                                    <td>
                                                        15 Sep, 2023<br>
                                                        09:50:43 PM
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button"
                                                                class="btn  btn-info status_btn  btn-sm dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                                                                                                                                                                                                    Processing
                                                                                                                                                                                                                                            </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/5/0/status">On
                                                                Hold</a>
                                                            <a class="dropdown-item d-none"
                                                               href="https://ecom.prodevsltd.com/admin-orders/5/2/status">Processing</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/5/1/status">Completed</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/5/3/status">Pending
                                                                Payment</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/5/4/status">Canceled</a>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td>Mr. Employee</td>

                                                    <td class="text-center">
                                                        <a href="javascript:void(0)" class="d-block mb-1 print"
                                                           data-id="5"><i
                                                                class="fa fa-print"></i></a>
                                                                                                                    <a href="https://ecom.prodevsltd.com/admin-orders/5/edit"
                                                               class="d-block mb-1">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="https://ecom.prodevsltd.com/admin-orders/delete/5"
                                                               class="d-block mb-1"
                                                               onclick="return confirm('Are you sure to delete this?')"><i
                                                                    class="fa fa-trash"></i></a>
                                                        
                                                                                                            </td>
                                                </tr>
                                                                                            <tr id="tr_4">
                                                    <td><input type="checkbox" class="sub_chk" data-id="4">
                                                    </td>
                                                    <td>9</td>
                                                    <td>INV4</td>
                                                    <td>
                                                        <span>tfryhtdr</span> <br>
                                                        <a href="tel:015456756"><span>015456756</span></a>
                                                        <br>
                                                        <span>ShikdaR</span>
                                                    </td>
                                                    <td>
                                                                                                                    1 x Master cutting scissors <br>
                                                                                                                                                                                1 x Sink Soap &amp; Sponge Organizer <br>
                                                                                                                                                                        </td>
                                                    <td>৳ 760</td>
                                                    <td>Not Selected</td>
                                                    <td>
                                                        12 Sep, 2023<br>
                                                        04:44:38 PM
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button"
                                                                class="btn  btn-success status_btn  btn-sm dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                                                                                                                                        Completed
                                                                                                                                                                                                                                                                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/4/0/status">On
                                                                Hold</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/4/2/status">Processing</a>
                                                            <a class="dropdown-item d-none"
                                                               href="https://ecom.prodevsltd.com/admin-orders/4/1/status">Completed</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/4/3/status">Pending
                                                                Payment</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/4/4/status">Canceled</a>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td>Mr. Employee</td>

                                                    <td class="text-center">
                                                        <a href="javascript:void(0)" class="d-block mb-1 print"
                                                           data-id="4"><i
                                                                class="fa fa-print"></i></a>
                                                                                                                    <a href="https://ecom.prodevsltd.com/admin-orders/4/edit"
                                                               class="d-block mb-1">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="https://ecom.prodevsltd.com/admin-orders/delete/4"
                                                               class="d-block mb-1"
                                                               onclick="return confirm('Are you sure to delete this?')"><i
                                                                    class="fa fa-trash"></i></a>
                                                        
                                                                                                            </td>
                                                </tr>
                                                                                            <tr id="tr_3">
                                                    <td><input type="checkbox" class="sub_chk" data-id="3">
                                                    </td>
                                                    <td>10</td>
                                                    <td>INV3</td>
                                                    <td>
                                                        <span>Rasel</span> <br>
                                                        <a href="tel:015456756"><span>015456756</span></a>
                                                        <br>
                                                        <span>ShikdaR</span>
                                                    </td>
                                                    <td>
                                                                                                                    1 x Mini Portable Pocket Shaver <br>
                                                                                                                                                                                                <span
                                                                        class="text-primary">Color - Green</span>
                                                                    <br>
                                                                                                                                                                                                                                                1 x Back Support Belt <br>
                                                                                                                                                                                                <span
                                                                        class="text-primary">Color - Green</span>
                                                                    <br>
                                                                                                                                                                                                                                                1 x Travel Waterproof Handbag Parpel <br>
                                                                                                                                                                        </td>
                                                    <td>৳ 2420</td>
                                                    <td>Not Selected</td>
                                                    <td>
                                                        12 Sep, 2023<br>
                                                        04:04:23 PM
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button"
                                                                class="btn  btn-info status_btn  btn-sm dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                                                                                                                                                                                                    Processing
                                                                                                                                                                                                                                            </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/3/0/status">On
                                                                Hold</a>
                                                            <a class="dropdown-item d-none"
                                                               href="https://ecom.prodevsltd.com/admin-orders/3/2/status">Processing</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/3/1/status">Completed</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/3/3/status">Pending
                                                                Payment</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/3/4/status">Canceled</a>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td>Mr. Employee</td>

                                                    <td class="text-center">
                                                        <a href="javascript:void(0)" class="d-block mb-1 print"
                                                           data-id="3"><i
                                                                class="fa fa-print"></i></a>
                                                                                                                    <a href="https://ecom.prodevsltd.com/admin-orders/3/edit"
                                                               class="d-block mb-1">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="https://ecom.prodevsltd.com/admin-orders/delete/3"
                                                               class="d-block mb-1"
                                                               onclick="return confirm('Are you sure to delete this?')"><i
                                                                    class="fa fa-trash"></i></a>
                                                        
                                                                                                            </td>
                                                </tr>
                                                                                            <tr id="tr_2">
                                                    <td><input type="checkbox" class="sub_chk" data-id="2">
                                                    </td>
                                                    <td>11</td>
                                                    <td>INV2</td>
                                                    <td>
                                                        <span>tfryhtdr</span> <br>
                                                        <a href="tel:015456756"><span>015456756</span></a>
                                                        <br>
                                                        <span>ShikdaR</span>
                                                    </td>
                                                    <td>
                                                                                                                    1 x Back Support Belt <br>
                                                                                                                                                                                1 x Mini Portable Pocket Shaver <br>
                                                                                                                                                                                                <span
                                                                        class="text-primary">Color - Red</span>
                                                                    <br>
                                                                                                                                                                                                                                        </td>
                                                    <td>৳ 1340</td>
                                                    <td>Not Selected</td>
                                                    <td>
                                                        12 Sep, 2023<br>
                                                        04:01:28 PM
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button"
                                                                class="btn  btn-info status_btn  btn-sm dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                                                                                                                                                                                                    Processing
                                                                                                                                                                                                                                            </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/2/0/status">On
                                                                Hold</a>
                                                            <a class="dropdown-item d-none"
                                                               href="https://ecom.prodevsltd.com/admin-orders/2/2/status">Processing</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/2/1/status">Completed</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/2/3/status">Pending
                                                                Payment</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/2/4/status">Canceled</a>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td>Mr. Employee</td>

                                                    <td class="text-center">
                                                        <a href="javascript:void(0)" class="d-block mb-1 print"
                                                           data-id="2"><i
                                                                class="fa fa-print"></i></a>
                                                                                                                    <a href="https://ecom.prodevsltd.com/admin-orders/2/edit"
                                                               class="d-block mb-1">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="https://ecom.prodevsltd.com/admin-orders/delete/2"
                                                               class="d-block mb-1"
                                                               onclick="return confirm('Are you sure to delete this?')"><i
                                                                    class="fa fa-trash"></i></a>
                                                        
                                                                                                            </td>
                                                </tr>
                                                                                            <tr id="tr_1">
                                                    <td><input type="checkbox" class="sub_chk" data-id="1">
                                                    </td>
                                                    <td>12</td>
                                                    <td>INV1</td>
                                                    <td>
                                                        <span>Ratul</span> <br>
                                                        <a href="tel:01597784513"><span>01597784513</span></a>
                                                        <br>
                                                        <span>ShikdaR</span>
                                                    </td>
                                                    <td>
                                                                                                                    1 x ইনস্ট্যান্ট দাগ রিমুভার রোল <br>
                                                                                                                                                                                1 x Hustuo Hemorrhoids Cream ( 3 পিস 790 টাকা) <br>
                                                                                                                                                                        </td>
                                                    <td>৳ 1060</td>
                                                    <td>Not Selected</td>
                                                    <td>
                                                        12 Sep, 2023<br>
                                                        03:31:51 PM
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button"
                                                                class="btn  btn-danger status_btn  btn-sm dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                                                                                                                                                                                                                                                                                                                            Canceled
                                                                                                                    </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/1/0/status">On
                                                                Hold</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/1/2/status">Processing</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/1/1/status">Completed</a>
                                                            <a class="dropdown-item "
                                                               href="https://ecom.prodevsltd.com/admin-orders/1/3/status">Pending
                                                                Payment</a>
                                                            <a class="dropdown-item d-none"
                                                               href="https://ecom.prodevsltd.com/admin-orders/1/4/status">Canceled</a>
                                                        </div>
                                                    </td>
                                                    <td>nr</td>
                                                    <td>Mr. Employee</td>

                                                    <td class="text-center">
                                                        <a href="javascript:void(0)" class="d-block mb-1 print"
                                                           data-id="1"><i
                                                                class="fa fa-print"></i></a>
                                                                                                                    <a href="https://ecom.prodevsltd.com/admin-orders/1/edit"
                                                               class="d-block mb-1">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="https://ecom.prodevsltd.com/admin-orders/delete/1"
                                                               class="d-block mb-1"
                                                               onclick="return confirm('Are you sure to delete this?')"><i
                                                                    class="fa fa-trash"></i></a>
                                                        
                                                                                                            </td>
                                                </tr>
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
