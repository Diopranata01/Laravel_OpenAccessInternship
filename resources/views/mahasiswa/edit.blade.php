@extends('layout.app')

@section('content2')

    <body class="bg-light">
        <main class="container">
            <form action="{{ route('mahasiswas.update', $mahasiswas->id) }}" method='POST' enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <div class="mb-3 row">
                        <div class="card-header text-dark border-3 border-bottom mb-2 mt-2 col">
                            <div class="row">
                                <h3 class="ms-2 mb-3 col-10">
                                    Edit Data Mahasiswa '{{ $mahasiswas->nim }}'
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control @error('nim') is-invalid @enderror" name='nim' id="nim" value="{{ $mahasiswas->nim }}">
                            @error('nim')
                                <div class="alert alert-danger">Silahkan masukan! *( terdiri dari angka '1-9', minimal 10 karakter, dan tidak terdiri dari
                                    karakter spesial!)</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name='name' id="name" value="{{ $mahasiswas->name }}">
                            @error('name')
                                <div class="alert alert-danger">Silahkan masukan! *( terdiri dari huruf besar 'A-Z', dan huruf kecil 'a-z', minimal 6 karakter, dan tidak terdiri dari
                                    karakter spesial!)</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('fakultas') is-invalid @enderror" name='fakultas' id="fakultas" value="{{ $mahasiswas->fakultas }}">
                            @error('fakultas')
                                <div class="alert alert-danger">Silahkan masukan! *( terdiri dari huruf besar 'A-Z', dan huruf kecil 'a-z', minimal 3 karakter, dan tidak terdiri dari
                                    karakter spesial!)</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-6 m-3 ms-5 d-flex justify-content-end"><button type="submit" class="btn btn-primary " name="submit">Perbarui</button></div>
                        <div class="col-6 m-3 ms-5 d-flex justify-content-end"><a href='/mahasiswas'class="btn btn-success">Kembali</a></div>
                    </div>
                </div>
            </form>
        </main>
    </body>

@endsection