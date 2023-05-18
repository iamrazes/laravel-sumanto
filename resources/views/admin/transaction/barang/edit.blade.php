@extends('layouts.admin')

@section('content')
    <div class="content-header ">
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

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="content ml-2 mr-2 pb-2">
        <div class="card card-info">
            <div class="card-header bg-warning">
                <h3 class="card-title">Detail Barang</h3>
            </div>
            <!-- /.card-header -->
            <form class="form-horizontal" action="{{ route('barang.update', $dtbarang->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <!-- form start -->
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ID Barang</label>
                        <div class="col-sm-10">
                            <input class="form-control" placeholder="ID Barang" value="{{ $dtbarang->id }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang"
                                value="{{ $dtbarang->nama_barang }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Stock Barang</label>
                        <div class="col-sm-10">
                            <input type="number" name="stok_barang" class="form-control" placeholder="Stock Barang"
                                value="{{ $dtbarang->stok_barang }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Harga Jual</label>
                        <div class="col-sm-10">
                            <input type="number" name="harga_jual" class="form-control" placeholder="Harga Jual"
                                value="{{ $dtbarang->harga_jual }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Harga Beli</label>
                        <div class="col-sm-10">
                            <input type="number" name="harga_beli" class="form-control" placeholder="Harga Beli"
                                value="{{ $dtbarang->harga_beli }}">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Submit</button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </div>
@endsection
