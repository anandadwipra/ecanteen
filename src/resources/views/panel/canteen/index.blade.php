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
                <h1 class="m-0">Canteen</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Canteen</a></li>
                    <li class="breadcrumb-item active">Home</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card card-danger shadow-lg">
                <div class="card-header">
                    <h3 class="card-title"><b>{{Auth()->user()->canteen->name}}</b></h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                class="fas fa-expand"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-4"></div>
                        <figure class="figure col-md-4">
                            <img src="{{asset('storage/'.Auth()->user()->canteen->image)}}"
                                class="figure-img img-fluid rounded" alt="Canteen Image">
                            <figcaption class="figure-caption">Canteen {{Auth()->user()->canteen->name}}</figcaption>
                        </figure>
                    </div>
                    <div class="row">
                        <h3 class='col-md-4'><b>Nama Toko </b></h3>
                        <h3 class='col-md-4'>: {{Auth()->user()->canteen->name}}</h3>
                    </div>
                    <div class="row">
                        <h3 class='col-md-4'><b>Pemilik Toko </b></h3>
                        <h3 class='col-md-4'>: {{Auth()->user()->full_name}}</h3>
                    </div>
                    <div class="row">
                        <h3 class='col-md-4'><b>Nama Toko </b></h3>
                        <h3 class='col-md-4'>: {{Auth()->user()->canteen->name}}</h3>
                    </div>
                    <div class="row">
                        <h3 class='col-md-4'><b>Menjual </b></h3>
                        <h3 class='col-md-4'>: Makanan Dan Minuman</h3>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

        <div class="col-md-12">
            <div class="card card-danger shadow-lg">
                <div class="card-header">
                    <h3 class="card-title">Menu</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                class="fas fa-expand"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1"></div>
                        @for ($a=1;$a<10;$a++) <div class="col-md-3 col-12">
                            @if($a%3==0)
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        @endif
                        <img src="{{asset('storage/image/canteen/burger.png')}}" class="img-fluid"
                            alt="Responsive image">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h4><b>Burger</b></h4>
                                <h5><b>Rp.10.000</b></h5>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center align-items-center col-12">
                                <h1>5</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <a href="" class="btn btn-secondary col-md-8">More</a>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    </div>
</section>
@endsection
@section('last')
@endsection
@section('js')

@endsection