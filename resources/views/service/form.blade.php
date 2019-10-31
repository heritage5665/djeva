@extends('layouts.app')
@include('partials.header')
@include('partials.sidebar')


@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Services</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Services</h4>
                    </div>
                </div>
            </div>  <div class="row">
	            <div class="col-xl-12 col-md-12">
	                <div class="card-box">
	                    <h4 class="header-title mt-0 mb-2 text-center font-weight-bold">Add Services</h4>
                        @include('partials.errors')
                        @include('partials.success')
	                    <div class="mt-1">
	                    	<div class="col-md-6 offset-md-3">
                                   <form action="{{ Route('serviceStore') }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
	                    				<input type="file" name="service_image" class="form-control rounded-0 dropify">
	                    			</div>
	                    			<div class="form-group">
	                    				<textarea name="service" class="form-control rounded-0" placeholder="Service Name"></textarea>
	                    			</div>
	                    			<div class="form-group">
	                    				<button type="submit" class="btn btn-info btn-block rounded-0 font-weight-bold" name="send">Add Service</button>
	                    			</div>
	                    		</form>
	                    	</div>
	                    </div>
                        <div class="col-md-12 mt-5">
	                    	<h4 class="header-title mt-0 mb-2 text-center font-weight-bold">Modify Services</h4>
	                    	<table id="basic-datatable" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Service Icon</th>
                                        <th>Service Name</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($services as $service)
                                    <tr>
                                        <td>{{$service->service_id}}</td>
                                        <td><img src=""></td>
                                        <td>{{$service->service}}</td>
                                        <td>{{$service->created_at}}</td>
                                        <td><a href="{{Route('serviceDelete', ['id'=>$service->service_id])}}" class="btn btn-danger"><i class="la la-trash"></i> Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
	                    </div>
	                </div>
	            </div><!-- end col -->
        </div>
    </div>
</div>






@endsection

@include('partials.footer')
