@extends('layouts.admin')


@section('content')
    <div class="content-header">

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                        @foreach ($dtBarang as $item )
                                @if ($loop->first)
                        <div class="info-box-content">
                            <span class="info-box-text">Total Stok Barang</span>
                            <span class="info-box-number">
                                {{array_sum($item->pluck('stok_barang')->toArray())}}
                                <small></small>
                            </span>
                        </div>
                                @endif
                        @endforeach
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Barang Terbaru</span>
                            <span class="info-box-number">
                                @foreach ($dtPembelian as $item )
                                @if ($loop->first)
                                @foreach ($item as $item2)

                                {{$item2->nama_barang}}

                                @endforeach
                                @endif
                                @endforeach

                            </span>
                        </div>

                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Penjualan</span>
                            <span class="info-box-number">Rp.@php
                                $tpenjualanarr = [];
                                foreach ($dtPenjualan as $item) {
                                foreach ($item as $item2) {
                                    array_push($tpenjualanarr, $item2->harga_jual);
                                }
                                }
                                @endphp
                                {{ array_sum($tpenjualanarr) }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Admin / Pegawai</span>
                            <span class="info-box-number">{{count($dtUser)}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Penjualan</h5>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <div class="btn-group">

                                </div>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <!-- ./card-body -->
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                        <br>
                                        <h5 class="description-header">Rp.@php
                                            $penjualanarr = [];
                                            foreach ($dtPenjualan as $item) {
                                            foreach ($item as $item2) {
                                                array_push($penjualanarr, $item2->harga_jual);
                                            }
                                            }
                                            @endphp
                                            {{ array_sum($penjualanarr) }}</span></h5>
                                        <span class="description-text">Penjualan</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                        <br>
                                        <h5 class="description-header">Rp.@php
                                            $tpembelianarr = [];
                                            foreach ($dtPembelian as $item) {
                                              foreach ($item as $item2) {
                                                array_push($tpembelianarr, $item2->total_harga);
                                              }
                                            }
                                            @endphp
                                            {{ array_sum($tpembelianarr) }}</h5>
                                        <span class="description-text">Total Pembelian Barang</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                        <br>
                                        <h5 class="description-header">Rp.
                                            @php
                                            $tkeuntungan = [];
                                            foreach ($dtPenjualan as $item) {
                                            foreach ($item as $item2) {
                                                array_push($tkeuntungan, $item2->quantity);
                                            }
                                            }
                                            @endphp
                                            {{ array_sum($penjualanarr) - array_sum($tpembelianarr)  }}
                                            </h5>
                                        <span class="description-text">Total Keuntungan</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block">
                                        <br>
                                        <h5 class="description-header">@php
                                            $sbarangterjualarr = [];
                                            foreach ($dtPenjualan as $item) {
                                            foreach ($item as $item2) {
                                                array_push($sbarangterjualarr, $item2->quantity);
                                            }
                                            }
                                            @endphp
                                            {{ array_sum($sbarangterjualarr) }}</h5>
                                        <span class="description-text">Stok Barang Terjual</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-8">

                    <!-- /.card -->
                    <div class="row">



                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- TABLE: LATEST ORDERS -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Produk yang Baru Terjual</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>ID Transaksi</th>
                                            <th>Barang</th>
                                            <th>Jumlah</th>
                                            <th>Total Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dtPenjualan as $item)
                                            @foreach ($item as $item2)
                                                @if ($loop->first)
                                        <tr>
                                            <td>SMNTP-{{$item2->t_penjualans_id}}</td>
                                            <td>{{$item2->nama_barang}}</td>
                                            <td>{{$item2->quantity}}</td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                    Rp.{{$item2->harga_jual}}
                                                </div>
                                            </td>
                                        </tr>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">


                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->

                <div class="col-md-4">
                    <!-- Info Boxes Style 2 -->

                    <!-- /.info-box -->



                    <!-- PRODUCT LIST -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Barang yang Baru Masuk</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                <li class="item">
                                    @foreach ($dtPembelian as $item)
                                        @foreach ($item as $item2)

                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">{{$item2->nama_barang}}
                                            <span class="badge badge-warning float-right">Rp.{{$item2->harga_beli}}</span></a>
                                        <span class="product-description">
                                            {{$item2->quantity}} Stok
                                        </span>
                                    </div>
                                </li>

                                        @endforeach
                                    @endforeach
                                <!-- /.item -->

                                <!-- /.item -->
                            </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">

                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
@endsection
