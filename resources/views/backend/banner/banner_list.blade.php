@extends('layouts.dashboard')
@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Banner</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="#!">E-Commerce</a></li>
            <li class="breadcrumb-item active"><a href="#!">Banner</a></li>
        </ol>
    </div>
    <div class="row">
        <!-- customar project  start -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Banner</h3>
                    <a href="{{route('banner.add')}}" class="btn btn-success btn-sm mb-3 btn-round"><i class="feather icon-plus"></i> Banner</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="report-table" class="table mb-0">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Banner image</th>
                                    <th>Banner Title</th>
                                    <th>Banner Link</th>
                                    <th>Create Date</th>
                                    <th>Update Date</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($banners as $sl=>$banner)
                                    <tr>
                                        <td>{{$sl+1}}</td>
                                        <td>
                                            <img src="{{asset('uploads/banner')}}/{{$banner->banner_image}}" alt class="img-fluid wid-40">
                                        </td>
                                        <td>{{$banner->banner_title}}</td>
                                        <td>{{$banner->banner_link}}</td>
                                        <td>{{$banner->created_at->format('d M Y')}}</td>
                                        <td>{{$banner->updated_at == null ? 'Null' : $banner->updated_at->format('d M Y')}}</td>
                                        <td>
                                            <a href="{{route('banner.edit', $banner->id)}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="{{route('banner.delete', $banner->id)}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- customar project  end -->
    </div>
</div>


@endsection
