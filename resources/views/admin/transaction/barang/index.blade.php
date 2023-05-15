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
                        <li class="breadcrumb-item active">Barang</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Barang / Stok Barang</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th style="width: 75px;">ID Barang</th>
                                        <th>Nama Barang</th>
                                        <th style="width: 100px;">Harga Barang</th>
                                        <th style="width: 100px;">Stock Barang</th>
                                        <th style="width: 50px;">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>003727</td>
                                        <td>Indomie Goreng</td>
                                        <td>Rp. 4.000</td>
                                        <td>24</td>
                                        <td>
                                            {{-- View Stock Button  --}}
                                            <button class="bg-success border-0 rounded" style="width: 30px; height: 30px;">
                                                <a href="{{ route('barang.view') }}"><span class="fa fa-eye">
                                                </span></a>

                                            </button>
                                            {{-- Edit Stock Button  --}}
                                            <button class="bg-secondary border-0 rounded"
                                                style="width: 30px; height: 30px;">
                                                <a href="{{ route('barang.edit') }}"><span class="far fa-edit">
                                                </span></a>
                                            </button>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>003728</td>
                                        <td>Indomie Ayam Bawang</td>
                                        <td>Rp. 4.000</td>
                                        <td>24</td>
                                        <td>
                                            {{-- View Stock Button  --}}
                                            <button class="bg-success border-0 rounded" style="width: 30px; height: 30px;">
                                                <a href="{{ route('barang.view') }}"><span class="fa fa-eye">
                                                </span></a>

                                            </button>
                                            {{-- Edit Stock Button  --}}
                                            <button class="bg-secondary border-0 rounded"
                                                style="width: 30px; height: 30px;">
                                                <a href="{{ route('barang.edit') }}"><span class="far fa-edit">
                                                </span></a>
                                            </button>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
    </section>
@endsection
