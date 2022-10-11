@extends('layout.app')

@section('content')

<body class="bg-light">
    <main class="container">
       <!-- AWAL FORM -->
            <form action='' method='POST' enctype="multipart/form-data">
                <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <div class="mb-3 row">
                        <div class="card-header text-dark border-3 border-bottom mb-4 mt-2">
                            <h3 class="ms-2 mb-4">
                                Input Data Mahasiswa
                            </h3>
                        </div>
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name='nim' id="nim">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='nama' id="nama">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='fakultas' id="fakultas">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-6 m-3 ms-5 d-flex justify-content-end"><button type="submit" class="btn btn-primary " name="submit">SIMPAN</button></div>
                    </div>
                </form>
        </div>
        <!-- AKHIR FORM -->
        
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                {{-- <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div> --}}
                
                <!-- TOMBOL TAMBAH DATA -->
{{--                     <div class="pb-3">
                  <a href='' class="btn btn-primary">+ Tambah Data</a>
                </div> --}}
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">NIM</th>
                            <th class="col-md-4">Nama</th>
                            <th class="col-md-2">Jurusan</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-light">
                        @foreach($mahasiswas as $mahasiswa)
                        <tr>
                            <td>{{ $mahasiswa->id }}</td>
                            <td>{{ $mahasiswa->name }}</td>
                            <td>{{ $mahasiswa->nim }}</td>
                            <td>{{ $mahasiswa->fakultas }}</td>
                            <td>
                                <a href='' class="btn btn-warning btn-sm">Edit</a>
                                <a href='' class="btn btn-danger btn-sm">Del</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
               
          </div>
          <!-- AKHIR DATA -->
    </main>
  </body>
  
@endsection