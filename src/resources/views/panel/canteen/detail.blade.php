@extends('layouts.admin-lte')
@section('css')
<style type="text/css">
    .detail-wrapper
    {
        padding: 23px;
    }
</style>
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection
@section('content')

<div class="detail-wrapper">

    User id : {{$order->user_id}}<br>
    Canten id : {{$order->canteen_id}}<br>
    List Food : <br>
    
    @foreach($list as $ls)
        Name : {{$ls->name}} <br>
        Image: {{$ls->image}}<br>
        Jumlah: {{$count[$ls->id]}}
        <hr>
    @endforeach

    Total Belanja : {{$order->total}}<br>
    Pembayaran: {{$order->payment}}<br>
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
