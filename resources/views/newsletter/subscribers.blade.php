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
                                <li class="breadcrumb-item"><a href="{{url('/about/create')}}">Home</a></li>
                                <li class="breadcrumb-item active">Newsletter Subscribers</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Newsletter Subscribers</h4>
                    </div>
                </div>
            </div>

            <div class="row">
	            <div class="col-xl-12 col-md-12">
	                <div class="card-box">
	                    <h4 class="header-title mt-0 mb-2 font-weight-bold">Newsletter Subscribers</h4>

	                    <div class="mt-1">
                    		<table id="basic-datatable" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Subscriber Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subscribers as $subscriber)
                                    <tr>
                                        <td>{{$subscriber->newsletterid}}</td>
                                        <td>{{$subscriber->email}}</td>
                                        <td><a href="{{url('admin/subscribers/delete/' .$subscriber->newsletterid)}}" class="btn btn-danger"><i class="la la-trash"></i> Delete</a></td>
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
