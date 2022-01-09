<style type="text/css">
    .dashboard-menu
    {
        height: calc(100% - 74px);
        overflow-x: hidden;
        overflow-y: auto;
        padding: 0 23px 60px;
    }
    .dashboard-menu .menu-wrapper
    {
        margin-bottom: 40px;
    }
    .dashboard-menu h4
    {
        color: #3490dc;
        margin-bottom: 18px;
    }
    .dashboard-menu .menu-wrapper .flex
    {
        width: 100%;
        height: 360px;
        display: flex;
        flex-flow: column;
        justify-content: space-between;
        gap: 24px;
        flex-wrap: wrap;
        overflow-x: auto;
    }
    .dashboard-menu .menu-wrapper .flex .card
    {
        width: 200px;
        padding: 20px;
    }
    .dashboard-menu .menu-wrapper .flex .card h5
    {
        font-size: 20px;
        text-align: center;
    }
    .dashboard-menu .menu-wrapper .flex .card img
    {
        width: 160px;
        height: 120px;
        object-fit: cover;
        object-position: center;
        margin: 14px 0;
    }
    .dashboard-menu .menu-wrapper .flex .card p
    {
        margin-bottom: 8px;
    }
    .dashboard-menu .menu-wrapper .flex .card p.nama-kantin
    {
        color: #3490dc;
    }
    .dashboard-menu .menu-wrapper .flex .card p:last-child
    {
        margin-bottom: unset;
    }
</style>

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
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@if(Auth()->user()->access_id!=3)
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info p-3 mb-4">
                    <div class="inner">
                        @if(Auth()->user()->access_id==2)
                        <h3>1</h3>
                        @else
                        <h3>150</h3>
                        @endif
                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag pr-3"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success p-3 mb-4">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                        <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars pr-3"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning p-3 mb-4">
                    <div class="inner">
                        <h3>{{APP\Models\User::count()}}</h3>

                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add pr-3"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger p-3 mb-4">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph pr-3"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card  card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Collapsible Card Example</h3>
                        <div class="card-tools">
                            <!-- Collapse Button -->
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <canvas id="myChart" width="400" height="400"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-lg-6">
                <div class="card  card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Collapsible Card Example</h3>
                        <div class="card-tools">
                            <!-- Collapse Button -->
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <canvas id="myChart2" width="400" height="400"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@else

<!-- Dashboard Menu -->
<div class="dashboard-menu">
    <div class="menu-wrapper">
        <h4>Menu Terbaru</h4>
        <div class="flex">
            <div class="card">
                <h5>Telur Gulung</h5>
                <img src="{{asset('img/egg.png')}}">
                <p class="nama-kantin">Kantin Bapak</p>
                <p>Harga: Rp5.000</p>
                <p>Total: 20 Pesanan</p>
            </div>
            <div class="card">
                <h5>Telur Gulung</h5>
                <img src="{{asset('img/egg.png')}}">
                <p class="nama-kantin">Kantin Bapak</p>
                <p>Harga: Rp5.000</p>
                <p>Total: 20 Pesanan</p>
            </div>
            <div class="card">
                <h5>Telur Gulung</h5>
                <img src="{{asset('img/egg.png')}}">
                <p class="nama-kantin">Kantin Bapak</p>
                <p>Harga: Rp5.000</p>
                <p>Total: 20 Pesanan</p>
            </div>
            <div class="card">
                <h5>Telur Gulung</h5>
                <img src="{{asset('img/egg.png')}}">
                <p class="nama-kantin">Kantin Bapak</p>
                <p>Harga: Rp5.000</p>
                <p>Total: 20 Pesanan</p>
            </div>
            <div class="card">
                <h5>Telur Gulung</h5>
                <img src="{{asset('img/egg.png')}}">
                <p class="nama-kantin">Kantin Bapak</p>
                <p>Harga: Rp5.000</p>
                <p>Total: 20 Pesanan</p>
            </div>
            <div class="card">
                <h5>Telur Gulung</h5>
                <img src="{{asset('img/egg.png')}}">
                <p class="nama-kantin">Kantin Bapak</p>
                <p>Harga: Rp5.000</p>
                <p>Total: 20 Pesanan</p>
            </div>
        </div>
    </div>

    <div class="menu-wrapper">
        <h4>Menu Terlaris</h4>
        <div class="flex">
            <div class="card">
                <h5>Telur Gulung</h5>
                <img src="{{asset('img/egg.png')}}">
                <p class="nama-kantin">Kantin Bapak</p>
                <p>Harga: Rp5.000</p>
                <p>Total: 20 Pesanan</p>
            </div>
            <div class="card">
                <h5>Telur Gulung</h5>
                <img src="{{asset('img/egg.png')}}">
                <p class="nama-kantin">Kantin Bapak</p>
                <p>Harga: Rp5.000</p>
                <p>Total: 20 Pesanan</p>
            </div>
            <div class="card">
                <h5>Telur Gulung</h5>
                <img src="{{asset('img/egg.png')}}">
                <p class="nama-kantin">Kantin Bapak</p>
                <p>Harga: Rp5.000</p>
                <p>Total: 20 Pesanan</p>
            </div>
            <div class="card">
                <h5>Telur Gulung</h5>
                <img src="{{asset('img/egg.png')}}">
                <p class="nama-kantin">Kantin Bapak</p>
                <p>Harga: Rp5.000</p>
                <p>Total: 20 Pesanan</p>
            </div>
            <div class="card">
                <h5>Telur Gulung</h5>
                <img src="{{asset('img/egg.png')}}">
                <p class="nama-kantin">Kantin Bapak</p>
                <p>Harga: Rp5.000</p>
                <p>Total: 20 Pesanan</p>
            </div>
            <div class="card">
                <h5>Telur Gulung</h5>
                <img src="{{asset('img/egg.png')}}">
                <p class="nama-kantin">Kantin Bapak</p>
                <p>Harga: Rp5.000</p>
                <p>Total: 20 Pesanan</p>
            </div>
        </div>
    </div>

    <h4>Jumlah User Order</h4>
    <p>120 Orang</p>
