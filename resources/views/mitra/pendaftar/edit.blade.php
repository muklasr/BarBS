@extends('mitra.layout')

@section('title')
Edit Pendaftar
@endsection

@section('konteng')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Pendaftar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="profile-departemen.html">Home</a></li>
              <li class="breadcrumb-item active">Edit Pendaftar</li>
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
                    <form action="{{ route('pendaftar.approval', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"src="dist/img/user8-128x128.jpg"alt="User profile picture">
                                </div>
                                    <h3 class="profile-username text-center">{{ $data->nama_mhs }}</h3>

                                    <p class="text-muted text-center">Software Engineer</p>
                                    <strong><i class="fas fa-book mr-1"></i> NIM</strong>

                                    <p class="text-muted">{{ $data->NIM }}</p>

                                    <hr>

                                    <strong><i class="fas fa-mail-bulk mr-1"></i> Telepon</strong>

                                    <p class="text-muted">{{ $data->telepon_mhs }}</p>

                                    <hr>

                                    <strong><i class="fas fa-mail-bulk mr-1"></i> Pengalaman</strong>

                                    <p class="text-muted">{{ $data->pengalaman }}</p>

                                    <hr>

                                    <strong><i class="fas fa-pencil-alt mr-1"></i> Jurusan</strong>

                                    <p class="text-muted"> {{ $data->jurusan['jurusan'] }}</p>

                                    <hr>

                                    <strong><i class="far fa-file-alt mr-1"></i> Skill</strong>

                                    <p class="text-muted">{{ $data->skill['skill'] }}</p>

                                    <hr>

                                    <strong><i class="far fa-file-alt mr-1"></i> Jenis Kelamin</strong>

                                    <p class="text-muted">{{ $data->jenis_kelamin }}</p>

                                    <hr>

                                    <strong><i class="far fa-file-alt mr-1"></i> Tanggal Lahir</strong>

                                    <p class="text-muted">{{ $data->tgl_lahir }}</p>
                                </div>
                            </div>
                    <!-- /.card-body -->
                        </div>
                
                        <div class="card col-md-9">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Waktu Magang</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Tanggal Mulai</label>
                                        <input type="date" class="form-control" name="tgl_mulai"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Selesai</label>
                                        <input type="date" class="form-control" name="tgl_selesai"/>
                                    </div>
                                    <input type="hidden" class="form-control" name="approval" value="1"/>
                                </div>
                                <div class="card-header">
                                    <h3 class="card-title">Pilih Supervisor</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Supervisor</label>
                                        <select class="form-control" name="spv_id">
                                            <option value="">- Pilih Supervisor -</option>
                                            @foreach ($spv as $spv)
                                            <option value="{{ $spv->id }}">{{ $spv->nama_spv }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
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
                                                <td class="text-center">{{ $data->nama_low }}</td>
                                                <td class="text-center">{{ $data->deskripsi }}</td>
                                                <td class="text-center">{{ $data->lokasi }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary-m2">Terima</button>
                                        <button type="submit" class="btn btn-danger-m2">Tolak</button>
                                    </div>
                                </div>
                            <!-- /.table-responsive -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->
@endsection