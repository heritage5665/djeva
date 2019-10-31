@include('layouts.app')
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
								<li class="breadcrumb-item active">Profile</li>
							</ol>
						</div>
						<h4 class="page-title">Profile</h4>
					</div>
				</div>
			</div>
            <div class="row">
                @if($success)
                <p class="alert-success"> {{$success}}</p>
                @endif
            </div>
			<div class="row">
				<div class="col-xl-12 col-md-12">
					<div class="card-box">
						<h4 class="header-title mt-0 mb-2 text-center font-weight-bold">Update Profile</h4>

						<div class="mt-1">

							<div class="col-md-8 offset-md-2">
								<form action="{{route('about_store')}}"
                                method="POST" enctype="multipart/form-data"> {{ csrf_field() }}
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Picture</label>
												<input type="file" name="about_image" class="form-control rounded-0 dropify">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Profile</label>
												<textarea class="form-control rounded-0" rows="10" name="body" id="body" style="resize:none;">@foreach($about as $about){{$about->body}}@endforeach</textarea>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<button type="submit" class="btn btn-info btn-block rounded-0 font-weight-bold" name="update">Update Profile</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div><!-- end col -->
			</div>
		</div>
	</div>


@include('partials.tinymice')
@include('partials.footer')


