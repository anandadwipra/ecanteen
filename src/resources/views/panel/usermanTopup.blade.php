@extends('layouts.admin-lte')
@section('css')
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection
@section('content')
<div class="container">
    <form action="{{route('panel.userman.topuppost')}}" method="POST"  onsubmit="return confirm('Do you really want to submit the form?');">
        @csrf
        <br><br><br><br>
        <div class="form-group">
          <label for="exampleFormControlSelect1">User</label>
          <select class="form-control" id="exampleFormControlSelect1" required name="id">
            <option disabled selected>Username</option>
            @foreach (App\Models\User::all() as $item)
                @if($item->access_id!=1)
                <option value="{{$item->id}}">{{$item->full_name}}</option>
                @endif
            @endforeach
          </select>
        </div>
        <div class="form-group">
            <label class="sr-only" for="inlineFormInputGroup" >Rupiah</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">RP</div>
              </div>
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Rupiah" name="rupiah" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2"><button type="submit" class="btn btn-success col-md-12" >Top up</button></div>
        </div>
      </form>
</div>
@endsection
@section('last')

@endsection
@section('js')

@endsection