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
								<li class="breadcrumb-item active">Send Message</li>
							</ol>
						</div>
						<h4 class="page-title">Send Message</h4>
					</div>
				</div>
			</div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($success)
                <div class="alert alert-success">
                    <ul>

                            <li>{{ $success }}</li>

                    </ul>
                </div>
            @endif

            <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="card-box">
                                <h4 class="header-title mt-0 mb-2 text-center font-weight-bold">Send Message to Subscribers</h4>

                                <div class="mt-1">
                                    <div class="col-md-6 offset-md-3">
                                         <form action="{{ url('admin/newsletter/sendmessage') }}" method="POST" >
                                            {{ csrf_field() }}

                                     <div class="form-group">
										<input type='text' name="title" class="form-control rounded-0" placeholder="Message Title" />
                                    </div>

                                    <div class="form-group">
										<textarea class="form-control rounded-0" name="message" rows="8" style="resize: none;">Send Message</textarea>
                                    </div>

									<div class="form-group">
										<button type="submit" class="btn btn-info btn-block rounded-0 font-weight-bold" name="send">Send Message</button>
									</div>
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
