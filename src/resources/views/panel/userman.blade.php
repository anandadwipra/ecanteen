@extends('layouts.admin-lte')
@section('css')
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<style>
        .container-fluid
        {
            overflow: auto !important;
        }
        .table
        {
            min-width: 600px !important;
        }
</style>
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Userman</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Userman</a></li>
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
        <table class="table table-hover">
            <a class="btn btn-primary" href="{{route('panel.userman.add')}}" role="button">Tambah</a>
            <br><br>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    {{-- <th scope="col">Full Name</th> --}}
                    <th scope="col">Email</th>
                    <th scope="col">Join Date</th>
                    <th scope="col">Role Id</th>
                    {{-- <th scope="col">Last Login</th> --}}
                    <th scope="col">Modify</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td>{{$user->full_name}}{!!$user->username==Auth()->user()->username?' <b>( You )</b> ':''!!}</td>
                    {{-- <td>{{$user->fullname}}</td> --}}
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->access->name}}</td>
                    {{-- <td>{{$user->last_login}}</td> --}}
                    <td>
                        <form action="{{route('panel.userman.delete',['user'=>$user->id])}}" method="POST">
                            <a class="btn btn-info" href="{{route('panel.userman.show',['user'=>$user->id])}}"
                                role="button">Detail</a>
                            <a class="btn btn-success" href="{{route('panel.userman.show',['user'=>$user->id])}}"
                                role="button">Edit</a>
                            @method('DELETE')
                            @csrf
                            @if(!($user->username==Auth()->user()->username))
                            <button class="btn btn-danger" type="submit">Delete</button>
                            @else
                            <button class="btn btn-secondary" type="button">Delete</button>
                            @endif
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
@section('last')
@endsection
@section('js')

@endsection