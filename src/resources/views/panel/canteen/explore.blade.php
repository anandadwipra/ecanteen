@extends('layouts.admin-lte')
@section('css')
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<style>
    .a:hover {
        cursor: pointer;
    }
    .imagebro{
        /* width: 100%; */
        height: 10vh;
        max-height: 20vh;

    }
</style>
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
            <!-- ./col -->
            @foreach ($canteen as $ca)
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>{{$ca->name}}</h3>

                        <p>{{$ca->user->full_name}}</p>
                    </div>
                    <div class="row">
                        <img class='imagebro mx-auto mb-2' src="{{asset('storage/'.$ca->image)}}"
                    class="rounded mx-auto d-block card-img-top" alt="Responsive image">
                    </div>
                    <a href="{{route('panel.canteen.show',['canteen'=>$ca->id])}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            @endforeach
            <!-- ./col -->
        </div>
    </div>
</section>
@endsection
@section('last')

@endsection
@section('js')

@endsection