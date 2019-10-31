@extends('layouts.app')
@section('content')

@foreach ($about as $about)

<div class="container">
    <div class="row">
<div class="card" style="width: 18rem;">
  <img src='{{ asset("storage/img/about_image/$about->url")}}' class="card-img-top" alt="about-img">
  <div class="card-body">
  <h5 class="card-title">{{$pageTitle}}</h5>
    <p class="card-text">{{$about->body}}</p>

  </div>
</div>
    </div>
</div>


@endforeach



@endsection
