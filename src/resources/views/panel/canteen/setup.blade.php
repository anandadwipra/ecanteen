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
            <button class="btn btn-primary my-5 col-md-6" id="aa" data-toggle="modal" data-target="#modalbos1">Setup
                Canteen</button>
        </div>
        <br><br>
    </div>
</section>
@endsection
@section('last')
{{-- Ini Modal Box --}}
<div class="modal fade" id="modalbos1" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create E-Canteen</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>Add Canteen</h3>

                <form action="{{route('panel.canteen.setup',['user'=>Auth()->user()->id])}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Canteen Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                        @error('image')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Name Canteen</label>
                        <input type="text" id="name" class="form-control @error(" name") is-invalid @enderror"
                            name="name" value="{{old("name")}}">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Menjual</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="makanan">
                        <label class="form-check-label" for="inlineCheckbox1">Makanan</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="minuman">
                        <label class="form-check-label" for="inlineCheckbox2">Minuman</label>
                    </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection