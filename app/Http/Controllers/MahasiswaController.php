<?php

namespace App\Http\Controllers;

use App\Repository\IMahasiswaRepository;
use Illuminate\Http\Request;
use SweetAlert;

class MahasiswaController extends Controller
{
    public $mahasiswa;

    public function __construct(IMahasiswaRepository $imahasiswa){

        $this->mahasiswa = $imahasiswa;
    }

    public function index(){
        //
        $mahasiswas = $this->mahasiswa->getAllMahasiswa();
        return view('mahasiswa.index')->with('mahasiswas', $mahasiswas);
    }

    public function store(Request $request){
        //
        $request -> validate([
            'nim' => 'required|regex:/^([0-9]*)$/|min:10',
            'name' => 'required|regex:/^([A-Za-z ]*)$/|min:10',
            'fakultas' => 'required|regex:/^([A-Za-z ]*)$/|min:3'
        ]);

        //ambil data dari index, validasi, dan createMahasiswa
        $data= $request->all();

        $this->mahasiswa->createMahasiswa($data);
        return redirect('/mahasiswas')->with('alert', 'Berhasil Ditambahkan!');
        
    }

    public function view($id){
        //
        $mahasiswas = $this->mahasiswa->get($id);
        return view('mahasiswa.edit')-> with('mahasiswas', $mahasiswas);
        
    }

    public function update($id, Request $request){
        //insert update
        $request -> validate([
            'nim' => 'required|regex:/^([0-9]*)$/|min:10',
            'name' => 'required|regex:/^([A-Za-z ]*)$/|min:6',
            'fakultas' => 'required|regex:/^([A-Za-z ]*)$/|min:3'
        ]);

        $data= $request->all();

        $this->mahasiswa->editMahasiswa($id, $data);
        return redirect('/mahasiswas')->with('alert','Berhasil Di Update!');

    }

    public function deleted($id){
        //
        $this->mahasiswa->deleteMahasiswa($id);
        // return redirect()->route('mahasiswa.index')->with('alert','Data Di Hapus!');
        return redirect('/mahasiswas')->with('alert-delete','Data Di Hapus!');
    }
}
