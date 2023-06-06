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
                        <li class="breadcrumb-item active">
                            SMNTOJUAL2023-{{ $transaksi->id }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Action button  -->
    <div class="content">
        <div class="row m-2">
            <div>
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
                        SMNTOJUAL2023-{{ $transaksi->id }}
                    </span>
                </div>
                <div>
                    <span class="text-bold text-lg">
                        {{ $transaksi->created_at->format('l, d-m-Y') }}
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
                    <form class="d-flex form-group" action="{{ route('tambahitems') }}" method="POST">
                        @csrf
                        <input type="hidden" name="t_penjualans_id" value="{{ $transaksi->id }}">
                        <select class="select2" style="width: 100%;  height: 100%" name="barang_id" required>
                            <option value="" disabled selected>Pilih Barang</option>
                            @foreach ($dtbarang as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_barang }}</option>
                            @endforeach
                        </select>
                        <input type="number" placeholder="Jumlah" class="rounded border-0 text-center mx-2"
                            style="width: 100px" name="quantity" required>
                        <button class="btn-success btn-lg border-0" style="height: 100%; width: 100px">
                            <span>Tambah</span>
                        </button>
                    </form>
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
                            <th style="width: 175px;">ID Barang</th>
                            <th>Barang</th>
                            {{-- Harga Jual x Jumlah Baramg --}}
                            <th style="width: 100px;">Harga Jual</th>
                            <th style="width: 100px;">Jumlah</th>
                            {{-- <th style="width: 30px;">Option</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $n = 1;
                        @endphp
                        @foreach ($bpenjualan as $item)
                            <tr>
                                <td>{{ $n++ }}</td>
                                <td>SMNTOBRG2023-{{ $item->barang_id }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->harga_jual }}</td>
                                <td>{{ $item->quantity }}</td>
                                {{-- <td></td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-between border-top ">
                    <div class="card-footer bg-transparent rounded">
                        <h3 class="card-title">Total Harga :</h3>
                    </div>
                    <div class="card-footer bg-transparent rounded">
                        <h3 class="card-title text-bold"> {{ array_sum($total_harga) }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-4 pb-4">

        <a href="{{ route('penjualan.kembalian.show', $transaksi->id) }}"><button class="btn btn-primary border-0 rounded shadow"
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
