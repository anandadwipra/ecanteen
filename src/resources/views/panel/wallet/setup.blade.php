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
                <h1 class="m-0">Wallet</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Wallet</a></li>
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
        <div class="row mb-4">
            <div class="col-md-3"></div>
            <figure class="figure col-md-6">
                <img src="{{asset('img/walletSetup.png')}}" class="figure-img img-fluid rounded"
                    alt="Tidak Punya Wallet">
                <figcaption class="figure-caption">No Wallet Found</figcaption>
            </figure>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <a href='{{route('panel.wallet.setup',['user'=>Auth()->user()->id])}}'
                class="btn btn-primary col-md-6">Setup
                Wallet</a>
        </div>
        <br><br>
    </div>
</section>
@endsection
@section('last')
@endsection
@section('js')

@endsection