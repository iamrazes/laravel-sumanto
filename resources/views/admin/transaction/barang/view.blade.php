@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 border-b-2">
            <div class="col-sm-6">
                <h1 class="m-0">Barang</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Transaksi</li>
                    <li class="breadcrumb-item active">Barang</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content ml-2 mr-2 pb-2">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Detail Barang</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal">

            <div class="card-body">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ID Barang</label>
                    <div class="col-sm-10">
                            <input  class="form-control text-right bg-dark" value="{{$dtbarang->id}}" readonly >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                            <input  class="form-control text-right bg-dark" value="{{$dtbarang->nama_barang}}" readonly >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Stok Barang</label>
                    <div class="col-sm-10">
                            <input  class="form-control text-right bg-dark" value="{{$dtbarang->stok_barang}}" readonly >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Harga Jual</label>
                    <div class="col-sm-10">
                            <input  class="form-control text-right bg-dark" value="{{$dtbarang->harga_jual}}" readonly >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Harga Beli</label>
                    <div class="col-sm-10">
                            <input  class="form-control text-right bg-dark" value="{{$dtbarang->harga_beli}}" readonly >
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a href="{{ route('barang') }}" class="btn btn-primary float-right">Close</a>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
</div>
@endsection
