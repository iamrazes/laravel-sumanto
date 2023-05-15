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

    <!-- Content -->
    <div class="content mt-4 mr-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <span>
                        ID Transaksi :
                    </span>
                </div>
                <div>
                    <span>
                        Tanggal Transaksi :
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <span class="text-bold text-lg">
                        2023040500001
                    </span>
                </div>
                <div>
                    <span class="text-bold text-lg">
                        Rabu, 2023/05/10
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-4">
        <div class="container-fluid">
            <div class="col">
                <div class="d-flex row justify-content-between">
                    <span>
                        Total Harga :
                    </span>
                    <span class="text-bold text-xl">
                        Rp. 900.000
                    </span>
                </div>
                <div class="d-flex row justify-content-between mt-4">
                    <span>
                        Pembayaran :
                    </span>
                    <div class="d-flex form-group">
                    <input class="rounded text-lg p-2 border" style=" height:50px; width:750px;">
                    </input>
                    <button type="submit" class="rounded bg-success border-0 ml-2" style="height:50px; width:75px;">
                        Bayar
                    </button>
                    </div>
                </div>
                <div class="d-flex row justify-content-between">
                    <span>
                        Kembalian :
                    </span>
                    <span class="text-bold text-xl">
                        Rp. 900.000
                    </span>
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-center mt-4 pb-4">
            <a href="#"><button class="bg-primary border-0 rounded"
                    style="width:200px; height: 50px;"><span>Selesai</span></button></a>

        </div>
    </div>
@endsection
