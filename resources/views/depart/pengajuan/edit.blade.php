@extends('depart.layout')

@section('title')
Edit Pengajuan
@endsection

@section('konteng')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="profile-departemen.html">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <form action="{{ route('pengajuan.dospem', $data->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"src="dist/img/user8-128x128.jpg"alt="User profile picture">
                    </div>
                        <h3 class="profile-username text-center">{{ $data->nama }}</h3>

                        <p class="text-muted text-center">Software Engineer</p>
                        <strong><i class="fas fa-book mr-1"></i> NIM</strong>

                        <p class="text-muted">{{ $data->mahasiswa['NIM'] }}</p>

                        <hr>

                        <strong><i class="fas fa-mail-bulk mr-1"></i> Telepon</strong>

                        <p class="text-muted">{{ $data->mahasiswa['telepon'] }}</p>

                        <hr>

                        <strong><i class="fas fa-mail-bulk mr-1"></i> Pengalaman</strong>

                        <p class="text-muted">{{ $data->mahasiswa['pengalaman'] }}</p>

                        <hr>

                        <strong><i class="fas fa-pencil-alt mr-1"></i> Jurusan</strong>

                        <p class="text-muted"> {{ $data->jurusan['jurusan'] }}</p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Skill</strong>

                        <p class="text-muted">{{ $data->skill['skill'] }}</p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Jenis Kelamin</strong>

                        <p class="text-muted">{{ $data->mahasiswa['jenis_kelamin'] }}</p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Tanggal Lahir</strong>

                        <p class="text-muted">{{ $data->mahasiswa['tgl_lahir'] }}</p>
                    </div>
                </div>
              <!-- /.card-body -->
            </div>
          
            <div class="card col-md-9">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Dosen Pembimbing</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body">
                        <div class="form-group">
                          <label>Dosen Pembimbing</label>
                          <select class="form-control" name="dosen_id">
                            <option value="">- Pilih Dosen -</option>
                            @foreach ($dosen as $dos)
                            <option value="{{ $dos->id }}">{{ $dos->nama }}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                  <!-- /.card-body -->
          
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <div class="card-header border-transparent">
                <h3 class="card-title">Lowongan Diajukan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th class="text-center">Nomor</th>
                      <th class="text-center">Nama</th>
                      <th class="text-center">Deskripsi</th>
                      <th class="text-center">Lokasi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><a href="#">1</a></td>
                      <td class="text-center">{{ $data->lowongan['nama'] }}</td>
                      <td class="text-center">{{ $data->lowongan['deskripsi'] }}</td>
                      <td class="text-center">{{ $data->lowongan['lokasi'] }}</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
</div>
<!-- /.content-wrapper -->
@endsection