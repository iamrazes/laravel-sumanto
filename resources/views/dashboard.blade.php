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

                        <div class="info-box-content">
                            <span class="info-box-text">Total Stok Barang</span>
                            <span class="info-box-number">
                                40
                                <small></small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Stok Barang Baru Minggu ini</span>
                            <span class="info-box-number">30</span>
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
                            <span class="info-box-text">Total Penjualan Mingguan</span>
                            <span class="info-box-number">Rp.5.000.000</span>
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
                            <span class="info-box-number">1</span>
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
                            <h5 class="card-title">Penjualan Bulanan</h5>

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
                                        <span class="description-percentage text-success"><i class="fas fa-caret-up"></i>
                                            17%</span>
                                        <h5 class="description-header">Rp.5.000.000</h5>
                                        <span class="description-text">Penjualan Bulan ini</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                        <br>
                                        <h5 class="description-header">Rp.3.000.000</h5>
                                        <span class="description-text">Total Pembelian Barang</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-success"><i class="fas fa-caret-up"></i>
                                            40%</span>
                                        <h5 class="description-header">Rp.2.000.000</h5>
                                        <span class="description-text">Total Keuntungan</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block">
                                        <br>
                                        <h5 class="description-header">1200</h5>
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
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Tepung</td>
                                            <td><span class="badge badge-success">30</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">Rp.30.000
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Tepung</td>
                                            <td><span class="badge badge-success">30</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">Rp.30.000
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Tepung</td>
                                            <td><span class="badge badge-success">30</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">Rp.30.000
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Tepung</td>
                                            <td><span class="badge badge-success">30</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">Rp.30.000
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Tepung</td>
                                            <td><span class="badge badge-success">30</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">Rp.30.000
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Tepung</td>
                                            <td><span class="badge badge-success">30</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">Rp.30.000
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Tepung</td>
                                            <td><span class="badge badge-success">30</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">Rp.30.000
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">

                            <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">History
                                Transaksi</a>
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

                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">Tepung
                                            <span class="badge badge-warning float-right">Rp.30.000</span></a>
                                        <span class="product-description">
                                            30 Stok
                                        </span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">

                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">Tepung
                                            <span class="badge badge-warning float-right">Rp.30.000</span></a>
                                        <span class="product-description">
                                            30 Stok
                                        </span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">

                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">Tepung
                                            <span class="badge badge-warning float-right">Rp.30.000</span></a>
                                        <span class="product-description">
                                            30 Stok
                                        </span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">

                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">Tepung
                                            <span class="badge badge-warning float-right">Rp.30.000</span></a>
                                        <span class="product-description">
                                            30 Stok
                                        </span>
                                    </div>
                                </li>
                                <!-- /.item -->
                            </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">
                            <a href="javascript:void(0)" class="uppercase">Lihat Semua Produk yang Baru</a>
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
