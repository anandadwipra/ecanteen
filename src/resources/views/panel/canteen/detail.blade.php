@extends('layouts.admin-lte')
@section('css')
<style type="text/css">
    .detail-wrapper
    {
        padding: 23px;
    }
    .detail-wrapper .card h4
    {
        text-align: center;
    }
    .detail-wrapper .row
    {
        gap: 20px;
    }
</style>
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection
@section('content')

<div class="detail-wrapper">

    <h5>User ID: {{$order->user_id}}</h5>
    <h5>Canteen ID: {{$order->canteen_id}}</h5>
    <h5>List Food:</h5>
    <hr>

    <!--
    @foreach($list as $ls)
        Name: {{$ls->name}} <br>
        Image: {{$ls->image}}<br>
        Jumlah: {{$count[$ls->id]}}
        <hr>
    @endforeach

    Total Belanja : {{$order->total}}<br>
    Pembayaran: {{$order->payment}}<br> -->

    <div class="row">
        <div class="card col-6 col-sm-4 col-lg-3">
            <h4>Bakso</h4>
            <h6>Jumlah Pesanan: 2</h6>
            <br>
            <h6>Total Belanja: Rp5.000</h6>
            <h6>Pembayaran: 0</h6>
        </div>
        <div class="card col-6 col-sm-4 col-lg-3">
            <h4>Bakso</h4>
            <h6>Jumlah Pesanan: 2</h6>
            <br>
            <h6>Total Belanja: Rp5.000</h6>
            <h6>Pembayaran: 0</h6>
        </div>
    </div>

    @if($order->payment==0)
        <form method="post" action="{{route('panel.canteen.cancel',$order->id)}}">
        @csrf
        <input type="text" value="Maaf Pesanan habis" hidden></input>
        <button href="" class="btn btn-info" >Batalkan Pesanan</button>
        </form>
    @else
        <button class="btn btn-dark">Batalkan Pesanan</button>
    @endif
</div>

@endsection
