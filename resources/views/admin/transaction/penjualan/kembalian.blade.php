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
                        <li class="breadcrumb-item active">1D7R4N54K51</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Action button  -->
    <div class="content">
        <div class="row m-2">
            <div>
                <button style="width: 150px; height: 50px;" class="bg-danger border-0 rounded mr-1">
                    <span>Cancel</span>
                </button>
            </div>
        </div>
    </div>



    <div class="content mt-3">
        <div class="content ml-2 mr-2 pb-2 ">
            <div class="card ">
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="card-header">
                        <h3>Detail Transaksi : 1D7R4N54K51</h3>
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
                                                <th tyle="width: 20%" class="text-center">Harga Barang</th>
                                                <th tyle="width: 20%" class="text-center">Jumlah Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Nama Barang</td>
                                                <td>1</td>
                                                <td>1000</td>
                                                <td>1000</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Barang</td>
                                                <td>2</td>
                                                <td>2000</td>
                                                <td>2000</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Barang</td>
                                                <td>3</td>
                                                <td>3000</td>
                                                <td>3000</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Barang</td>
                                                <td>4</td>
                                                <td>4000</td>
                                                <td>4000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <label for="">Total Harga</label>
                                <input type="text"
                                    class="rounded col-sm-8 bg-transparent border-white text-white text-right"
                                    style="height: 40px;" value="Rp. 10000" readonly>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <label for="">Pembayaran</label>
                                <input type="number"
                                    class="rounded col-sm-8 bg-transparent border-white text-white text-center p-3"
                                    style="height: 40px;" placeholder="Masukan nominal uang">
                            </div>
                            <div class="d-flex justify-content-between">
                                <label for=""></label>
                                <button action="" class="btn btn-success mt-2 col-sm-8">Bayar</button>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <label for="">Kembalian</label>
                                <input type="text"
                                    class="rounded col-sm-8 bg-transparent border-white text-white text-right"
                                    style="height: 40px;" value="Rp. 10000" readonly>
                            </div>

                        </div>
                        {{-- <div class="card-footer">
                        <a href="" class="btn btn-primary float-right">Close</a>
                    </div> --}}

                </form>
            </div>
            <div class="card-footer mt-4 py-4">
                <div class="d-flex justify-content-center">
                    <a href="{{ route('penjualan.selesai') }}" class=" col-sm-8 btn btn-warning">
                        Selesai
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
