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
								<li class="breadcrumb-item active">Social Media</li>
							</ol>
						</div>
						<h4 class="page-title">Social Media</h4>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xl-12 col-md-12">
					<div class="card-box">
						<h4 class="header-title mt-0 mb-2 text-center font-weight-bold">Social Media Links</h4>

						<div class="mt-1">
							<div class="col-md-6 offset-md-3">
								<form method="post">
                                    @if($links)
									<div class="form-group">
										<input type="text" name="instagram" class="form-control rounded-0" placeholder="Instagram API Key" value="{{ $links->instagram}}">
									</div>
									<div class="form-group">
										<input type="text" name="facebook" class="form-control rounded-0" placeholder="Facebook Link"  value="{{ $links->facebook }}">
									</div>
									<div class="form-group">
										<input type="text" name="twitter" class="form-control rounded-0" placeholder="Twitter Link" value="{{ $links->twitter }}">
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-info btn-block rounded-0 font-weight-bold" name="submit">Submit</button>
                                    </div>
                                    @endif
								</form>
							</div>
						</div>
					</div>
				</div><!-- end col -->
			</div>
		</div>
	</div>

@endsection


	@include('partials.footer')
