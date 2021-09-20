@extends('layouts.admin-lte')
@section('css')
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Show User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Userman</a></li>
                    <li class="breadcrumb-item active">Show User</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <center>
                        <img src="{{$user->gravatar(200)}}" class="rounded-circle">
                        <h2 class="mt-3">{{$user->full_name}}</h2>
                    </center>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form method='POST' action="{{route('panel.userman.update',['user'=>$user->id])}}">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="username" class="form-control" id="name" aria-describedby="emailHelp"
                                placeholder="Enter Username" name='username' value='{{$user->username}}'>
                            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                        </div>
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input class="form-control" id="full_name" placeholder="Enter Full Name" name='full_name'
                                value='{{$user->full_name}}'>
                        </div>
                        @if($user->access_id==3)
                        <div class="form-group">
                            <label for="rfid">RFID</label>
                            <input type="text" disabled class="form-control" id='rfid' placeholder="Enter Email"
                                value='{{$user->rfid->rfid}}'>
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email" name='email'
                                value='{{$user->email}}'>
                        </div>
                        <div class="form-group">
                            <label for="access_id">Role</label>
                            <select class="form-control" id='access_id' name='access_id'>
                                <option disabled selected>Pilih Role</option>
                                @foreach (App\Models\Acces::all() as $item)
                                @if($item->id===$user->access->id)
                                <option value="{{$item->id}}" selected>{{$item->name}}</option>
                                @else
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endif
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                name='password'>
                        </div>
                        <div class="row">
                            <div class="col-md-10"></div>
                            <div class="col-md-2"><button type="submit" class="btn btn-success">Update</button></div>
                        </div>
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('last')
@endsection
@section('js')

@endsection