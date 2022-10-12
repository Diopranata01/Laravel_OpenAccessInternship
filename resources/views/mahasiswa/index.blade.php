{{-- using the layout in pagess --}}
@extends('layout.app')

@section('content')

<body class="bg-light">

    <main class="container">
       <!-- AWAL FORM -->
            @if (session('alert'))
                <div class="alert alert-success m-3">
                    {{ session('alert') }}
                </div>
            @elseif(session('alert-delete'))
                <div class="alert alert-danger m-3">
                    {{ session('alert-delete') }}
                </div>
           @endif
            <form action="{{ route('mahasiswas.store') }}" method='POST' enctype="multipart/form-data">
                @csrf

                <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <div class="mb-3 row">
                        <div class="card-header text-dark border-3 border-bottom mb-4 mt-2">
                            <h3 class="ms-2 mb-4">
                                Input Data Mahasiswa
                            </h3>
                        </div>
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control @error('nim') is-invalid @enderror" name='nim' id="nim">
                            @error('nim')
                                <div class="alert alert-danger">Silahkan isi!</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name='name' id="name">
                            @error('name')
                                <div class="alert alert-danger">Silahkan isi!</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('fakultas') is-invalid @enderror" name='fakultas' id="fakultas">
                            @error('fakultas')
                                <div class="alert alert-danger">Silahkan isi!</div>
                            @enderror
                            
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-6 m-3 ms-5 d-flex justify-content-end"><button type="submit" class="btn btn-primary " name="submit">SIMPAN</button></div>
                    </div>
                </div>
            </form>
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
                {{--<div class="pb-3">
                  <a href='' class="btn btn-primary">+ Tambah Data</a>
                </div> --}}
          
                <table class="table table-striped">
                    <div class="card-header text-dark border-3 border-bottom mb-4 mt-2">
                        <h3 class="ms-2 mb-4">
                            Data Mahasiswa
                        </h3>
                    </div>
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">NIM</th>
                            <th class="col-md-4">Nama</th>
                            <th class="col-md-2">Fakultas</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-light">
                        @foreach($mahasiswas as $key => $mahasiswa)
                        <tr>
                            <td>{{ $mahasiswa->id }}.</td>
                            <td>{{ $mahasiswa->name }}</td>
                            <td>{{ $mahasiswa->nim }}</td>
                            <td>{{ $mahasiswa->fakultas }}</td>
                            <td>
                                <a href='{{ route('mahasiswas.view', $mahasiswa->id)}}' class="btn btn-primary btn-sm">Edit</a>
                                <a href='{{ route('mahasiswas.delete', $mahasiswa->id)}}' class="btn btn-warning btn-sm text-dark">Del</a>
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