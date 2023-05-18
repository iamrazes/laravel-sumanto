@extends('layouts.admin')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pegawai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pegawai</li>
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
                <h3 class="card-title">Data Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Tanggal Dibuat</th>
                    <th>Nama</th>
                    <th>No Telepon</th>
                    <th>Email</th>
                    <th>Status</th>

                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($dtPegawai as $item)
                  <tr>

                    <td>{{$item->created_at}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->nohp}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        <a href="{{ route('admin.management.apegawai.edit', $item->id) }}">
                        <button type="button" class="btn btn-block btn-success mb-1">Edit</button>
                        </a>
                        <form action="{{ route('admin.management.apegawai.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-block btn-success">Delete
                            </button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                  </tfoot>
                </table>
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
@endsection
