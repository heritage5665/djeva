@extends('layouts.app')
@include('partials.header')
@include('partials.sidebar')
@include('partials.right-sidebar')
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
                                <li class="breadcrumb-item active">Mixtape</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Mixtape</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="card-box">
                        <h4 class="header-title text-center mt-0 mb-2 font-weight-bold"> Upload Mixtapes</h4>

                        <div class="mt-1">
                            <div class="row">
                                <div class="col-md-4 offset-md-4">
                                     @if ($errors->any())
                                       @include('partials.errors')
                                    @endif

                                    <div class="row">
                                        <div class="col-bg-12">
                                            <form action="{{ url('admin/mixtape/upload') }}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                                <div class="form-group">
                                                    <label for="title">Title</label>
                                                    <input type="text" name="title" class="form-control" id="title"  placeholder="Mixtape Title">
                                                </div>

                                                <div class="form-group">
                                                    <label for="mixtape_image"> Mixtape Image</label>
                                                    <input type="file" name="mixtape_image" class="form-control" id="mixtape_image"  >
                                                </div>

                                                <div class="form-group">
                                                    <label for="mixtape">Mixtape</label>
                                                <input type="file" name="mixtape" class="form-control" id="mixtape" >

                                                </div>
                                                   <button type="submit" class="btn btn-info btn-block rounded-0 font-weight-bold" name="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-5">
                                <h4 class="header-title text-center mt-0 mb-2 font-weight-bold">Modify Mixtapes</h4>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Title</th>
                                            <th>Mixtape Banner</th>
                                            <th>Mixtape</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($mixtapes as $mixtape)
                                        <tr>
                                            <td>{{$mixtape->mixtape_id}}</td>
                                            <td>{{$mixtape->title}}</td>
                                            <td><img src="{{asset('storage/img/mixtape_image/'. $mixtape->mixtape_url)}}"></td>
                                            <td><audio src="{{asset('storage/audio/mixtape/'. $mixtape->mixtape)}}" controls></audio></td>
                                            <td><a href="{{url('/admin/mixtape/delete/' .$mixtape->mixtape)}}" class="btn btn-danger"><i class="la la-trash"></i> Delete</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
        </div>
    </div>
</div>





@endsection

@include('partials.footer')
