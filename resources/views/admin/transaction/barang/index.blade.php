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
                        <li class="breadcrumb-item active">Transaksi</li>
                        <li class="breadcrumb-item active">Barang</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        {{-- <div class="row m-2">
        <div class="mb-2">
            <a href="{{ route('barang.create') }}">
                <button style="width: 150px; height: 50px;" class="bg-success border-0 rounded shadow">
                    <span class="fa fa-plus">
                    </span>
                    Barang Baru
                </button>
            </a>
        </div>
    </div> --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Database Barang</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th style="width: 50px;">ID</th>
                                        <th>Nama Barang</th>
                                        <th style="width: 100px;">Harga Jual</th>
                                        <th style="width: 100px;">Harga Beli</th>
                                        <th style="width: 100px;">Stock Barang</th>
                                        <th style="width: 200px;">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dtbarang as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nama_barang }}</td>
                                            <td>{{ $item->harga_jual }}</td>
                                            <td>{{ $item->harga_beli }}</td>
                                            <td>{{ $item->stok_barang }}</td>
                                            <td>
                                                <!--
                                                    <div>
                                                <a href="{{ route('barang.view', $item->id) }}">
                                                {{-- <button class="bg-transparent border-2 border-info text-info rounded text-center" style="width: 35px; height: 35px;"><span class="fa fa-eye">
                                                </span>

                                            </button> --}}
                                                <button class="btn btn-block btn-success">View
                                                </button>
                                                </a>
                                            </div>
                                        -->

                                                <div>
                                                    <a href="{{ route('barang.edit', $item->id) }}">
                                                        {{-- <button class="bg-transparent border-2 border-warning text-warning rounded" style="width: 35px; height: 35px;"><span class="far fa-edit">
                                                    </span>
                                                </button> --}}
                                                        <button class="btn btn-block btn-success mb-1">Edit
                                                        </button>
                                                    </a>
                                                </div>

                                                <div>
                                                    <form action="{{ route('barang.destroy', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        {{-- <button type="submit" class="bg-transparent border-2 border-danger text-danger rounded" style="width: 35px; height: 35px;"><span class="fa fa-times">
                                                    </span>
                                                </button> --}}
                                                        <button type="submit" class="btn btn-block btn-success">Delete
                                                        </button>
                                                    </form>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
    </section>
@endsection

@section('script')
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
@endsection
