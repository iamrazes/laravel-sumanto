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
                    <button style="width: 150px; height: 50px;" class="bg-danger border-0 rounded mr-1" type="">
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

        <!-- Search bar -->
        <div class="content mt-3">
            <div class="container-fluid">
                <div class=" row">
                    <div class="d-flex col">
                        <div class="input-group">
                            {{-- Barang --}}
                            <input type="search" class="form-control form-control-lg" placeholder="Barang">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default ">
                                    <i class="fa fa-search "></i>
                                </button>
                            </div>
                            {{-- Jumlah --}}
                            <div class="">
                                <input type="text" class="form-control form-control-lg ml-1" style="width:100px;" placeholder="Jumlah">
                            </div>
                            {{-- Button --}}
                            <button class="bg-success btn-lg border-0 ml-1" type="">
                                <span>Tambah</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-2 ml-2">
            <div class="container-fluid"></div>
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10px;">#</th>
                                <th style="width: 100px;">ID Barang</th>
                                <th>Barang</th>
                                <th style="width: 100px;">Harga</th>
                                <th style="width: 100px;">Jumlah</th>
                                <th style="width: 30px;">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>ASD123</td>
                                <td>Nama Barang</td>
                                <td>Rp. 1000 </td>
                                <td>1 Pcs</td>
                                <td>
                                    <button style="width: 30px; height: 30px;"
                                        class="badge bg-danger border-0 mr-1">
                                    <span class="fa fa-times">

                                    </span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>ASD123</td>
                                <td>Nama Barang</td>
                                <td>Rp. 2000 </td>
                                <td>1 Pcs</td>
                                <td>
                                    <button style="width: 30px; height: 30px;"
                                        class="badge bg-danger border-0 mr-1">
                                    <span class="fa fa-times">

                                    </span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>ASD123</td>
                                <td>Nama Barang</td>
                                <td>Rp. 3000 </td>
                                <td>1 Pcs</td>
                                <td>
                                    <button style="width: 30px; height: 30px;"
                                        class="badge bg-danger border-0 mr-1">
                                    <span class="fa fa-times">

                                    </span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>ASD123</td>
                                <td>Nama Barang</td>
                                <td>Rp. 4000 </td>
                                <td>1 Pcs</td>
                                <td>
                                    <button style="width: 30px; height: 30px;"
                                        class="badge bg-danger border-0 mr-1">
                                    <span class="fa fa-times">

                                    </span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between border-top ">
                        <div class="card-footer bg-white rounded">
                            <h3 class="card-title">Total Harga :</h3>
                        </div>
                        <div class="card-footer bg-white rounded">
                            <h3 class="card-title text-bold">Rp. 999999</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4 pb-4">

                <a href="{{ route('pembelian.kembalian') }}"><button class="bg-primary border-0 rounded" style="width: 200px; height: 50px;"><span>Check Out</span></button></a>

        </div>

@endsection
