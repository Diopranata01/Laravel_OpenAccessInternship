<?php
namespace App\Repository;

use App\Models\Mahasiswa;

class MahasiswaRepository implements IMahasiswaRepository{

    public function getAllMahasiswa(){

        //changes 1, get the db into the repository Mahasiswa Model
        return Mahasiswa::latest()-> get();
    }

    public function createMahasiswa(array $data){

        // bisa sprt ini $mahasiswa = new Mahasiswa();
        Mahasiswa::insert([
            'nim' => $data['nim'], //request dari store function
            'name' => $data['name'],
            'fakultas' => $data['fakultas']
        ]);
    }
}
