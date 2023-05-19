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
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Action button  -->
    <div class="content">
        <div class="row m-2">
            <div>
                <button style="width: 150px; height: 50px;" class="bg-danger border-0 rounded m4-2 shadow" type="">
                    <span>Cancel</span>
                </button>
                <button style="width: 150px; height: 50px;" class="btn-success border-0 rounded mx-2 shadow" type="">
                    <span>Barang Baru</span>
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
    <div class="content mt-3 ">
        <div class="">
            <div class="d-flex justify-content-between">
                <div class="col">
                    <div class="d-flex form-group">
                        <select class="select2" style="width: 100%;  height: 100%">
                            <option>Pilihan 1</option>
                            <option>Pilihan 2</option>
                            <option>Pilihan 3</option>
                            <option>Pilihan 4</option>
                        </select>
                        <input type="text" placeholder="Jumlah" class="rounded border border-0 text-center mx-2" style="width: 100px" >
                        <button class="btn-success btn-lg border-0" style="height: 100%; width: 100px">
                            <span>Tambah</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content m-2">
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
                            <td class="text-center">
                                <button style="width: 30px; height: 30px;" class="badge bg-danger border-0 mr-1">
                                    <span class="fa fa-times">

                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>ASD123</td>
                            <td>Nama Barang</td>
                            <td>Rp. 1000 </td>
                            <td>1 Pcs</td>
                            <td class="text-center">
                                <button style="width: 30px; height: 30px;" class="badge bg-danger border-0 mr-1">
                                    <span class="fa fa-times">

                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>ASD123</td>
                            <td>Nama Barang</td>
                            <td>Rp. 1000 </td>
                            <td>1 Pcs</td>
                            <td class="text-center">
                                <button style="width: 30px; height: 30px;" class="badge bg-danger border-0 mr-1">
                                    <span class="fa fa-times">

                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>ASD123</td>
                            <td>Nama Barang</td>
                            <td>Rp. 1000 </td>
                            <td>1 Pcs</td>
                            <td class="text-center">
                                <button style="width: 30px; height: 30px;" class="badge bg-danger border-0 mr-1">
                                    <span class="fa fa-times">

                                    </span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between border-top ">
                    <div class="card-footer bg-transparent rounded">
                        <h3 class="card-title">Total Harga :</h3>
                    </div>
                    <div class="card-footer bg-transparent rounded">
                        <h3 class="card-title text-bold">Rp. 999999</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-4 pb-4">

        <a href="{{ route('penjualan.kembalian') }}"><button class="btn btn-primary border-0 rounded shadow"
                style="width: 200px; height: 50px;"><span>Check Out</span></button></a>

    </div>
@endsection

@section('script')
    <script>
        $(function() {
            $('.select2').select2()
        });
    </script>
@endsection
