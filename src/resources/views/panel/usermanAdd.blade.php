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
                <h1 class="m-0">Add User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('panel.userman')}}">Userman</a></li>
                    <li class="breadcrumb-item active">Add</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <br><br>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form method='POST' action="{{route('panel.userman.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input type="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" aria-describedby="emailHelp" placeholder="Enter Username" name='username'
                            value="{{ old('username') }}">
                        @error('username') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="full_name">Full Name</label>
                        <input class="form-control  @error('full_name') is-invalid @enderror" id="full_name"
                            placeholder="Enter Full Name" name='full_name' value="{{ old('full_name') }}">
                        @error('full_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email"
                            placeholder="Enter Email" name='email' value="{{ old('email') }}">
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="access_id">Role</label>
                        <select class="form-control text-capitalize" id='access_id' name='access_id'>
                            <option disabled selected>Pilih Role</option>
                            @foreach (App\Models\Acces::all() as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                        @error('access_id') <div class="invalid-feedback  @error('access_id') is-invalid @enderror">
                            {{ $message }}
                        </div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control  @error('password') is-invalid @enderror"
                            id="password" placeholder="Password" name='password'>
                        @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-10"></div>
                        <button type="submit" class="btn btn-success col-md-2">Submit</button>
                    </div>

            </div>
            </form>
        </div>
        <div class="col-md-1"></div>
        <br>
    </div>
</section>
@endsection
@section('last')
@endsection
@section('js')

@endsection