</div>

@endif
@endsection
@section('last')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id='btn-acc' style="display: none;" data-toggle="modal"
    data-target="#AccesLevel">
    Who You???
</button>

<!-- Modal -->
<div class="modal fade" id="AccesLevel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login Success</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <img src="{{asset('img/bee.png')}}" class="rounded mx-auto d-block" alt="Welcome users"
                            width="50%" height="auto">
                    </div>
                    <br>
                    <div class="row">
                        <h4 class='text-center col-md-12 text-capitalize'><b>{{ Auth()->user()->access->name}}</b></h4>
                    </div>
                    <div class="row">
                        <h5 class='text-center col-md-12'>Selamat datang,kami menunggu anda disini</h5>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <button type="button" class="btn btn-primary col-md-4" data-dismiss="modal">Oke!!!</button>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"
    integrity="sha512-Wt1bJGtlnMtGP0dqNFH1xlkLBNpEodaiQ8ZN5JLA5wpc1sUlk/O5uuOMNgvzddzkpvZ9GLyYNa8w2s7rqiTk5Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.esm.js"
    integrity="sha512-IPqefcmFCuGcYxl/uIjvyCXwh5T9+EB2MFT7W9RUZd20d7PLfgdT975xdhyesvdXH6Au8SyXOw1236LY1lFl5Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.esm.min.js"
    integrity="sha512-2Vi/lCX8NaXlAhzc28RAoteYAiJVoz4y3Xq/IpHQCw7KU25I34fDqJSVSUml2tQRVYFnf3IMy6O59zKJh79hiw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.js"
    integrity="sha512-b3xr4frvDIeyC3gqR1/iOi6T+m3pLlQyXNuvn5FiRrrKiMUJK3du2QqZbCywH6JxS5EOfW0DY0M6WwdXFbCBLQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/helpers.esm.js"
    integrity="sha512-/2SCtwX/TWXQ8kJN8MhCXL5GQJkBhh5J184Uy/totMp+1pFXTQhV/hMMYHuSl+juR5WO9i11AvywRgYFotRIug=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/helpers.esm.min.js"
    integrity="sha512-b3xZ1Eh852+/Ltha4XJd59YP2d+I+B6NPdB4H+Wns29GX9x5pLwlp8jnQtJYog3d5Xk1SWvhT2lgJDDBvpV0ow=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

    // chart1
    var ctx = document.getElementById('myChart');
    const data = {
  labels: [
    'Red',
    'Blue',
    'Yellow'
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [300, 50, 100],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ],
    hoverOffset: 4
  }]
};
var myChart = new Chart(ctx, {
    type: 'doughnut',
  data: data,
});

// chart2
var ctz = document.getElementById('myChart2');
const data2 = {
    labels: [
    'Red',
    'Green',
    'Yellow',
    'Grey',
    'Blue'
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [11, 16, 7, 3, 14],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(75, 192, 192)',
      'rgb(255, 205, 86)',
      'rgb(201, 203, 207)',
      'rgb(54, 162, 235)'
    ]
  }]
};
var myChart2 = new Chart(ctz, {
    type: 'polarArea',
  data: data,
  options: {}
});
</script>
{{-- <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> --}}
@endsection