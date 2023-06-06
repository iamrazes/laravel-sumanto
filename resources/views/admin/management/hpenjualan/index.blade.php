@extends('layouts.admin')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan Keuangan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Laporan Keuangan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID Penjualan</th>
                    <th>Tanggal Penjualan</th>
                    <th>Pegawai</th>
                    <th>Jumlah Barang</th>
                    <th>Total Pembelian</th>
                    <th>Harga Bayar</th>
                    <th>Kembalian</th>

                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($dtPenjualan as $item)
                        @foreach ($item as $item2)
                            @if ($loop->first)
                      <tr>
                        <td>SMNTPEN-{{$item2->t_penjualans_id}}</td>
                        <td>{{$item2->created_at}}</td>
                        <td>{{$item2->transaksi->kasir->name}}</td>
                        <td>{{$item2->quantity}}</td>
                        <td>{{$item2->total_harga}}</td>
                        <td>{{$item2->harga_bayar}}</td>
                        <td>{{$item2->kembalian}}
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#trx{{$item[0]->t_penjualans_id }}">
                            detail
                          </button>
                        </td>
                      </tr>
                            @endif
                        @endforeach
                    @endforeach
                <tr>
                    @php
                    $arr = [];
                    foreach ($dtPenjualan as $item) {
                      foreach ($item as $item2) {
                        array_push($arr, $item2->harga_jual);
                      }
                    }
                    @endphp
                    <td >Total: {{ array_sum($arr) }}</td>
                    <td > </td>
                    <td > </td>
                    <td > </td>
                    <td > </td>
                    <td > </td>
                    <td > </td>
                  </tr>
                </tbody>
                </table>

                @foreach ($dtPenjualan as $item)
                  <div class="modal fade" id="trx{{ $item[0]->t_penjualans_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          @foreach ($item as $item2)

    <p class="m-0">ID : {{$item2->t_penjualans_id}}</p>
    <p class="m-0">Tgl : {{$item2->created_at}}</p>
    <p class="m-0">Pegawai : {{$item2->transaksi->kasir->name}}</p>
    <p class="m-0">Nama Barang : {{$item2->barang->nama_barang}}</p>
    <p class="m-0">Jumlah : {{$item2->quantity}}</p>
    <p class="m-0">Total Harga : {{$item2->harga_jual}}</p>
    <p class="m-0">Total Bayar : {{$item2->harga_bayar}}</p>
    <p class="m-0">Kembalian : {{$item2->kembalian}}</p>
    <hr>

                        @if ($loop->first)
                        @endif
                      @endforeach
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
@endsection

@section('script')
<script>
    document.querySelector('title').innerText = "Laporan Penjualan, tanggal {{ now()->format('d m Y') }}"
  </script>
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
