@extends('layouts.admin-lte')
@section('css')
<style type="text/css">
    .detail-wrapper
    {
        padding: 23px;
    }
    .detail-wrapper .card-wrapper
    {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 20px;
    }
    .detail-wrapper .card-wrapper .card h4
    {
        text-align: center;
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

    <div class="card-wrapper">
        <div class="card p-3">
            <h4>Telur Gulung</h4>
            <img src="{{asset('img/egg.png')}}">
            <h6>Jumlah Pesanan: 2</h6>
            <h6>Total Belanja: Rp5.000</h6>
            <h6>Pembayaran: 0</h6>
        </div>
        <div class="card p-3">
            <h4>Telur Gulung</h4>
            <img src="{{asset('img/egg.png')}}">
            <h6>Jumlah Pesanan: 2</h6>
            <h6>Total Belanja: Rp5.000</h6>
            <h6>Pembayaran: 0</h6>
        </div>
        <div class="card p-3">
            <h4>Telur Gulung</h4>
            <img src="{{asset('img/egg.png')}}">
            <h6>Jumlah Pesanan: 2</h6>
            <h6>Total Belanja: Rp5.000</h6>
            <h6>Pembayaran: 0</h6>
        </div>
        <div class="card p-3">
            <h4>Telur Gulung</h4>
            <img src="{{asset('img/egg.png')}}">
            <h6>Jumlah Pesanan: 2</h6>
            <h6>Total Belanja: Rp5.000</h6>
            <h6>Pembayaran: 0</h6>
        </div>
        <div class="card p-3">
            <h4>Telur Gulung</h4>
            <img src="{{asset('img/egg.png')}}">
            <h6>Jumlah Pesanan: 2</h6>
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
