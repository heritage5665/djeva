@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
    <div class="col-bg-12">
        <h3>Update Profile</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
         @endif
    </div>

    <div class="row">

    <form action="{{ url('users/profile/update') }}" method="POST" enctype="multipart/form-data">
         {{ csrf_field() }}

            @foreach($users as $user)
            <input type="hidden" name="id" value="'{{$user["name"]}}'">

            <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" name="name" class="form-control" id="name"  placeholder="First Name" value="{{$user->name}}">
          </div>

           <div class="form-group">
                <label for="surname">surname</label>
                <input type="text" name="surname" class="form-control" id="surname"  placeholder="Surname" value="{{$user->surname}}">
          </div>
           <div class="form-group">
                <label for="othername">othername</label>
                <input type="text" name="othername" class="form-control" id="othername"  placeholder="Othername" value="{{$user->othername}}">
          </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="text" name="gender" class="form-control" id="gender"  placeholder="Gender" value="{{$user->gender}}">
          </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username"  placeholder="UserName" value="{{$user->username}}">
          </div>
           <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="caption"  placeholder="email@example.com" value="{{$user->email}}">
          </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
        @endforeach
        </form>
    </div>
</div>



@endsection
