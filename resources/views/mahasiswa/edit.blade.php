@extends('layout.app')

@section('content2')

    <body class="bg-light">
        <main class="container">
            <form action="{{ route('mahasiswas.update', $mahasiswas->id) }}" method='PUT' enctype="multipart/form-data">
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
                            <input type="number" class="form-control" name='nim' id="nim" value="{{ $mahasiswas->nim }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='name' id="name" value="{{ $mahasiswas->name }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='fakultas' id="fakultas" value="{{ $mahasiswas->fakultas }}">
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