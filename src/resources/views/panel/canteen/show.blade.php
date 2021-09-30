@extends('layouts.admin-lte')
@section('css')
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<style>
    .a:hover {
        cursor: pointer;
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
            <div class="col-md-1 col-12 "></div>
            @foreach ($food as $fo)
            <div class="col-md-3 col-12">
                <div class="row">
                    <div class="card a" style="width: 18rem;"  onclick="javascript:location.href='{{route('panel.canteen.show',['canteen'=>$fo->id])}}'">
                        <img height="200" width="auto" src="{{asset('storage/'.$fo->image)}}"
                            class="rounded mx-auto d-block card-img-top" alt="Responsive image">
                        <div class="card-body">
                                <h3 class="card-text text-center">{{$fo->name;}}</h3>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <h4 class="text-left">{{$fo->stock}}</h4>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <h4 class="text-right">Rp.{{$fo->price}}</h4>
                                    </div>
                                </div>
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