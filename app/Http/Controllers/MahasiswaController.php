<?php

namespace App\Http\Controllers;

use App\Repository\EloquentMahasiswaRepository;
use App\Http\Request\MhsRequest;

class MahasiswaController extends Controller
{
    public $mahasiswa;

    public function __construct(EloquentMahasiswaRepository $imahasiswa){

        $this->mahasiswa = $imahasiswa;
    }

    public function index(){
        //
        $mahasiswas = $this->mahasiswa->getAllMahasiswa();
        return view('mahasiswa.index', ['title'=>'Home'])->with('mahasiswas', $mahasiswas);
    }

    public function store(MhsRequest $request){
        //
        // return 1;
        $validateData = $request->validated();

        $this->mahasiswa->createMahasiswa($validateData);
        return redirect('/mahasiswas')->with('alert', 'Berhasil Ditambahkan!');
        
    }

    public function view($id){
        //
        $mahasiswas = $this->mahasiswa->get($id);
        return view('mahasiswa.edit')-> with('mahasiswas', $mahasiswas);
        
    }

<<<<<<< HEAD
        $this->mahasiswa->createMahasiswa($data);
        
        return redirect('/mahasiswas');
=======
    public function update($id, MhsRequest $request){
        //insert update
        $validateData= $request->validated(); 

        $this->mahasiswa->editMahasiswa($id, $validateData);
        return redirect('/mahasiswas')->with('alert','Berhasil Di Update!');

    }

    public function deleted($id){
        //
        $this->mahasiswa->deleteMahasiswa($id);
        // return redirect()->route('mahasiswa.index')->with('alert','Data Di Hapus!');
        return redirect('/mahasiswas')->with('alert-delete','Data Di Hapus!');
>>>>>>> main_testing1
    }
}
