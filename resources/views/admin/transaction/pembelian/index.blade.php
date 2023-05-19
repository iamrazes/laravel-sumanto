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
    <div class="content ">

        <div class="d-flex justify-content-center mt-2 mb-4 vertical-center ">
            <div class="text-center" style="opacity: .5">
                <img src="{{ asset('sumanto-logo/sumanto-white2.png') }}" style="width: 20%;" alt="">
                <h2 class="mt-3 display-4 text-light">Transaction</h2>
                <h4 class="text-light">
                    Create new transaction with just one push of a button!
                </h4>
            </div>
        </div>

        <div class="d-flex justify-content-center row m-2">
            <div class="">
                <a href="{{ route('pembelian.transaksi') }}">
                    <button style="width: 150px; height: 50px;" class="btn-primary border-0 rounded shadow">
                        <span class="fa fa-plus mr-2">
                        </span>
                        Transaksi Baru
                    </button>
                </a>
            </div>

        </div>

    </div>
@endsection
