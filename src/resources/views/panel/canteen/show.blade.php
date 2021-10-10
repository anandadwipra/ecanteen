@extends('layouts.admin-lte')
@section('css')
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<style>
    .imagebro {
        /* width: 100%; */
        max-height: 20vh;

    }

    .imagebro2 {
        /* width: 100%; */
        max-height: 10vh;

    }

    .arrow:hover {
        cursor: pointer;
    }

    .abc {
        position: fixed;
        bottom: 0%;
        z-index: 1000;
    }
</style>
<meta name="_token" content="{{ csrf_token() }}">
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
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Total</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <h3 class="float-sm-right">
                    Rp. <span class="totalHarga">0</span>
                </h3>
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
            {{-- @for ($i = 0; $i < 2; $i++) --}}
            @foreach ($food as $fo)
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box">
                    <div class="inner">
                        <h3>{{$fo->name}}</h3>

                        <p>{{$fo->canteen->name}}</p>
                    </div>
                    <div class="row">
                        <img class='imagebro mx-auto mb-2' src="{{asset('storage/'.$fo->image)}}"
                            class="rounded mx-auto d-block card-img-top" alt="Responsive image">
                    </div>
                    <div class="row mb-4">
                        <div class="col"></div>
                        <h4 class="col-md-3">Rp. <span class="harga">{{$fo->price}}</span></h4>
                        <div class="col"></div>
                        <div class="col-md-3"></div>
                        <div class="col"></div>
                        <h4 class="col-md-3 stock">{{$fo->stock}}</h4>
                    </div>
                    <div class="row">
                        <div class="idv" hidden>{{$fo->id}}</div>
                        <div class="col"></div>
                        <i class="fas fa-angle-left fa-4x col-md-3 arrowl"></i>
                        <div class="col"></div>
                        <h3 class="col-md-3 total">0</h3>
                        <div class="col"></div>
                        <i class="fas fa-angle-right fa-4x col-md-3 arrowr"></i>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- @endfor --}}
        </div>
        <div class="row">
            <div class="col-md-2 col-12"></div>
            <form action="{{route('panel.canteen.beli')}}" method="post" class="col-md-8 col-12">
                @csrf
                <input type="text" name="food_list" id="beli" hidden value="x">
                <input type="text" name="total" id="totalx" hidden value="x">
                <input type="text" name="canteen_id" hidden value="{{$food[0]->canteen->id}}">
                <button type={{(Auth()->user()->myorders->where('payment','=','0')->count()>0)?"button":"submit"}}
                    onclick="{{Auth()->user()->myorders->where('payment','=','0')->count()>0?'aler()':''}}"
                    class="btn btn-primary col-md-12">Beli</button>
                <div class="col-md-2 col-12"></div>
            </form>
        </div>

    </div>
</section>
@endsection
@section('last')

@endsection
@section('js')
<script>
    function aler(){
        alert("Make sure you pay your Order !!");
    }
    var arrowr=document.getElementsByClassName('arrowr');
    var arrowl=document.getElementsByClassName('arrowl');
    for(let i = 0; i < arrowr.length; i++){
        arrowr[i].addEventListener("click", function(){
                if(parseInt(arrowr[i].parentElement.parentElement.getElementsByClassName('stock')[0].innerText)!=parseInt(arrowr[i].parentElement.getElementsByClassName('total')[0].innerText)){
                    var beli=(document.querySelector('#beli').value).split(',')
                    arrowr[i].parentElement.getElementsByClassName('total')[0].innerText=parseInt(arrowl[i].parentElement.getElementsByClassName('total')[0].innerText)+1;
                    document.getElementsByClassName('totalHarga')[0].innerText=parseInt(arrowl[i].parentElement.parentElement.getElementsByClassName('harga')[0].innerText)+parseInt(document.getElementsByClassName('totalHarga')[0].innerText)   
                    
                    document.querySelector('#totalx').value=document.getElementsByClassName('totalHarga')[0].innerText

                    beli.push(arrowr[i].parentElement.getElementsByClassName('idv')[0].innerText);
                    document.querySelector('#beli').value=beli.toString()
                    // console.log(beli)
                }
        });
    };
    for(let i = 0; i < arrowl.length; i++){
        arrowl[i].addEventListener("click", function(){
            if(parseInt(arrowl[i].parentElement.getElementsByClassName('total')[0].innerText)!=0){
                var beli=(document.querySelector('#beli').value).split(',')
                arrowl[i].parentElement.getElementsByClassName('total')[0].innerText=parseInt(arrowl[i].parentElement.getElementsByClassName('total')[0].innerText)-1;
                document.getElementsByClassName('totalHarga')[0].innerText=parseInt(document.getElementsByClassName('totalHarga')[0].innerText)-parseInt(arrowl[i].parentElement.parentElement.getElementsByClassName('harga')[0].innerText)

                document.querySelector('#totalx').value=document.getElementsByClassName('totalHarga')[0].innerText

                var index=beli.indexOf(arrowr[i].parentElement.getElementsByClassName('idv')[0].innerText)
                beli.splice(index, 1);
                document.querySelector('#beli').value=beli.toString()
                // console.log(beli)
            }
        });
    };


</script>
@endsection