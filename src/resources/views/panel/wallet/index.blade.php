@extends('layouts.admin-lte')
@section('css')
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<style>
    @media(max-width: 1000px)
    {
        table
        {
            display: flex;
            justify-content: space-between;
        }
        tr
        {
            display: flex;
            flex-direction: column;
            flex: 1;
        }
    }
</style>
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

        <div class="col-md-12 no-padding">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Your Wallet Information</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body py-5">
                    <div class="row">
                        <div class="col-md-4">
                            <h3><b>Hi {{Auth()->user()->full_name}} !!<b></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <h5>Berikut informasi tentang wallet anda ....</h5>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class=" info-box">
                                <span class="info-box-icon bg-primary"><i class="fas fa-address-card"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Address</span>
                                    <span class="info-box-number">{{Auth()->user()->wallet->address}}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-md-4">
                            <div class=" info-box">
                                <span class="info-box-icon bg-success"><i class="fas fa-money-bill-wave"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Balance</span>
                                    <span class="info-box-number">Rp.{{Auth()->user()->wallet->balance}}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-md-4">
                            <div class=" info-box">
                                <span class="info-box-icon bg-danger"><i class="fas fa-money-bill"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">CashOut</span>
                                    <span class="info-box-number">Rp.{{Auth()->user()->wallet->balance}}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        @if (Auth()->user()->access_id==1)
                        <div class="col-md-4">
                            <div class=" info-box">
                                <span class="info-box-icon bg-warning"><i class="fas fa-credit-card"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Fix Money</span>
                                    <span class="info-box-number">Rp.{{App\Models\FixMoney::total()}}</span>
                                    {{-- <span class="info-box-number">Rp.{{App\Models\FixMoney::first()->Money}}, Rp.{{App\Models\FixMoney::total()}}</span> --}}
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div> 
                        @else 
                        <div class="col-md-4">
                            <div class=" info-box">
                                <span class="info-box-icon bg-danger"><i class="fas fa-credit-card"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">RFID</span>
                                    @if(is_null(Auth()->user()->rfid))
                                    <span class="info-box-number">RFID TIDAK TERSEDIA UNTUK ANDA</span>
                                    @else
                                    <span class="info-box-number">{{Auth()->user()->rfid->rfid}}</span>
                                    @endif
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        @endif
                    </div>
                    
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-12 no-padding">
            <div class="card card-primary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Order History</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nomor</th>
                                <th scope="col">Kantin</th>
                                <th scope="col">Wallet Address</th>
                                <th scope="col">Total Harga</th>
                                <th scope="col">Status</th>
                                {{-- <th scope="col">Last Login</th> --}}
                                <th scope="col">Date And Time</th>
                            </tr>
                        </thead>
                        <tbody id="contentTable">
                            @foreach ($orders as $order)
                            <tr>
                                <td scope="col">{{$loop->index+1}}</td>
                                <td scope="col">{{$order->canteen->name}}</td>
                                <td scope="col">{{$order->canteen->user->wallet->address}}</td>
                                <td scope="col">{{$order->total}}</td>
                                <td scope="col">{{$order->payment==1?"Success":"Pending"}}</td>
                                {{-- <td scope="col">Last Login</td> --}}
                                <td scope="col">{{$order->created_at}} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-12 no-padding">
            <div class="card card-primary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Money Report</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    The body of the card
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

        <div class="col-md-12 no-padding">
            <div class="card card-primary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Money Report V2</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    The body of the card
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