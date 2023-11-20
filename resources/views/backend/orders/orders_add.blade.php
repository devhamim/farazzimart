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
                            <h2 class="pageheader-title">Create Order</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Create Order</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->

                <div class="row mb-2">
                    <div class="col-12">
                        <a href="{{ route('orders.list') }}" class="btn btn-danger btn-sm">
                            <i class="fa fa-angle-double-left"></i>
                            Back
                        </a>
                    </div>
                </div>
                <form action="orders.store" method="post">
                    @csrf                  
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <h4 class="card-header">Customer Info</h4>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6 col-12">
                                            <label for="order_date">Order Date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control datetimepicker" id="order_date" name="order_date" required>
                                        </div>

                                        <div class="form-group col-md-6 col-12">
                                            <label for="invoice_id">Invoice ID <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="invoice_id" name="invoice_id" value="INV13" readonly required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6 col-12">
                                            <label for="customer_name">Customer Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="customer_name" name="customer_name" required>
                                        </div>

                                        <div class="form-group col-md-6 col-12">
                                            <label for="customer_phone">Customer Phone <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="customer_phone" name="customer_phone" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="customer_address">Customer Address <span class="text-danger">*</span></label>
                                            <textarea name="customer_address" id="customer_address" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="courier_id">Courier Name</label>
                                            <select name="courier_id" id="courier_id" class="form-control select2">
                                                <option value="">Select A Courier</option>
                                                @foreach ($couriers as $courier)
                                                    <option value="{{ $courier->id }}">{{ $courier->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="city_id">City Name</label>
                                            <select name="city_id" id="city_id" class="form-control select2">
                                                <option value="">Select A City</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="zone_id">Zone Name</label>
                                            <select name="courier_zone_id" id="zone_id" class="form-control select2">
                                                <option value="">Select A Zone</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="card">
                                <h4 class="card-header">Product Info</h4>
                                <div class="card-body">
                                    <div class="table-responsive mb-3">
                                        <table class="table table-bordered text-center">
                                            <thead>
                                            <tr>
                                                <th>SKU</th>
                                                <th>Product Name</th>
                                                <th>Qty</th>
                                                <th>Price</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody id="prod_row">
                                            </tbody>
                                            <tbody>
                                            <tr>
                                                <td colspan="5">
                                                    <div class="form-row">
                                                        <div class="form-group col-12 text-left">
                                                            <select id="product" class="form-control select2" required>
                                                                <option value="">Select A Product</option>
                                                                <option value="1">Six Peptides Repair Concentrate</option>
                                                                <option value="2">Car Dent Repair Tools Strong Suction Cup</option>
                                                                <option value="3">Hustuo Hemorrhoids Cream ( 3 পিস 790 টাকা)</option>
                                                                <option value="4">ইনস্ট্যান্ট দাগ রিমুভার রোল</option>
                                                                <option value="5">Copper High Pressure Water Spray Gun</option>
                                                                <option value="6">মোল্ড ক্লিনার জেল</option>
                                                                <option value="7">Wireless Headset Sunglasses</option>
                                                                <option value="8">Foot Repair Cream</option>
                                                                <option value="9">Wart Remover Cream</option>
                                                                <option value="10">Shoes Whitening Cleansing Gel, Shoe Stain Remover</option>
                                                                <option value="11">Furniture Polish</option>
                                                                <option value="12">Water Pump Car and Bike Washer</option>
                                                                <option value="13">Back Support Belt</option>
                                                                <option value="14">Stainless Steel Hexagonal Aiwa 40 In 1 Pcs Wrench Tool Kit</option>
                                                                <option value="15">T9 Electric Rechargeable Trimer</option>
                                                                <option value="16">Miss Belt</option>
                                                                <option value="17">Oil Purification Spray</option>
                                                                <option value="18">Multipurpose Laptop and Reading Table</option>
                                                                <option value="19">3D Large LED Digital Table Alarm Clock</option>
                                                                <option value="20">Leak Stopping Waterproof Tape</option>
                                                                <option value="21">Ginger Fast Hair Growth Serum</option>
                                                                <option value="22">Magic Drain Cleaner</option>
                                                                <option value="23">Snow Flake Multi Tool</option>
                                                                <option value="24">DMPT Fishing Powder Food 100g</option>
                                                                <option value="25">Travel Casual Chest Bag for phone-wallet</option>
                                                                <option value="26">Nail Repair and Fungus Treatment Solution</option>
                                                                <option value="27">পোর্টেবল গিজার</option>
                                                                <option value="28">Portable Mini Sewing Machine</option>
                                                                <option value="29">Painting Projection Table</option>
                                                                <option value="30">Green Mask Tea</option>
                                                                <option value="31">Baby Bouncer</option>
                                                                <option value="32">8.5&#039; LCD Writing Tablet for Kids</option>
                                                                <option value="33">Automatic Door Closer</option>
                                                                <option value="34">Foil and Tissue Roll Dispenser ( TPD-03)</option>
                                                                <option value="35">CACTUS TOYS</option>
                                                                <option value="36">ফ্রিজ ওয়াশিং মেশিন মুভিং স্ট্যান্ড BIG SIZE</option>
                                                                <option value="37">3 LAYER DISH RACK</option>
                                                                <option value="38">2 LAYER DISH RACK</option>
                                                                <option value="39">DOUBLE POLE CLOTH RACK</option>
                                                                <option value="40">Nima Electric Spice Grinder</option>
                                                                <option value="41">Body Trimmer</option>
                                                                <option value="42">Portable 360 degree rotation Mobile Stand</option>
                                                                <option value="43">Smart Alarm Lock</option>
                                                                <option value="44">Blackheads Remover</option>
                                                                <option value="45">Kinoki Detox Foot Pads</option>
                                                                <option value="46">সিম ডিভাইস</option>
                                                                <option value="47">Relax &amp; Spin Tone Slimming Toning &amp; Relaxing Body Massager</option>
                                                                <option value="48">Crossbody Bags</option>
                                                                <option value="49">Five Spring Tummy Trimmer</option>
                                                                <option value="50">Car &amp; Home Massage Pillow</option>
                                                                <option value="51">Kitchen Shelf Aluminium</option>
                                                                <option value="52">Double Spring Tummy Trimmer</option>
                                                                <option value="53">Yoga Mat Fitness Exercise</option>
                                                                <option value="54">2 IN1 ভ্যাকুম &amp; সিলার</option>
                                                                <option value="55">Tummy Trimmer</option>
                                                                <option value="56">Adjustable Suction Sit Up Bar</option>
                                                                <option value="57">গরম পানির ঝর্ণা ( China )</option>
                                                                <option value="58">মাংসের কিমা, আদা,রসুন,পেঁয়াজ পেস্ট, ফলের জুস, এক মেশিনে</option>
                                                                <option value="59">বাচ্চাদের দোলনা চেয়ার</option>
                                                                <option value="61">Portable Almari (Wine Red)</option>
                                                                <option value="62">সিঙ্গেল সিম সাপোর্টেড ল্যান্ডফোন কালো কালার</option>
                                                                <option value="63">Magic Hose Pipe-50 Feet</option>
                                                                <option value="64">Dual-Sim-Supported-Land-Phone ( ডুয়েল সিম সাপোর্টেড ল্যান্ডফোন ( কালো কালার )</option>
                                                                <option value="65">Single-Sim-Supported-Land-Phone( সিঙ্গেল সিম সাপোর্টেড ল্যান্ডফোন ( সাদা কালার )</option>
                                                                <option value="66">Rechargeable-Multi-Factional-Jucher ( রিচার্জেবল বেলেন্ডার )</option>
                                                                <option value="67">Suction Shelves</option>
                                                                <option value="68">9 in 1 সবজি কাটা ধোয়া এক মেশিনে</option>
                                                                <option value="69">থেরাপিতে কার্যকরী জুতা</option>
                                                                <option value="70">ইলেকট্রিক বারবিকিউ মেশিন</option>
                                                                <option value="71">কাপড় রাখার রেক</option>
                                                                <option value="72">কানে কম শোনেন তাদের জন্য (AXON Hearing Aids )</option>
                                                                <option value="73">Mini Ear Hearing Aid Small Invisible Hearing Aids</option>
                                                                <option value="74">বাত,ব্যথা নিরাময়ে সহায়ক থেরাপি পেন</option>
                                                                <option value="75">Digital Hot Water Tap ( ডিজিটাল হট ওয়াটার ট্যাব )</option>
                                                                <option value="77">Belt With Massager (Hi-Quality)</option>
                                                                <option value="78">Belly Drainage Ginger Essential Oil</option>
                                                                <option value="79">Travel Waterproof Handbag Parpel</option>
                                                                <option value="80">Scru Scrub</option>
                                                                <option value="81">Dancing And Singing Duck</option>
                                                                <option value="82">Whitening Cream Bleaching Body Lightening Cream</option>
                                                                <option value="83">Spray Bottle Oil Sprayer Oiler Pot</option>
                                                                <option value="84">Household Kitchen Washing Liquid Dish Brush</option>
                                                                <option value="85">Food Sealing Machine</option>
                                                                <option value="86">Silicon Folding Cup</option>
                                                                <option value="87">Invisible Drawer</option>
                                                                <option value="88">Sink Soap &amp; Sponge Organizer</option>
                                                                <option value="89">Multifunctional Egg boiler and Fry pan</option>
                                                                <option value="90">Gadget Holder</option>
                                                                <option value="91">Silicon Body Washer</option>
                                                                <option value="92">Mimo Body Massager</option>
                                                                <option value="93">Fold-able Stainless Steel Sink Racks</option>
                                                                <option value="94">Master cutting scissors</option>
                                                                <option value="95">Ohico Hair Color Stick Korean</option>
                                                                <option value="97">Mini Portable Pocket Shaver</option>
                                                                <option value="133">shoe store</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="form-group row" style="padding: 6px 0;">

                                        <div class="form-group col-6 mb-0">
                                            <input type="text" class="form-control" id="memo_number" name="memo_number" placeholder="Memo Number">
                                        </div>

                                        <label for="sub_total" class="col-md-2 col-form-label text-right">Sub Total</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="sub_total" name="sub_total" min="0" value="0" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row" style="padding: 6px 0;">
                                        <label for="shipping_cost" class="offset-md-6 col-md-2 col-form-label text-right">Delivery</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="shipping_cost" min="0" name="shipping_cost" value="0">
                                        </div>
                                    </div>

                                    <div class="form-group row" style="padding: 6px 0;">
                                        <label for="discount" class="offset-md-6 col-md-2 col-form-label text-right">Discount</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="discount" min="0" name="discount" value="0">
                                        </div>
                                    </div>

                                    <div class="form-group row" style="padding: 6px 0;">
                                        <label for="total" class="offset-md-6 col-md-2 col-form-label text-right">Total</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="total" min="0" name="total" value="0" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <textarea name="order_note" id="order_note" class="form-control" placeholder="Order Note"></textarea>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-12 text-center">
                                            <input type="submit" value="Save" class="btn btn-success w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('footer_script')

<script>
$(document).ready(function () {
    $("#courier_id").on('change', function () {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN
            }
        });

        // Fetch cities
        $.ajax({
            url: '{{ route('getCities') }}',  // Use the route function to generate the URL
            type: 'POST',
            data: { _token: CSRF_TOKEN, id: $(this).val() },
            success: function (data) {
                $("#city_id").empty();
                $("#city_id").append('<option value="">Select A City</option>');
                $.each(data, function (index, value) {
                    $("#city_id").append(new Option(value, index));
                });
            }
        });

        // // Fetch shipping cost
        // $.ajax({
        //     url: '/getShippingCost',
        //     type: 'POST',
        //     data: { _token: CSRF_TOKEN, id: $(this).val() },
        //     success: function (data) {
        //         $('#shipping_cost').val(data);
        //         finalCalc();  // Assuming finalCalc is defined elsewhere
        //     }
        // });
    });
});

</script>

<script>
    $(document).ready(function () {
        $("#city_id").on('change', function () {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: '/getzone',
                type: 'POST',
                data: {_token: CSRF_TOKEN, id: $(this).val()},
                success: function (data) {
                    $("#zone_id").empty();
                    $("#zone_id").append('<option value="">Select A Zone</option>');

                    if (data) {
                        $.each(data, function (index, value) {
                            $("#zone_id").append(new Option(value, index));
                        });
                    } else {
                        // Handle the case where no data is returned
                        console.error('No data received for zones.');
                    }
                },
                error: function (xhr, status, error) {
                    // Handle AJAX errors
                    console.error('Error during AJAX request:', status, error);
                }
            });
        });
    });
</script>


<script>
    $('.datetimepicker').datetimepicker({
            icons:
                {
                    next: 'fa fa-angle-right',
                    previous: 'fa fa-angle-left'
                },
            format: 'DD-MM-YYYY',
            defaultDate: new Date(),
        });
</script>

<script>
    $('.select2').select2();
</script>

<script>
            $('#product').on('change', function () {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '',
                type: 'POST',
                data: {_token: CSRF_TOKEN, id: $(this).val()},
                success: function (data) {
                    $('#prod_row').append(data);
                    finalCalc();
                }
            });
        });
</script>

@endsection
