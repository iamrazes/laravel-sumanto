@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 border-b-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Transaksi Penjualan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Transaksi</li>
                        <li class="breadcrumb-item active">Transaksi Penjualan</li>
                        <li class="breadcrumb-item active">{{ $transaksi->id }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Action button  -->
    <div class="content">
        <div class="row m-2 mb-4">
            <div class="d-flex flex-row">
                <a href="javascript:history.back()">
                    <button style="width: 150px; height: 50px;" class="btn-primary border-0 rounded mx-2 shadow"
                        type="">
                        <span>Kembali</span>
                    </button>
                </a>
                <form action="{{ route('penjualan.transaksi.destroy', $transaksi->id) }}" method="POST">
                    @csrf
                    <button style="width: 150px; height: 50px;" class="bg-danger border-0 rounded mx-2 shadow"
                        type="">
                        <span>Cancel</span>
                    </button>
                </form>
            </div>
        </div>
    </div>



    <div class="content mt-3">
        <div class="content ml-2 mr-2 pb-2 ">
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
                <form class="form-horizontal" action="" method="get">
                    <div class="card-header">
                        <h3>Detail Transaksi : {{ $transaksi->id }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-column ">

                            <div class="d-flex justify-content-between">
                                <label for="">ID Transaksi</label>
                                <input type="text"
                                    class="rounded col-sm-8 bg-transparent border-white text-white text-right"
                                    style="height: 40px;" value="1D7R4N54K51" readonly>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <label for="">Tanggal Transaksi</label>
                                <input type="text"
                                    class="rounded col-sm-8 bg-transparent border-white text-white text-right"
                                    style="height: 40px;" value="Rabu, 07 Juni 2023" readonly>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <label for="">Daftar Barang</label>
                                <div class="col-sm-8">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 100%" class="text-center align-middle">Nama Barang</th>
                                                <th tyle="width: 20%" class="text-center">Jumlah Barang</th>
                                                <th tyle="width: 20%" class="text-center">Harga Jual</th>
                                                <th tyle="width: 20%" class="text-center">Jumlah Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bpenjualan as $item)
                                                <tr>
                                                    <td>{{ $item->nama_barang }}</td>
                                                    <td>{{ $item->quantity }}</td>
                                                    <td>{{ $item->harga_jual }}</td>
                                                    <td>{{ $item->jumlah_harga }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <label for="">Total Harga</label>
                                <input type="text"
                                    class="rounded col-sm-8 bg-transparent border-white text-white text-right"
                                    style="height: 40px;" value="{{ array_sum($total_harga) }}" readonly>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <label for="">Pembayaran</label>
                                <input type="number"
                                    class="rounded col-sm-8 bg-transparent border-white text-white text-center p-3"
                                    name="harga_bayar" style="height: 40px;" placeholder="Masukan nominal uang"
                                    value="{{ request()->harga_bayar }}">
                            </div>
                            <div class="d-flex justify-content-between">
                                <label for=""></label>
                                <button action="" class="btn btn-success mt-2 col-sm-8">Bayar</button>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <label for="">Kembalian</label>
                                <input type="text"
                                    class="rounded col-sm-8 bg-transparent border-white text-white text-right"
                                    style="height: 40px;"
                                    value="{{ request()->harga_bayar ? request()->harga_bayar - array_sum($total_harga) : '' }}"
                                    readonly>
                            </div>

                        </div>
                        {{-- <div class="card-footer">
                        <a href="" class="btn btn-primary float-right">Close</a>
                    </div> --}}

                </form>
            </div>
            <div class="card-footer mt-4 py-4">
                <form class="d-flex justify-content-center"
                    action="{{ route('penjualan.transaksi.update', $transaksi->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="harga_bayar" value="{{ request()->harga_bayar }}">
                    <input type="hidden" name="total_harga" value="{{ array_sum($total_harga) }}">
                    <input type="hidden" name="kembalian"
                        value="{{ request()->harga_bayar ? request()->harga_bayar - array_sum($total_harga) : '' }}">
                    <button class=" col-sm-8 btn btn-warning">
                        Selesai
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
