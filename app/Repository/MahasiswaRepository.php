<?php
namespace App\Repository;

use App\Models\Mahasiswa;

class MahasiswaRepository implements IMahasiswaRepository{

    public function getAllMahasiswa(){

        //changes 1, get the db into the repository Mahasiswa Model
        return Mahasiswa::latest()-> get();
    }

    public function createMahasiswa(array $data){

        //$mahasiswa = new Mahasiswa();
        //Sampe sini belum
        Mahasiswa::insert([
            'nim' => $data['']
        ]);
    }
}
