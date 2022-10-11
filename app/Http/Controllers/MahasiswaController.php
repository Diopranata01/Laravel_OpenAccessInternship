<?php

namespace App\Http\Controllers;

use App\Repository\IMahasiswaRepository;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public $mahasiswa;

    public function __construct(IMahasiswaRepository $imahasiswa)
    {
        $this->mahasiswa = $imahasiswa;
    }

    public function index(){
        
        $mahasiswas = $this->mahasiswa->getAllMahasiswa();

        return view('mahasiswa.index')->with('mahasiswas', $mahasiswas);
    }

    public function store(Request $request){
        
        $request -> validate([
            'nim' => 'required',
            'name' => 'required',
            'fakultas' => 'required'
        ]);

        //ambil data dari index, validasi, dan createMahasiswa
        $data= $request->all();

        $this->mahasiswa->createMahasiswa($data);
        
        return redirect('/mahasiswas');
    }
}
