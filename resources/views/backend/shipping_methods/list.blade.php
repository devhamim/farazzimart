@extends('layouts.dashboard')
@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">brand</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="#!">E-Commerce</a></li>
            <li class="breadcrumb-item active"><a href="#!">Brand</a></li>
            <button type="button" class="btn btn-icon btn-outline-primary mr-2" data-toggle="modal" data-target="#modal-report"><i class="feather icon-edit-2"></i></button>
        </ol>
    </div>
    <div class="row">
        <!-- customar project  start -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="report-table" class="table mb-0">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Brand image</th>
                                    <th>Brand name</th>
                                    <th>Create Date</th>
                                    <th>Update Date</th>
                                    {{-- <th>Age</th>
                                    <th>Status</th> --}}
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($brands as $sl=>$brand)
                                    <tr>
                                        <td>{{$sl+1}}</td>
                                        <td>
                                            <img src="{{asset('uploads/brand')}}/{{$brand->brand_image}}" alt class="img-fluid img-radius wid-40">
                                        </td>
                                        <td>{{$brand->brand_name}}</td>
                                        <td>{{$brand->created_at->format('d M Y')}}</td>
                                        <td>{{$brand->updated_at == null ? 'Null' : $brand->updated_at->format('d M Y')}}</td>
                                        <td>
                                            <a href="{{route('brand.edit', $brand->id)}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="{{route('brand.delete', $brand->id)}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- customar project  end -->
    </div>
</div>

<div class="modal fade show" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" style="display: block; padding-right: 17px;" aria-modal="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Membership</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="Name"><small class="text-danger">* </small>Name</label>
                            <input type="text" class="form-control" id="Name" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="Price"><small class="text-danger">* </small>Membership Price</label>
                            <input type="text" class="form-control" id="Price" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="Period"><small class="text-danger">* </small>Membership Period</label>
                            <input type="text" class="form-control" id="Period" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="Icon">Membership Image</label>
                            <input type="file" class="form-control" id="Icon" placeholder="sdf">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label class="switcher">
                            <input type="checkbox" class="switcher-input">
                            <span class="switcher-indicator">
                                <span class="switcher-yes"></span>
                                <span class="switcher-no"></span>
                            </span>
                            <span class="switcher-label">Private Membership</span>
                        </label>
                        <label class="switcher">
                            <input type="checkbox" class="switcher-input">
                            <span class="switcher-indicator">
                                <span class="switcher-yes"></span>
                                <span class="switcher-no"></span>
                            </span>
                            <span class="switcher-label">Recurring Payment</span>
                        </label>
                        <label class="switcher">
                            <input type="checkbox" class="switcher-input">
                            <span class="switcher-indicator">
                                <span class="switcher-yes"></span>
                                <span class="switcher-no"></span>
                            </span>
                            <span class="switcher-label">Published</span>
                        </label>
                        <div class="form-group mt-3">
                            <label class="floating-label" for="Description">Description</label>
                            <textarea class="form-control" id="Description" rows="3" spellcheck="false"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary"> Save </button>
                <button class="btn btn-danger"> Clear </button>
            </div>
        </div>
    </div>
</div>
@endsection