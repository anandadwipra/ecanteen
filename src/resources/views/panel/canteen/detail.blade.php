@extends('layouts.admin-lte')
@section('css')
<style type="text/css">
    .detail-wrapper
    {
        padding: 23px;
    }
    .detail-wrapper h4
    {
        color: #3490dc;
    }
    .detail-wrapper h3
    {
        margin-bottom: 24px;
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
    .detail-wrapper .card-wrapper .card img,
    .detail-wrapper .card-wrapper .card div
    {
        margin: 8px 0;   
    }
    .detail-wrapper .card-wrapper .card div
    {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    @media (max-width: 1267px)
    {
        .detail-wrapper .card-wrapper
        {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 827px)
    {
        .detail-wrapper .card-wrapper
        {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 427px)
    {
        .detail-wrapper .card-wrapper
        {
            grid-template-columns: 1fr;
        }
    }
</style>
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection
@section('content')

<div class="detail-wrapper">
    <h4>User ID: {{$order->user_id}}</h4>
    <h4>Canteen ID: {{$order->canteen_id}}</h4>
    <hr>
    <h3>List Order:</h3>

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
            <div>
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
        </div>
        <div class="card p-3">
            <h4>Telur Gulung</h4>
            <img src="{{asset('img/egg.png')}}">
            <h6>Jumlah Pesanan: 2</h6>
            <h6>Total Belanja: Rp5.000</h6>
            <h6>Pembayaran: 0</h6>
            <div>
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
        </div>
        <div class="card p-3">
            <h4>Telur Gulung</h4>
            <img src="{{asset('img/egg.png')}}">
            <h6>Jumlah Pesanan: 2</h6>
            <h6>Total Belanja: Rp5.000</h6>
            <h6>Pembayaran: 0</h6>
            <div>
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
        </div>
        <div class="card p-3">
            <h4>Telur Gulung</h4>
            <img src="{{asset('img/egg.png')}}">
            <h6>Jumlah Pesanan: 2</h6>
            <h6>Total Belanja: Rp5.000</h6>
            <h6>Pembayaran: 0</h6>
            <div>
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
        </div>
        <div class="card p-3">
            <h4>Telur Gulung</h4>
            <img src="{{asset('img/egg.png')}}">
            <h6>Jumlah Pesanan: 2</h6>
            <h6>Total Belanja: Rp5.000</h6>
            <h6>Pembayaran: 0</h6>
            <div>
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
        </div>
        <div class="card p-3">
            <h4>Telur Gulung</h4>
            <img src="{{asset('img/egg.png')}}">
            <h6>Jumlah Pesanan: 2</h6>
            <h6>Total Belanja: Rp5.000</h6>
            <h6>Pembayaran: 0</h6>
            <div>
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
        </div>
    </div>
</div>

@endsection
