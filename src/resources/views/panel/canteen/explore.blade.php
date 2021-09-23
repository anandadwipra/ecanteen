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
                <h1 class="m-0">Explore</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Canteen</a></li>
                    <li class="breadcrumb-item active">Explore</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1 col-12 "></div>
            @foreach ($canteen as $ca)
            <div class="col-md-4 col-12">
                <div class="row">
                    <div class="card" style="width: 18rem;">
                        <img height="200" width="auto" src="{{asset('storage/'.$ca->image)}}"
                            class="rounded mx-auto d-block card-img-top" alt="Responsive image">
                        <div class="card-body">
                            <h3 class="card-text">{{$ca->name;}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
@section('last')

@endsection
@section('js')

@endsection