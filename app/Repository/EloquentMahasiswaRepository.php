<?php
namespace App\Repository;

use App\Models\Mahasiswa;

class EloquentMahasiswaRepository implements MahasiswaRepository{

    public function getAllMahasiswa(){

        //changes 1, get the db into the repository Mahasiswa Model
        return Mahasiswa::latest()-> get();
    }

    public function createMahasiswa(array $data){

        // bisa sprt ini $mahasiswa = new Mahasiswa();
        Mahasiswa::insert([
            'nim' => $data['nim'], //request dari store function?
            'name' => $data['name'],
            'fakultas' => $data['fakultas']
        ]);

    }

    public function get($id){
        return Mahasiswa::find($id);
    }

    public function editMahasiswa($id, $data){

        $mahasiswa = Mahasiswa::find($id);

        $mahasiswa->name = $data['name'];
        $mahasiswa->nim = $data['nim'];
        $mahasiswa->fakultas = $data['fakultas'];

        return $mahasiswa->save();
        
    }

    public function deleteMahasiswa($id){
        return Mahasiswa::find($id)->delete();
    }

}
