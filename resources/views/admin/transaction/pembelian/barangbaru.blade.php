@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 border-b-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Transaksi Pembelian</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Transaksi</li>
                        <li class="breadcrumb-item active">Transaksi Pembelian</li>
                        <li class="breadcrumb-item active">Barang Baru</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Action button  -->
    <div class="content">
        <div class="row m-2">
            <div>
                <a href="{{ url()->previous() }}">
                    <button style="width: 150px; height: 50px;" class="bg-danger border-0 rounded mx-2 shadow">
                        <span>Cancel</span>
                    </button>
                </a>
            </div>
        </div>
    </div>



    <div class="content mt-4">
        <div class="content mx-2 pb-2 ">
            <div class="card ">
                <!-- /.card-header -->
                <!-- form start -->
                @if ($errors->any())
                    <div class="alert btn-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('barang.save') }}" method="POST">
                    <div class="form-horizontal">
                        @if (request()->last_transaction_id)
                            <input type="hidden" name="last_transaction_id" value="{{ request()->last_transaction_id }}">
                        @endif
                        @csrf
                        <div class="card-header">
                            <h3>Barang Baru</h3>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-column ">

                                <div class="d-flex justify-content-between">
                                    <label for="">ID Transaksi</label>
                                    <input type="text"
                                        class="rounded col-sm-8 bg-transparent border-white text-white text-right"
                                        style="height: 40px;" placeholder="Autmatically Generated" readonly>
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <label for="">Nama Barang</label>
                                    <input type="text"
                                        class="rounded col-sm-8 bg-transparent border-white text-white text-right"
                                        name="nama_barang" style="height: 40px;">
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <label for="">Harga Beli</label>
                                    <input type="number"
                                        class="rounded col-sm-8 bg-transparent border-white text-white text-right"
                                        name="harga_beli" style="height: 40px;">
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <label for="">Harga Jual</label>
                                    <input type="number"
                                        class="rounded col-sm-8 bg-transparent border-white text-white text-right"
                                        name="harga_jual" style="height: 40px;">
                                </div>

                            </div>


                        </div>
                        <div class="card-footer mt-4 py-4">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="col-sm-8 btn btn-warning">
                                    Submit
                                </button>
                            </div>
                        </div>
                </form>
            </div>

        </div>
    </div>
@endsection
