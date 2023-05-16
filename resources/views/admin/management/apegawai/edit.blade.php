@extends('layouts.admin')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Akun</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Akun</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('admin.management.apegawai.update', $dtPegawai->id) }}" method="post">
                {{ csrf_field() }}
                @method('PATCH')
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $dtPegawai->name }}" placeholder="Masukan Nama">
                  </div>
                  <div class="form-group">
                    <label for="role">Role</label>
                    <select class="select2 form-control" name="roles">
                    @foreach($roles as $role)
                    <option value="{{ $role->name }}"> {{$role->name}}</option>
                    @endforeach
                    </select>
                </div>
                  <div class="form-group">
                    <label for="nohp">No Hp</label>
                    <input type="text" class="form-control" name="nohp" id="nohp" value="{{ $dtPegawai->nohp }}" placeholder="No Hp">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $dtPegawai->email }}" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="{{ $dtPegawai->password }}" placeholder="Password">
                  </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
@endsection
