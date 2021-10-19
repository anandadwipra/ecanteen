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
                <h1 class="m-0">Canteen</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Canteen</a></li>
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
        <div class="col-md-12">
            <div class="card card-danger shadow-lg">
                <div class="card-header">
                    <h3 class="card-title"><b>{{Auth()->user()->canteen->name}}</b></h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                class="fas fa-expand"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-4"></div>
                        <figure class="figure col-md-4">
                            <img src="{{asset('storage/'.Auth()->user()->canteen->image)}}"
                                class="figure-img img-fluid rounded" alt="Canteen Image">
                            <figcaption class="figure-caption">Canteen {{Auth()->user()->canteen->name}}</figcaption>
                        </figure>
                    </div>
                    <div class="row">
                        <h3 class='col-md-4'><b>Nama Toko </b></h3>
                        <h3 class='col-md-4'>: {{Auth()->user()->canteen->name}}</h3>
                    </div>
                    <div class="row">
                        <h3 class='col-md-4'><b>Pemilik Toko </b></h3>
                        <h3 class='col-md-4'>: {{Auth()->user()->full_name}}</h3>
                    </div>
                    <div class="row">
                        <h3 class='col-md-4'><b>Nama Toko </b></h3>
                        <h3 class='col-md-4'>: {{Auth()->user()->canteen->name}}</h3>
                    </div>
                    <div class="row">
                        <h3 class='col-md-4'><b>Menjual </b></h3>
                        <h3 class='col-md-4'>: Makanan Dan Minuman</h3>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

        <div class="col-md-12">
            <div class="card card-danger shadow-lg">
                <div class="card-header">
                    <h3 class="card-title">Menu</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                class="fas fa-expand"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1"></div>
                        @for ($i=0;$i<$food->count();$i++) <div class="col-md-3 col-12">
                                <div class="row">
                                    <img height="200" width="auto" src="{{asset('storage/'.$food[$i]->image)}}"
                                        class="rounded mx-auto d-block" alt="Responsive image">
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <h4><b>{{$food[$i]->name}}</b></h4>
                                        <h5><b>Rp.{{$food[$i]->price}}</b></h5>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-center align-items-center col-12">
                                        <h1>{{$food[$i]->stock}}</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <a href="" class="btn btn-secondary col-md-8">Edit</a>
                                </div>
                            </div>
                            @if(($i+1)%3==0)
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        @endif
                        @if($i==($food->count()-1))
                    </div>
                    @endif
                    @endfor
                    <br><br>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <button class='btn btn-primary col-md-10' id="aa" data-toggle="modal"
                            data-target="#modalbos1">Tambah Menu</button>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>

        <div class="col-md-12">
            <div class="card card-primary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Order</h3>
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
                        <a class="btn btn-primary" href="{{route('panel.userman.add')}}" role="button">Tambah</a>
                        <br><br>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Total_Price</th>
                                <th scope="col">Wallet Address</th>
                                <th scope="col">Pay</th>
                                {{-- <th scope="col">Last Login</th> --}}
                                <th scope="col">Modify</th>
                            </tr>
                        </thead>
                        <tbody id="contentTable">

                        </tbody>
                    </table>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

        <!-- /.card -->

    </div>
    </div>
</section>
@endsection
@section('last')
<div class="modal fade" id="modalbos1" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Menu</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>Add New Food</h3>
                <form action="{{route('panel.canteen.add',['user'=>Auth()->user()->id])}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Food Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                        @error('image')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Name makanan</label>
                        <input type="text" id="name" class="form-control @error(" name") is-invalid @enderror"
                            name="name" value="{{old("name")}}">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Makanan</label>
                        <select class="form-control" id="exampleFormControlSelect1" name='jenis'>
                            <option value='makanan'>Makanan</option>
                            <option value='minuman'>Minuman</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inlineFormInputGroup">Name Canteen</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">RP.</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="0.00"
                                name='price'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Stock :</label>
                        <input type="number" id="quantity" min="1" max="50" name='stock'>
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
<script>
    var table= document.getElementById('contentTable');
    var xhr = new XMLHttpRequest();
    var url = "{{route('panel.canteen.order')}}"
    xhr.onreadystatechange = function(){
        var div= document.createElement('div');
        if(this.readyState == 4 && this.status == 200){
            responsene=JSON.parse(this.responseText);
        responsene.forEach((element,index) => {
            let myTr = document.createElement("tr");	
            let myTh = document.createElement("th");	
            
            myTh.innerText = index+1;		
            myTr.appendChild(myTh)

            myTh = document.createElement("td");	
            myTh.innerText = element['full_name'];		
            myTr.appendChild(myTh)

            myTh = document.createElement("td");	
            myTh.innerText = element['total'];		
            myTr.appendChild(myTh);            

            myTh = document.createElement("td");	
            myTh.innerText = element['address'];		
            myTr.appendChild(myTh)

            myTh = document.createElement("td");

            if (element['payment'] == 1 ) {
                myTh.innerText = "Lunas";
            }else{
                myTh.innerText = "Belum Lunas";
            }
            myTr.appendChild(myTh);
            div.appendChild(myTr);
        });
        table.innerHTML=div.outerHTML;
        }
    };

    setInterval(function(){
        xhr.open("GET", url, true);
        xhr.send();
    },2000);
</script>
@endsection
