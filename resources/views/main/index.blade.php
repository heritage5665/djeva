<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DJ Everlatin - Homepage</title>
	<link rel="stylesheet" type="text/css" href="{{asset('main/css/bootstrap.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('main/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('main/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('main/css/lightbox.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('main/css/aos.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('main/fonts/font-awesome.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('main/css/main.css')}}">
</head>
<body>
    @csrf
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 banner">
				<div class="container">
					<div class="row" id="home">
						<div class="col-md-12 menu">
						<div class="container py-2" data-aos="fade-down" data-aos-duration="1000">
							<nav class="navbar navbar-expand-lg navbar-dark pl-0">
								<a class="navbar-brand ml-0 pl-0 font-weight-bold" href="#home" style="font-family: Montseratt;">DJ EVER.</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>

								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<ul class="navbar-nav ml-auto">
										<li class="nav-item active">
											<a class="nav-link text-uppercase text-white" href="#home">Home <span class="sr-only">(current)</span></a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-uppercase text-white" href="#profile">Bio</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-uppercase text-white" href="#mixtape">Mixtape</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-uppercase text-white" href="#event">Events</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-uppercase text-white" href="#service">Service</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-uppercase text-white" href="#contact">Contact</a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
						</div>
						<div class="col-md-7 col-lg-6 col-sm-12 mt-5 pt-5 caption" data-aos="fade-right" data-aos-duration="1000">
							<h1 class='text-white mt-5'>{{ __("music in it's best mix") }}<span class="dot">.</span></h1>
							<h6 class="col-md-9 mt-3 mb-4 pl-0">{{__('This is the right platform and opportunity for you to get started and get motivated by other folks on this platform.')}} </h6>
							<button class="btn btn-sm px-3 text-uppercase font-weight-bold" style="border-radius: 50px; background-color: #ffaa00 !important">Get Started</button> <span class="dj" style="font-family: TuesdayNight; color:#ffaa00; font-size: 1.8em;">&nbsp;&nbsp;&nbsp;with djeverlastin</span>
						</div>
					</div>
				</div>
				<div class="row mt-5" style="height: auto">
					<div class="col-md-7 playlist" style="background-color: #030106"></div>
					<div class="col-md-5 playlist-holder">
						<div class="row playlist-row">
							<!-- <div class="col-md-5 album-art d-none d-md-block"></div>	 -->
							<div class="col-md-4 col-sm-4">
								<p class="text-uppercase pb-0 mb-0 pl-2 d-flex align-items-center pt-3" style="line-height: 15px;"><small>Now playing <br><span id="songTitle" class="pt-0 mt-0">dj everlastin</span>
									<!-- <br> <span>08. Fast Track</span> -->
								</small></p>
							</div>
							<div class="col-md-8 col-sm-8 d-flex align-items-center pt-3">
								<p>
									<span class="btn text-uppercase mr-3 my-auto py-auto" onclick="previous();">Prev</span>
									<span class="mr-3"><img src="{{asset('main/images/Dj-Everlasting-Player-icon_31.png')}}" class="img-a" width="20px" onclick="decreasePlaybackRate();"></span>
									<span><img src="{{asset('main/images/pause.png')}}" class="img-b" width="40px" onclick="playOrPauseSong(this);"></span>
									<span class="ml-3"><img src="{{asset('main/images/Dj-Everlasting-Player-icon_34.png')}}" class="img-a" width="20px" onclick="increasePlaybackRate();"></span>
									<span class="text-uppercase ml-3 my-auto btn" onclick="next();">next</span>
								</p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row content pb-5 d-none d-md-block" id="profile">
			<div class="container pt-5">
				<div class="row">
					<div class="col-md-12 about mt-5" data-aos="fade-down" data-aos-duration="1000">
						<div class="container px-4">
							<div class="row">
								<div class="col-md-7">
                                    <h2 class="text-uppercase mt-5 pt-4 mb-4 font-weight-bold">dj everlastin</h2>
                                    @foreach ($about as $about )
                                        <p class="text-justify">{{$about->body}}</p>

									<button class="btn btn-sm px-4 text-uppercase mb-5" data-toggle="modal" data-target="#exampleModal" style="background: #030106; color: #fff; border-radius: 50px">book me</button>
								</div>
								<div class="col-md-5">
									<img src="{{ asset("storage/img/about_image/$about->url")}}" class="img-fluid d-block mx-auto" style="">
								</div>
                                    @endforeach

							</div>
						</div>
					</div>

				</div>
			</div>
			<h3 class="text-uppercase profile d-none d-md-block" style="color: #ffaa00;">my profile</h3>
		</div>

		<!-- Mobile COntent -->
		<div class="row content pb-5 d-md-none d-sm-block" id="profile">
			<div class="container pt-5">
				<div class="row">
					<div class="col-md-12 about mt-5" data-aos="fade-down" data-aos-duration="1000">
						<div class="container px-4">
							<div class="row">
								<div class="col-md-12">
									<h2 class="text-uppercase mt-5 pt-4 mb-4 font-weight-bold">dj everlastin</h2>
									<img src="{{ asset("storage/img/about_image/$about->url")}}" class="img-fluid mb-2 float-right" style="" width="150px">
									 <p class="text-justify">{{$about->body}}</p>


									<button class="btn btn-sm px-4 text-uppercase mb-5" style="background: #030106; color: #fff; border-radius: 50px">book me</button>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
			<h3 class="text-uppercase profile d-none d-md-block" style="color: #ffaa00;">my profile</h3>
        </div>

        {{--  mixtape section  --}}
		<div class="row mixtape" id="mixtape">
			<div class="container">
				<div class="row">
					<div class="col-md-12" data-aos="fade-down" data-aos-duration="1000">
						<h1 class="text-uppercase text-center text-white font-weight-bold mb-4">my mixtapes</h1>
						<div class="row">
							<style type="text/css">
								.image-holder a{
									top: 0;
									left: 0;
									opacity: 0;
									height: 100%;
									width: 100%;
									background-color: rgba(0,0,0,0.5);
									text-decoration: none;
								}
								.image-holder:hover a{
									opacity: 1;
									transition: opacity 0.5s;
								}
                            </style>
                            @foreach ($mixtapes as $mixtape )
                                <div class="col-md-3 col-sm-12 col-lg-3 mb-4 image-holder">
								<img src="{{asset("storage/img/mixtape_image/$mixtape->image_url")}}" class="img-fluid position-relative image" style="min-height: 10em; width: 100%;">
								<a href="{{route('download', ['title'=> $mixtape->mixtape])}}" class="position-absolute text-white d-flex align-items-center justify-content-center" download><i class="fa fa-download"></i>&nbsp;Download Mixtape</a>
							</div>
                            @endforeach


						</div>

					</div>
				</div>
			</div>
        </div>


        {{--  Events section  --}}
		<div class="row event pt-5 pb-5" id="event">
			<div class="container">
				<div class="row">
					<div class="col-md-12 pb-5" data-aos="fade-down" data-aos-duration="1000">
						<h1 class="text-uppercase text-center text-white font-weight-bold mb-4">upcoming events</h1>
						<div class="col-md-12">
							<div class="row owl-carousel owl-theme mx-auto">
                                @foreach ($events  as $event )
                                   <div class="item">
									<img src="{{asset("storage/img/event_image/$event->image_url")}}" class="img-fluid">
									<div class="border mt-2" style="height:; border: 8px solid #ffaa00 !important">
										<div class="row">
											<div class="col-4">
												<h1 class="text-white">{{$event_date[0][3]}}</h1>
											</div>
											<div class="col-md-3 col-sm-12 col-lg-3">
												<span class="text-white text-uppercase font-weight-bold" style="font-size: 1.1em;">
												december, 2019</span><br><span class="text-white text-uppercase" style="font-size: 1.4em; font-family: Montseratt">{{$event->description}}</span>
											</div>
										</div>
									</div>
									<button class="btn btn-sm text-uppercase w-50 d-block rounded-0 mx-auto text-white mt-2" style="background: #ffaa00;">FREE</button>
								</div>
                                @endforeach

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row gallery">
	<style type="text/css">
        .img-group{
            position: relative;
        }
        .card-img:hover .caption{
            opacity: 1;
            cursor: pointer;
        }
        a.caption{
            background: rgba(0, 0, 0, 0.3);
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.5s;
            padding: 0px !important;
            margin: 0px !important;
            border-radius: 0px;
        }
        .card, .card-body{
            border: none !important;
        }
    </style>

        {{--  gallery section  --}}
			<div class="col-md-12 px-0 py-5" data-aos="fade-down" data-aos-duration="1000" style="overflow-x: hidden;">
				<h1 class="text-uppercase text-center text-white font-weight-bold mb-4">gallery</h1>
				<div class="row">
                    @foreach ($banners as $banner)
                    <section class="col-lg-3 col-12 col-sm-6 col-md-4 m-0 p-0" id="1">
                        <div class="card p-0 m-0 remove-radius">
                            <div class="card-body p-0 m-0 card-img remove-radius">
                                <div class="img-group">
                                    <div class="p-0 m-0 link-img">
                                        <img src="{{asset("storage/img/banner_image/$banner->banner_pix")}}" class="position-relative g-img m-0 p-0" style="width: 100%; min-height: 10em;"/>
                                    </div>
                                </div>
                                <a href="{{asset("storage/img/banner_image/$banner->banner_pix")}}" data-lightbox="mygallery" data-title="{{$banner->caption1 . ' '. $banner->caption2}}" class="btn caption text-white">
                                    <div class="caption-text p-4">
                                        <h4>{{$banner->caption1}}</h4>
                                        <h6>{{$banner->caption2}}</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>
                    @endforeach

				</div>
			</div>
		</div>
		<div class="row services pt-5 pb-5" id="service">
		<style type="text/css">
			.services img{
				max-width: 120px !important;
			}
        </style>


        {{--  services section  --}}
		<div class="col-md-12">
			<h4 class="text-uppercase text-center" style="color: #ffaa00; letter-spacing: 4px;">services</h4>
			<h1 class="text-uppercase text-center text-white font-weight-bold mb-4">where do i play</h1>
			<div class="container mb-5" style="transform: scale(0.8,0.8)">
				<div class="row mt-5 mb-5">
                    @foreach($services as $service)
					<div class="col" data-aos="fade-right" data-aos-duration="1000">
						<img src="{{ asset("storage/img/service_image/$service->image_url")}}" class="d-block mx-auto">
						<h4 class="text-uppercase text-white text-center font-weight-bold mt-5">{{$service->service}}</h4>
                    </div>
                    @endforeach
				</div>
			</div>
		</div>
    </div>

    {{--  subscriber section  --}}
	<div class="row newsletter bg-light">
		<div class="container my-5 py-5">
			<div class="row">
				<div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
					<h3 class="text-uppercase pb-0 mb-0">join my tribe dj everlastin</h3>
					<p class="pt-0 mt-0">Enter your mail and be the first to know about my events!</p>
				</div>
				<div class="col-md-6 subscribe-form" data-aos="fade-lef12" data-aos-duration="1000">
                     @if ($errors->any())
                        @include('main.partials.errors')
                    @endif

                    @include('main.partials.error')
                    @include('main.partials.success')

					<form action="{{ Route('subscribe') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
						<div class="input-group">
							<input type="email" name="email" class="form-control rounded-0" required='required' placeholder="YOUR EMAIL ADDRESS">
							<span class="input-group-btn">
								<button type="submit" class="btn rounded-0 text-uppercase font-weight-bold px-4" type="button">subscribe</button></span>
						</div>
						<div class="input-group mt-2">
							<label>
								<input type="checkbox" name="accept" class="checkbox-box"> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;I have agreed to terms and conditions
								<span class="checkmark"></span>
							</label>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="row social-media py-5" id="contact">
		<div class="container">
			<h1 class="text-uppercase text-center text-white font-weight-bold mb-4">COntact</h1>
			<div class="row mt-2" data-aos="fade-down" data-aos-duration="1000">
				<div class="col-md-3 address">
					<div class="row">
						<div class="col-md-2  col-2">
							<i class="fa fa-home fa-2x" style="color: #ffaa00 !important"></i>
						</div>
						<div class="col-md-10 col-10">
							<h6 style="color: #ffaa00 !important">Address</h6>
							<p class="text-white">Federal Polytechnic Ilaro <br> Ogun State</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 email">
					<div class="row">
						<div class="col-md-2  col-2">
							<i class="fa fa-envelope fa-2x" style="color: #ffaa00 !important"></i>
						</div>
						<div class="col-md-10 col-10">
							<h6 style="color: #ffaa00 !important">Email</h6>
							<p class="text-white">djeverlastin@gmail.com <br> djeverlastin@gmail.com</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 phone">
					<div class="row">
						<div class="col-md-2  col-2">
							<i class="fa fa-phone fa-2x" style="color: #ffaa00 !important"></i>
						</div>
						<div class="col-md-10 col-10">
							<h6 style="color: #ffaa00 !important">Phone</h6>
							<p class="text-white">08123456789 <br> 08123456789</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 account">
					<div class="row">
						<div class="col-md-2  col-2">
							<i class="fa fa-share-alt fa-2x" style="color: #ffaa00 !important"></i>
						</div>
						<div class="col-md-10 col-10">
                             @foreach($social_media as $social_media)
							<h6 style="color: #ffaa00 !important">Follow Me</h6>
							<a href="{{$social_media->twitter}}" class="text-white text-decoration-none tw"><i class="fa fa-twitter"></i>&nbsp; Twitter</a><br>
							<a href="{{$social_media->facebook}}" class="text-white text-decoration-none fb"><i class="fa fa-facebook"></i>&nbsp; Facebook</a><br>
							<a href="{{$social_media->facebook}}" class="text-white text-decoration-none yt"><i class="fa fa-youtube"></i>&nbsp; Youtube</a><br>
							<a href="{{$social_media->instagram}}" class="text-white text-decoration-none in"><i class="fa fa-instagram"></i>&nbsp; Instagram</a>
                            @endforeach
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row footer" style="background-color: #000; margin-bottom: 70px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 pt-2">
					<p class="d-flex align-items-center justify-content-center">Developed by <a class="text-decoration-none font-weight-bold" href="www.zealaraxtechnologies.com"> &nbsp;Zealarax Technologies</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<button id="toTop" title="Go to top" style="display: none;"><span class="fa fa-arrow-up"></span></button>

