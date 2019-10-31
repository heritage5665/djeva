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
                                <li class="breadcrumb-item active">Events</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Events</h4>
                    </div>
                </div>
            </div>

            @if ($success){
               <h3> {{$success}} </h3>
            }

            @endif
            <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card-box">
                    <h4 class="header-title mt-0 mb-2 text-center font-weight-bold">Add Events</h4>

                    <div class="mt-1">
                        <div class="col-md-6 offset-md-3">
                            <form action="{{ url('events/store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="form-group">
	                    				<input type="file" name="event_image" class="form-control rounded-0 dropify" placeholder="Event Image">
	                    			</div>
	                    			<div class="form-group">
	                    				<textarea name="description" class="form-control rounded-0" placeholder="Description"></textarea>
	                    			</div>
	                    			<div class="form-group">
	                    				<input type="date" id="" name="date" class="form-control rounded-0" placeholder="Date">
	                    			</div>
	                    			<div class="form-group">
	                    				<button type="submit" class="btn btn-info btn-block rounded-0 font-weight-bold" name="send">Add Event</button>
	                    			</div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 mt-5">
	                    	<h4 class="header-title mt-0 mb-2 text-center font-weight-bold">Modify Events</h4>

                            <table id="basic-datatable" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Event Banner</th>
                                        <th>Event Description</th>
                                        <th>Event Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($events as $event)
                                         <tr>
                                        <td>{{$event->event_id}}</td>
                                        <td><img src="{{asset('storage/img/event_image/' )}}"></td>
                                        <td>{{$event->description}}</td>
                                        <td>{{$event->event_date}}</td>
                                        <td><a href="{{url('events/delete/' .$event->event_id)}}" class="btn btn-danger"><i class="la la-trash"></i> Delete</a></td>
                                    </tr>
                                     @endforeach

                                </tbody>
                            </table>
	                    </div>
                </div>
            </div>

@endsection



@include('partials.footer')
