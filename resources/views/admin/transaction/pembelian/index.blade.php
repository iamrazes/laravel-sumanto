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