<!-- <div class="row modal-holder">
	<style type="text/css">
		.modal-holder{
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			width: 100vw;
			height: 100vh;
			background-color: rgba(0,0,0,0.4);
			z-index: 100;

		}
		.myModal{
			background-color: #fff;
			position: fixed;
			top: 50%;
			left: 50%;
			/*z-index: 100;*/
			/*height: 300px;*/
			width: 100%;
			padding: 20px;

			transform: translate(-50%, -50%);

		}
	</style>
	<div class="col-md-6 myModal">
		<div class="row">
			<div class="col-md-10">
				<h4>Book DJ Everlastin Now</h4>
			</div>
			<div class="col-md-2">
				<div class="close">&times;</div>
			</div>
		</div>

		<div class="clearfix"></div>
		<hr>
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6">
		<form>
			<div class="form-group">
				<input type="text" name="" class="form-control rounded-0">
			</div>
			<div class="form-group">
				<input type="text" name="" class="form-control rounded-0">
			</div>
			<div class="form-group">
				<input type="text" name="" class="form-control rounded-0">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-dark">Book Me</button>
			</div>
		</form>
		</div>
		</div>
	</div>

</div> -->
<!-- Button trigger modal -->
<!-- Modal
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>-->

</body>
<script type="text/javascript" src="{{asset('main/js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('main/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('main/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('main/js/lightbox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('main/js/scrollToTop.js')}}"></script>
<script type="text/javascript" src="{{asset('main/js/player.js')}}"></script>
<script type="text/javascript" src="{{asset('main/js/smooth-scroll.js')}}"></script>
<script type="text/javascript" src="{{asset('main/js/aos.js')}}"></script>
<script type="text/javascript">
	AOS.init();
	$(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
       $('.menu').addClass('main-menu');
    } else {
       $('.menu').removeClass('main-menu');
    }
});

	$(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
    	// $('.playlist-row').append('<div class="col-md-4"></div>');
       $('.playlist-holder').addClass('col-md-12 playlist-wide');
    } else {
    	// $('.playlist-holder').addClass('col-md-8');
       $('.playlist-holder').removeClass('col-md-12 playlist-wide');
    }
});
</script>
<script type="text/javascript">
	$(function(){
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			items: 4,
			loop: true,
			margin: 30,
			autoplay: true,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
			dots: false,
			responsive: {
				0: {
					items: 1,
					nav: true
				},
				600: {
					items: 3,
					nav: false
				},
				1000: {
					items: 4,
					nav: true,
					loop: true,
					margin: 20
				}
			}
		});
	});
</script>
</html>
<style type="text/css">
/* Hide the browser's default checkbox */
.checkbox-box {
	position: absolute;
	opacity: 0;
	cursor: pointer;
	height: 0;
	width: 0;
}

/* Create a custom checkbox */
.checkmark {
	position: absolute;
	top: 0;
	left: 0;
	height: 25px;
	width: 25px;
	background-color: #000;
	margin-right: 10px;
}

/* On mouse-over, add a grey background color */
.chexkbox-box:hover .checkbox-box ~ .checkmark {
	background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.checkbox-box:checked ~ .checkmark {
	background-color: #000;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
	content: "";
	position: absolute;
	display: none;
}

/* Show the checkmark when checked */
.checkbox-box:checked ~ .checkmark:after {
	display: block;
}

/* Style the checkmark/indicator */
.checkmark:after {
	left: 9px;
	top: 5px;
	width: 5px;
	height: 10px;
	border: solid white;
	border-width: 0 3px 3px 0;
	-webkit-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	transform: rotate(45deg);
}
</style>

