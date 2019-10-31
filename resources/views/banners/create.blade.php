@extends('layouts.app')
@include('partials.header')
@include('partials.sidebar')

@section('content')

<div class="content-page">
	<!-- Start Content-->
		<div class="container-fluid">

			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box">
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
								<li class="breadcrumb-item active">Banner</li>
							</ol>
						</div>
						<h4 class="page-title">Banner</h4>
					</div>
				</div>
			</div>

            <div class="row">
				<div class="col-xl-12 col-md-12">
					<div class="card-box">
						<h4 class="header-title text-center mt-0 mb-2 font-weight-bold">Update Banner</h4>
						<div class="mt-1">
							<div class="row">
								<div class="col-md-6 offset-md-3">
									<form action="{{ url('admin/banners/update') }}" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}									<div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="caption1">Main Caption</label>
                                                <input type="text" name="caption1" class="form-control" id="caption1"  placeholder="Main Caption">
                                            </div>

                                            <div class="form-group">
                                                <label for="caption2">Sub Caption</label>
                                                <input type="text" name="caption2" class="form-control" id="caption2" placeholder="Sub Caption">
                                            </div>

                                            <div class="form-group">
                                                <label for="banner-image">Banner Image</label>
                                                <input type="file" name="banner_image" class="form-control" id="banner-image"  placeholder="Enter Image Caption Primary">
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                             </div>
                                         </div>
                                     </form>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>

            </div>
        </div>
</div>

@endsection
@include('partials.footer')

